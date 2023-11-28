@extends('layouts.masterpage')
@section('content')
<div>
    <link href="../assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-9 col-xl-9">
                    <div class="card overflow-hidden">
                        <div class="card-body pt-0">
                            <div class="p-3">
                                <form class="form-horizontal mt-4" method="POST" action="{{route('setup.store')}}">
                                    @csrf
                                    @if($currentStep == 1)
                                        <div id="step-one">
                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                    <span class="sectionsetup">STEP 1 - Company Information</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="companyCode">Code *</label>
                                                    <input type="text" name='companyCode' class="form-control" id="companyCode" placeholder="Enter Code" value="{{$company != null ? $company['code'] : ''}}">
                                                    @error('companyCode')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-8 mb-3">
                                                    <label for="companyname">Company Name *</label>
                                                    <input type="text" name='companyName' class="form-control" id="companyName" placeholder="Enter Company Name" value="{{$company != null ? $company['name'] : ''}}">
                                                    @error('companyName')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="address">Address</label>
                                                    <input type="text" name='address' class="form-control" id="address" placeholder="Enter Address" value="{{$company != null ? $company['address_01'] : ''}}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="city">City</label>
                                                    <input type="text" name='city' class="form-control" id="city" placeholder="Enter City" value="{{$company != null ? $company['city'] : ''}}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="state">State</label>
                                                    <input type="text" name='state' class="form-control" id="state" placeholder="Enter State" value="{{$company != null ? $company['state'] : ''}}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="country">Country</label>
                                                    <input type="text" name='country' class="form-control" id="country" placeholder="Enter Country" value="{{$company != null ? $company['country'] : ''}}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="postalcode">Postal Code</label>
                                                    <input type="text" name='postalCode' class="form-control" id="postal_code" placeholder="Enter Postal Code" value="{{$company != null ? $company['postal_code'] : ''}}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="email">Email</label>
                                                    <input type="text" name='email' class="form-control" id="email" placeholder="Enter Email" value="{{$company != null ? $company['email'] : ''}}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="telephone">Telephone</label>
                                                    <input type="text" name='telephone' class="form-control" id="telephone" placeholder="Enter Telephone" value="{{$company != null ? $company['telephone'] : ''}}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    
                                    @if($currentStep == 2)
                                        <div id="step-two">
                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                    <span class="sectionsetup">STEP 2 - Head / General Manager</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 mb-3">
                                                    <label for="salutation">Salutation</label>
                                                    <select name="salutation" class="form-control" id="salutation">
                                                        <option {{$manager != null && $manager['salutation'] == 'Mr' ? 'selected' : ''}}>Mr</option>
                                                        <option {{$manager != null && $manager['salutation'] == 'Ms' ? 'selected' : ''}}>Ms</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="firstname">First Name *</label>
                                                    <input name="firstName" type="text" class="form-control" id="firstname" placeholder="Enter First Name" value="{{$manager != null ? $manager['first_name'] : ''}}">
                                                    @error('firstName')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="middlename">Middle Name</label>
                                                    <input name="middleName" type="text" class="form-control" id="middlename" placeholder="Enter Middle Name" value="{{$manager != null ? $manager['middle_name'] : ''}}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="lastname">Last Name *</label>
                                                    <input name="lastName" type="text" class="form-control" id="lastname" placeholder="Enter Last Name" value="{{$manager != null ? $manager['last_name'] : ''}}">
                                                    @error('lastName')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="dateofbirth">Date Of Birth</label>
                                                    <div class="input-group">
                                                        <input name="dateOfBirth" type="text" id="dateofbirth" class="form-control" data-date-format="dd/mm/yyyy" data-provide="datepicker" data-date-autoclose="true" value="{{$manager != null ? date('d/m/Y', strtotime($manager['date_of_birth'])) : ''}}">
                                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                        @error('dateOfBirth')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="personalemail">Personal Email</label>
                                                    <input name="personalEmail" type="text" class="form-control" id="personalemail" placeholder="Enter Personal Email" value="{{$manager != null ? $manager['personal_email'] : ''}}">
                                                    @error('personalEmail')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="companyemail">Company Email</label>
                                                    <input name="companyEmail" type="text" class="form-control" id="companyemail" placeholder="Enter Company Email" value="{{$manager != null ? $manager['company_email'] : ''}}">
                                                    @error('companyEmail')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row" id="create-head-user">
                                                <div class="col-md-6 mb-3">
                                                    <label for="username">Username *</label>
                                                    <input name="userName" type="text" class="form-control" id="username" placeholder="Enter Username" value="{{$managerAccount != null ? $managerAccount['username'] : ''}}">
                                                    @error('userName')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="password">Password *</label>
                                                    <input name="password" type="password" class="form-control" id="password" placeholder="Enter password" value="{{$managerAccount != null ? $managerAccount['password_no_hash'] : ''}}">
                                                    @error('password')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    
                                    @if($currentStep == 3)
                                        <div id="step-three">
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <span class="sectionsetup">STEP 3 - Administrator</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="adminusername">Admin Username</label>
                                                    <input type="text" class="form-control" id="adminusername" placeholder="Enter your Admin Username">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="adminpassword" placeholder="Enter password">
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="mb-3 row mt-4">
                                        <div class="col-6 text-start">
                                            @if ($currentStep > 1)
                                                <a class="btn btn-secondary w-md waves-effect waves-light" href="{{route('setup.index', ['step' => "step-".$previousStep])}}">Back</a>
                                            @endif
                                        </div>
                                        <div class="col-6 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit" onclick="submitStep()">Save</button>
                                        </div>
                                        <input type="hidden" name="step" value="{{$currentStep}}">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
</div>
@stop