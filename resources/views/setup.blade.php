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
        
        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-9 col-xl-9">
                        <div class="card overflow-hidden">
                            <div class="card-body pt-0">

                                <h3 class="text-center mt-5 mb-4">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="assets/images/logo-dark.png" alt="" height="30" class="auth-logo-dark">
                                        <img src="assets/images/logo-light.png" alt="" height="30" class="auth-logo-light">
                                    </a>
                                </h3>

                                <div class="p-3">
                                    <h4 class="text-muted font-size-18 mb-1 text-center">Setup Everything For Your Enterpise</h4>
                                    <p class="text-muted text-center">Create Admin Information.</p>
                                    <form class="form-horizontal mt-4" action="index.html">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="fullname">Full Name</label>
                                                <input type="text" class="form-control" id="fullname" placeholder="Enter full name of admin">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="middlename">Middle Name</label>
                                                <input type="text" class="form-control" id="middlename" placeholder="Enter middle name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="lastname">Last Name</label>
                                                <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
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
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>