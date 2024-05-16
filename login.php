<?php 
include("include/connection.php");
?>

<?php 
include("header.php");
?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-7 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-5">
                                <div class="p-4">
                                    <div class="text-center">
                                        <h1 class="h6 text-gray-900 mb-7">STUDENT ORGANIZATIONS MANAGEMENT SYSTEM</h1>
                                    </div>
                                    <form  action="login_process.php" method='post' class="user">
                                        <div class="form-group">
                                            <input type="username"  name='username' class="form-control form-control-user"
                                                id="exampleInputUsername"  placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name='password' class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" 
                                        class="btn btn-primary btn-user btn-block" value="Login">
                                           
                                    
        
                                        </a>    
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
