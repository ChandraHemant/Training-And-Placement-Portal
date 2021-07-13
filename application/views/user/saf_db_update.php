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
						Student Assessment Format
					</span>
				</div>
<br>
				<form class="validate-form" method="post"  action="<?=base_url('SafFormSubmit')?>" >
					<div class="wrap-input100 validate-input m-b-26" data-validate="Student name is required"><br>
						<span>Student name</span>
                                                <input  class="input100" type="text" name="username" placeholder="Enter Your Name">
						<span class="focus-input100"></span>
					</div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						                  <span>Gender</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td><input  type="radio"value="Male"  name="gender" checked="">&nbsp;&nbsp;&nbsp;Male</td>
                                                        <td><input  type="radio"value="Female"  name="gender" >&nbsp;&nbsp;&nbsp;Female</td>
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    <div class="wrap-input100 validate-input m-b-26"><br>
                                                <span>Branch</span><br>
                                                <select  class="form-control"name="branch" required>
                                                   <option value="">Select Your Branch</option>
                                                   <option value="MECH">Mechanical Engineering</option>
                                                     <option value="CIVIL">Civil Engineering</option>
                                                     <option value="CSE">Computer Science Engineering</option>
                                                     <option value="ET&T">Electronics and Telecommunication Engineering</option>
                                                     <option value="BIOTECH">Biotechnology and Engineering</option>
                                                     <option value="CHEM">Chemical Engineering</option>
                                                    	</select>
                                    </div>


                                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Mobile no. is required"><br>
						<span>Mobile No.</span>
                                                <br><input class="input100" type="number" name="contact" placeholder="Enter Your Mobile Number">
						<span class="focus-input100"></span>
					</div>
                                    
                                    
                                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Whatsapp no. is required"><br>
						<span>Whatsapp Mobile No</span>
                                                <br><input class="input100" type="number" name="whatsapp contact" placeholder="Enter Your Whatsapp Mobile No">
						<span class="focus-input100"></span>
					</div>
                                    
                                     <div class="wrap-input100 validate-input m-b-18" data-validate = "Email id is required"><br>
						<span>E-Mail Id</span>
                                                <br><input class="input100" type="email" name="email" placeholder="Enter Your E-Mail Id">
						<span class="focus-input100"></span>
					</div>
                                    
                                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Passin ot year is required"><br>
						<span>Passing Out Year</span>
                                                <br><input class="input100" type="number" name="Pass year" placeholder="Enter Your Passing Out Year">
						<span class="focus-input100"></span>
					</div>
                                    
                                     <div class="wrap-input100 validate-input m-b-26" ><br>
                                         <span>Attendance In Academics</span><br>
                                           <select  class="form-control"name="attendance" required>
                                                       
                                                   <option value="">Select One</option>                
                                                      <option value="2">Below 10%</option>
                                                     <option value="4">10-50%</option>
                                                     <option value="6">50-75%</option>
                                                     <option value="8">Above 75%</option></select>
                                    </div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Technical skill is required"><br>
						<span>Technical Skill</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td> <input type="radio" value="yes"   name="technical" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td> <input type="radio" value="No"  name="technical">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>

                                    
                                    <div class="wrap validate-input m-b-18" style="align:center;"><br>
                                         <span><h4>Employability Skill</h4></span>
                                                
					</div>
                                    
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="This field is required"><br>
						<span>Quantitative/Aptitude Skill</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio" value="yes"  name="aptitude" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio" value="no"  name="aptitude">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="This field is required"><br>
						<span>Communication Skill</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio"  name="communication" value="yes" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio" value="no"  name="communication">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    
                                     <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required"><br>
						<span>Presentation Skill</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio" value="yes"   name="presentation" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio"  value="no"  name="presentation">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="This is required"><br>
                                        <span>Behavior<br></span>
                                            <select  class="form-control"name="behaviour" required>
                                                                  
                                                   <option value="">Select One</option>      
                                                      <option value="Behavioral">Behavioral</option>
                                                     <option value="Soft">Soft</option>
                                                     <option value="HR Skill">HR skill</option></select>
                                    </div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="This is required"><br>
						<span>Campus Requirement Training Form External  Agency</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio" value="yes"  name="campus" checked="">&nbsp;&nbsp;&nbsp;Interested</td>
                                                            <td>  <input type="radio" value="no"   name="campus">&nbsp;&nbsp;&nbsp;Not Interested</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="This is required"><br>
						              <span>Ready To Pay For Campus Requirement Training For External Agency</span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>  <input type="radio" value="yes"  name="agency" checked="">&nbsp;&nbsp;&nbsp;Yes</td>
                                                            <td>  <input type="radio"  value="no"  name="agency">&nbsp;&nbsp;&nbsp;No</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
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