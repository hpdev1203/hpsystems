<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function getSetup(){
        return view('setup');
    }
    public function postSetup(Request $request){
        dd($request);
    }
}
