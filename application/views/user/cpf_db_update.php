<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url()?>User_assets/images/logoes.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/css/main.css">
<!--===============================================================================================-->
	<!-- ================== BEGIN EXTRA JS ================== -->
	<script type="application/javascript" src="<?= base_url()?>Adminassets/js/sweet.js"></script>
	<!-- ================== END EXTRA JS ================== -->
    
<style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 0 ; 
            border-radius: 10px;
            margin-left: 5px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: transparent; 
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #1ABB9C; 
        }
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container">
			<div class="wrap">
				<div class="login100-form-title" style="background-image: url(<?=base_url()?>User_assets/logform/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						career preference format
					</span>
				</div>

				<form class=" validate-form" method="post" action="<?=base_url('CpfUpdateSubmit')?>">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Student name</span>
                                                <input  class="input100" type="text" name="username" placeholder="Enter Your Name">
						<span class="focus-input100"></span>
					</div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Gender</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td><input  type="radio"  value="Male"  name="gendercpf" checked="">&nbsp;&nbsp;&nbsp;Male</td>
                                                        <td><input  type="radio"  value="Female"  name="gendercpf" >&nbsp;&nbsp;&nbsp;Female</td>
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
                                        <span>branch</span><br>
                                        <select  class="form-control"name="branchcpf" required="" >
                                                        <option value="">Select Your Branch</option>
                                                      <option value="ME">Mechanical Engineering</option>
                                                     <option value="CE">Civil Engineering</option>
                                                     <option value="CSE">Computer Science Engineering</option>
                                                     <option value="ETNT">Electronics and Telecommunication Engineering</option>
                                                     <option value="BIO">Biotechnology and Engineering</option>
                                                     <option value="CHEM">Chemical Engineering</option>
                                                     	</select>
                                    </div>


                                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required"><br>
						<span>Mobile No.</span>
                                                <br><input class="input100" type="number" name="contactcpf" placeholder="Enter Your Mobile Number">
						<span class="focus-input100"></span>
					</div>
                                    
                                    
                                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required"><br>
						<span>Whatsapp Mobile No</span>
                                                <br><input class="input100" type="number" name="whatsapp" placeholder="Enter Your Whatsapp Mobile No">
						<span class="focus-input100"></span>
					</div>
                                    
                                     <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required"><br>
						<span>E-Mail Id</span>
                                                <br><input class="input100" type="email" name="emailcpf" placeholder="Enter Your E-Mail Id">
						<span class="focus-input100"></span>
					</div>
                                    
                                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required"><br>
						<span>Passing Out Year</span>
                                                <br><input class="input100" type="number" name="passyearcpf" placeholder="Enter Your Passing Out Year">
						<span class="focus-input100"></span>
					</div>
                                    
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Want To Job Through T&P department Of RIT</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio" value="yes" name="tnpjob" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio"  value="yes"   name="tnpjob">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                     
                                    
                                     <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>First & Primary Requirement Job</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio" value="yes" name="requirjob" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio" value="yes"   name="requirjob">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                     <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Want To Become Entrepreneur</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio"  value="yes" name="Enterpeneur" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio"  value="yes"  name="Enterpeneur">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    
                                     <div class="wrap validate-input m-b-18" data-validate = "Password is required" style="align:center;"><br>
                                         <span><h5>HIGHER STUDIES</h5></span>
                                                
					</div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Preparing For Gate</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio"  value="yes" name="gate" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio"   name="gate">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                     <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Preparing For GRE</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio" value="yes" name="ger" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio"  value="no"  name="ger">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>M.Tech From IIT/NIT/Any Private Institute & University (Specify)</span>
                                                <input  class="input100" type="text" name="mtech" placeholder="M.Tech From IIT/NIT/Any Private Institute & University (Specify)">
						<span class="focus-input100"></span>
					</div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Preparing For CAT/GMAT/MBA From Any Other Institute & University (Specify)</span>
                                                <input  class="input100" type="text" name="cat" placeholder="Preparing For CAT/GMAT/MBA From Any Other Institute & University (Specify)">
						<span class="focus-input100"></span>
					</div>
                                    
                                     <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Preparing For Civil Services - UPSC/PSC</span>
                                                <input  class="input100" type="text" name="upsc" placeholder="Preparing For Civil Services - UPSC/PSC">
						<span class="focus-input100"></span>
					</div>
                                    
                                    
                                    <div class="wrap validate-input m-b-18" data-validate = "Password is required" style="align:center;"><br>
                                         <span><h5>GOVERNMENT JOB</h5></span>
                                                
					</div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Preparing For Government Job</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio"  value="yes" name="govtjob" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio"  value="no"  name="govtjob">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Want To Join Only Government Job</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio" value="yes" name="onlygovtjob" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio" value="no"   name="onlygovtjob">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                       <div class="wrap validate-input m-b-18" data-validate = "Password is required" style="align:center;"><br>
                                         <span><h5>LOCATION PREFERENCE FOR JOB</h5></span>
                                                
					</div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Want To Join In Chhattisgarh Only</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio" value="yes" name="cgjob" checked=""> &nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio" value="no"   name="cgjob">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    
                                     
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Ready To Move  Anywhere In Country</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio"  value="yes" name="country" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio"   value="no" name="country">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    
                                       <div class="wrap validate-input m-b-18" data-validate = "Password is required" style="align:center;"><br>
                                         <span><h5>INDUSTRY PREFERENCE</h5></span>
                                                
					</div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Only Core</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio" value="yes" name="Core" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio"  value="no" name="Core">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    
                                     <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Only Software</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio"  value="yes" name="software" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio"  value="no"  name="software">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    
                                     <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Only Managerial jobs</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio" value="yes" name=" Managerinal" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio"  value="no" name=" Managerinal">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    
                                     <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>First Preference Core But Open For Software & Managerial jobs</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio" value="yes" name=" jobpreferance" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio"  value="no" name=" jobpreferance">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Any Other Industry Like Banking,Steel,Power Cement etc(Specify Branch wise)</span>
                                                <input  class="input100" type="text" name="banking" placeholder="Enter Any Other Industry Like Banking,Steel,Power Cement etc(Specify Branch wise)">
						<span class="focus-input100"></span>
					</div>
                                    
                                    
                                    
					
					<div class="container-login100-form-btn">
						<input type="submit" name="submit" value="Submit" class="login100-form-btn">
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php

if($this->session->flashdata('item')){
    $item=$this->session->flashdata('item');
    if($item == "yes"){ ?>
         <script> swal("Successfully Data Updated!!!", "Now the Manage Your Profile", "success");</script>
    <?php }else if ($item == "no"){ ?>
        <script>swal("oops something went wrong!!!", "Please try again...", "error");</script>
   <?php     
    }else if ($item == "uppass"){ ?>
        <script>swal("Successfully Logged In!!!", "Now The Update Your Password", "success");</script>
   <?php     
    }else if ($item == "logout"){ ?>
        <script>swal("Successfully Logged Out!!!", "Thank you...!", "success");</script>
   <?php     
    }else if ($item == "errpass"){ ?>
        <script>swal("opps password is wrong!!!", "Please try again...", "error");</script>
   <?php     
    }else if ($item == "errusr"){ ?>
        <script>swal("opps Username is wrong!!!", "Please try again...", "error");</script>
   <?php     
    }
}

?>
<!--===============================================================================================-->
	<script src="<?=base_url()?>User_assets/logform/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>User_assets/logform/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>User_assets/logform/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url()?>User_assets/logform/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>User_assets/logform/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>User_assets/logform/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url()?>User_assets/logform/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>User_assets/logform/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>User_assets/logform/js/main.js"></script>

</body>
</html>