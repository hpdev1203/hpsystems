<!--- Added Comment --->
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Setup | HP Systems</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="HP Systems - Best of Enterpise Resource Planning system" name="description" />
        <meta content="HP Systems" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico"> 
        
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <style>
            .sectionsetup{
                text-transform: uppercase;
                font-weight: bold;
                font-size: 15px;
                border-bottom: 3px double;
            }
        </style>    
    </head>

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-9 col-xl-9">
                        <div class="card overflow-hidden">
                            <div class="card-body pt-0">

                                <h3 class="text-center mt-3 mb-3">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="assets/images/logo-dark.png" alt="" height="30" class="auth-logo-dark">
                                    </a>
                                </h3>

                                <div class="p-3">
                                    <h4 class="text-muted font-size-18 mb-1 text-center">SETUP YOUR ENTERPISE</h4>
                                   
                                    <form class="form-horizontal mt-4" action="{{ route('postSetup')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="sectionsetup">Head / General Manager</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 mb-3">
                                                <label for="salutation">Salutation</label>
                                                <select class="form-control" id="salutation">
                                                    <option>Mr</option>
                                                    <option>Ms</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5 mb-3">
                                                <label for="firstname">First Name</label>
                                                <input type="text" class="form-control" id="firstname" placeholder="Enter your first name">
                                            </div>
                                            <div class="col-md-5 mb-3">
                                                <label for="lastname">Last Name</label>
                                                <input type="text" class="form-control" id="lastname" placeholder="Enter your last name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="displayname">Display Name</label>
                                                <input type="text" class="form-control" id="displayname" placeholder="Enter your display name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="sectionsetup">Enterpise Information</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 mb-3">
                                                <label for="enterpisename">Enterpise Name</label>
                                                <input type="text" class="form-control" id="enterpisename" placeholder="Enter your enterpise name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="taxcode">Tax Code</label>
                                                <input type="text" class="form-control" id="taxcode" placeholder="Enter tax code">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="uen">UEN</label>
                                                <input type="text" class="form-control" id="uen" placeholder="Enter your UEN">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="sectionsetup">Administrator Setup</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="adminusername">Admin Username</label>
                                                <input type="text" class="form-control" id="adminusername" placeholder="Enter your Admin Username">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" placeholder="Enter password">
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="gender">Gender</label>
                                                <select class="form-control" id="gender">
                                                    <option>Select</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="gender">Birthday</label>
                                                <input type="date" class="form-control" id="gender" placeholder="Enter middle name">
                                            </div>
                                        </div> -->
                                        
                                        <div class="mb-3 row mt-4">
                                            <div class="col-12 text-end">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Next</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <script src="assets/libs/select2/js/select2.min.js"></script>
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
        <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

        <script src="assets/js/pages/form-advanced.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>