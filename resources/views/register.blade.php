<!DOCTYPE html>
<html lang="en">

<head>
    @include('FrontEnd/dashboardHead')
    <title>24/7 MD - Register</title>

    <script type="text/javascript">
        $(document).ready(function() {
            $("select").on('change', function() {
                $(this).find("option:selected").each(function() {
                    var geeks = $(this).attr("value");
                    if (geeks) {
                        $(".user").not("." + geeks).hide();
                        $("." + geeks).show();
                    } else {
                        $(".user").hide();
                    }

                });
            }).change();
        });
    </script>
</head>

<body style="background-color:#1b2f45">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <select class="form-control-role">
                                        <option value="None" selected disabled>Select Type of Account</option>
                                        <option value="Patient">User</option>
                                        <option value="Doctor">Doctor</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" id="exampleDateofBirth"
                                        placeholder="Date of Birth - ">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <div>
                                <div class="Doctor user">
                                 <div class="form-group">
                                    <label style="font-size: 0.8rem;">Upload PRC ID: </label>
                                    <input type="file" class="form-control-user" name="fileupload" accept="image/*" />
                                </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <select name="dropdown" class="form-control-role">
                                        <option value="None" selected disabled>Select Specialization</option>
                                        <option value="Family Doctor">Family Doctor</option>
                                        <option value="Internal Medicine">Internal Medicine</option>
                                        <option value="Occupational Health Medicine">Occupational Health Medicine</option>
                                        <option value="ENT">ENT</option>
                                        <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                                    </select>
                                </div>
                                <hr>
                                <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <form style="font-size: 0.8rem;">      
                                        <label for="symptoms">Please select day availability</label><br>
                                        <input type="checkbox" name="Sunday" /> Sunday<br>
                                        <input type="checkbox" name="Monday" /> Monday<br> 
                                        <input type="checkbox" name="Tuesday" /> Tuesday<br>
                                        <input type="checkbox" name="Wednesday" /> Wednesday<br>
                                        <input type="checkbox" name="Thursday" /> Thursday <br>
                                        <input type="checkbox" name="Friday" /> Friday<br>
                                        <input type="checkbox" name="Saturday" /> Saturday<br>
                                    </form>
                                </div>
                                <div class="col-sm-4">
                                    <form style="font-size: 0.8rem;">      
                                        <label for="symptoms">Please select AM availability</label><br>
                                        <input type="checkbox" name="12:00AM - 1:00AM" /> 12:00AM - 1:00AM<br>
                                        <input type="checkbox" name="1:00AM - 2:00AM" /> 1:00AM - 2:00AM<br>
                                        <input type="checkbox" name="2:00AM - 3:00AM" /> 2:00AM - 3:00AM<br>
                                        <input type="checkbox" name="3:00AM - 4:00AM" /> 3:00AM - 4:00AM<br>
                                        <input type="checkbox" name="4:00AM - 5:00AM" /> 4:00AM - 5:00AM<br>
                                        <input type="checkbox" name="5:00AM - 6:00AM" /> 5:00AM - 6:00AM<br>
                                        <input type="checkbox" name="6:00AM - 7:00AM" /> 6:00AM - 7:00AM<br>
                                        <input type="checkbox" name="7:00AM - 8:00AM" /> 7:00AM - 8:00AM<br>
                                        <input type="checkbox" name="8:00AM - 9:00AM" /> 8:00AM - 9:00AM<br>
                                        <input type="checkbox" name="9:00AM - 10:00AM" /> 9:00AM - 10:00AM<br> 
                                        <input type="checkbox" name="10:00AM - 11:00AM" /> 10:00AM - 11:00AM<br>
                                        <input type="checkbox" name="11:00AM - 12:00PM" /> 11:00AM - 12:00PM<br>
                                    </form>
                                </div> 
                                <div class="col-sm-4">
                                    <form style="font-size: 0.8rem;">
                                        <label for="symptoms">Please select PM availability</label><br>
                                        <input type="checkbox" name="12:00PM - 1:00PM" /> 12:00PM - 1:00PM <br>
                                        <input type="checkbox" name="1:00PM - 2:00PM" /> 1:00PM - 2:00PM<br>
                                        <input type="checkbox" name="2:00PM - 3:00PM" /> 2:00PM - 3:00PM<br>
                                        <input type="checkbox" name="4:00PM - 5:00PM" /> 4:00PM - 5:00PM<br>
                                        <input type="checkbox" name="5:00PM - 6:00PM" /> 5:00PM - 6:00PM<br>
                                        <input type="checkbox" name="6:00PM - 7:00PM" /> 6:00PM - 7:00PM<br>
                                        <input type="checkbox" name="7:00PM - 8:00PM" /> 7:00PM - 8:00PM<br>
                                        <input type="checkbox" name="8:00PM - 9:00PM" /> 8:00PM - 9:00PM<br>
                                        <input type="checkbox" name="9:00PM - 10:00PM" /> 9:00PM - 10:00PM<br>
                                        <input type="checkbox" name="10:00PM - 11:00PM" /> 10:00PM - 11:00PM<br>
                                        <input type="checkbox" name="11:00PM - 12:00AM" /> 11:00PM - 12:00AM
                                    </form>         
                                </div> 
                                
                                </div>
                            
                       
                                <hr>
                                <form class="user"> 
                                <a href="/login" class="btn btn-primary btn-user btn-block">
                                Register Account
                                </a>
                                </form>
                               
                               
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/forgot-password">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/login">Already have an account? Login!</a>
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