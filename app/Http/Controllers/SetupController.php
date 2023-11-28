<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Setup;
use App\Models\Company;
use App\Models\User;
use App\Models\Staff;

class SetupController extends Controller
{
    public function index(string $stepStr = ""){
        $isStep1Done = false;
        $isStep2Done = false;
        $isStep3Done = false;
        $setup = Setup::first();
        $company = Company::first();
        $manager = Staff::first();
        $managerAccount = User::where('staff_id', $manager->id)->first() ? User::where('staff_id', $manager->id)->first() : new User;

        if($setup){
            $isStep1Done = $setup->step_1;
            $isStep2Done = $setup->step_2;
            $isStep3Done = $setup->step_3;
        }

        $currentStep = $isStep2Done ? 3 : ($isStep1Done ? 2 : 1);
        
        if($stepStr == ""){
            return redirect(route('setup.index', ['step' => "step-".$currentStep]));
        }
        
        if($stepStr == "step-1" || $stepStr == "step-2" || $stepStr == "step-3"){
            $step = substr($stepStr,5,1);
            if($step > $currentStep){
                return redirect(route('setup.index', ['step' => "step-".$currentStep]));
            }   
            return view('setup.index')->with(['currentStep' => $step, 'previousStep' => $step-1, 'title' => 'Setup - Step '.$step, 'company' => $company, 'manager' => $manager, 'managerAccount' => $managerAccount]);
        }
        abort(404);
    }


    public function store(Request $req){
        $step = $req->step;
        $setup = Setup::first();
        $company = Company::first();
        $isStep1Done = false;
        $isStep2Done = false;
        $isStep3Done = false;

        if($setup){
            $isStep1Done = $setup->step_1;
            $isStep2Done = $setup->step_2;
            $isStep3Done = $setup->step_3;
        }

        switch ($step) {
            case 1:
                $validated = $req->validate([
                    'companyCode' => 'required|max:10',
                    'companyName' => 'required|max:250',
                ]);
                
                $company = !$company ? new Company : $company;

                $company->code          = $req->companyCode;
                $company->name          = $req->companyName;
                $company->address_01    = $req->address;
                $company->city          = $req->city;
                $company->state         = $req->state;
                $company->country       = $req->country;
                $company->postal_code   = $req->postalCode;
                $company->email         = $req->email;
                $company->telephone     = $req->telephone;
                $company->save();

                $isStep1Done = true;
                break;
            case 2:
                $validated = $req->validate([
                    'firstName' => 'required|max:25',
                    'lastName'  => 'required|max:25',
                    'userName'  => 'required|max:50',
                    'password'  => 'required'
                ]);

                $manager = $company->head_staff_id ? Staff::find($company->head_staff_id) : new Staff;

                $manager->salutation        = $req->salutation;
                $manager->staff_code        = $company->code.'001';
                $manager->gender            = $req->salutation == 'Ms' ? 'Female' : 'Male';
                $manager->first_name        = $req->firstName;
                $manager->middle_name       = $req->middleName;
                $manager->last_name         = $req->lastName;
                $manager->date_of_birth     = Carbon::createFromFormat('d/m/Y', $req->dateOfBirth)->format('Y-m-d');
                $manager->personal_email    = $req->personalEmail;
                $manager->company_email     = $req->companyEmail;
                $manager->company_id        = $company->id;
                $manager->save();

                $company->head_staff_id = $manager->id;
                $company->save();

                $managerAccount = User::where('staff_id', $manager->id)->first() ? User::where('staff_id', $manager->id)->first() : new User;

                $managerAccount->username = $req->userName;
                $managerAccount->password = Hash::make($req->password);
                $managerAccount->password_no_hash = $req->password;
                $managerAccount->email = $manager->company_email;
                $managerAccount->staff_id = $manager->id;

                $managerAccount->save();
                $isStep2Done = true;
                break;
            case 3:
                $validated = $req->validate([
                    'companyCode' => 'required|max:20',
                    'companyEmail' => 'required|max:100',
                ]);
                $isStep3Done = true;
                break;
            
            default:
                # code...
                break;
        }
        if($setup){
            $setup->step_1 = $isStep1Done;
            $setup->step_2 = $isStep2Done;
            $setup->step_3 = $isStep3Done;
            $setup->save();
        }else{
            $setup = Setup::create([
                'step_1' => $isStep1Done,
                'step_2' => $isStep2Done,
                'step_3' => $isStep3Done
            ]);
        }
        $step++;
        return redirect(route('setup.index', ['step' => "step-".$step]));
    }
}