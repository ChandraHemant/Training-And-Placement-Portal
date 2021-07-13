<!DOCTYPE html>
<html lang="en">
<head>
	<title>Company Registration Form</title>
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
</head>
<body>
	
	<div class="limiter">
		<div class="container">
			<div class="wrap">
				<div class="login100-form-title" style="background-image: url(<?=base_url()?>User_assets/logform/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Company Joining Details
					</span>
					
				</div>
<br><br>
				<form class="validate-form" method="post" action="<?=base_url('Crf_submit')?>">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Company name is required">
						<span class="">Company Name</span>
						<input  class="input100" type="text" name="cname" placeholder="company name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="website name is required">
						<span class="">Website</span>
						<input  class="input100" type="url" name="website" placeholder="website">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the Profile">
						<span class="">Company Profile</span>
						<textarea class="input100" type="text" name="cprofile" placeholder="Company profile "></textarea> 
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the company id">
						<span class="">Company ID / PIN</span>
						<input class="input100" type="text" name="pin" placeholder="Company ID/PIN "> 
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the branches">
						<span class="">Eligible Branches</span>
						<input class="input100" type="text" name="branch" placeholder="Eligible Branches "> 
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the batch">
						<span class="">Passing out batch</span>
						<input class="input100" type="text" name="batch" placeholder="Passing out batch "> 
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the criteria">
						<span class="">Eligiblity Criteria</span>
						<textarea class="input100" type="text" name="criteria" placeholder="Eligiblity Criteria "></textarea> 
						<span class="focus-input100"></span>
					</div><br>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the Job position">
						<span class="">Job Position</span>
						<input class="input100" type="text" name="jposition" placeholder="Job Position"> 
						<span class="focus-input100"></span>
					</div><br>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the Job location">
						<span class="">Job Location</span>
						<input class="input100" type="text" name="jlocation" placeholder="Job location">
						<span class="focus-input100"></span>
					</div><br>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the Trainning Details">
						<span class="">Trainning Details</span>
						<textarea class="input100" type="text" name="tdetails" placeholder="Trainning Details"></textarea>
						<span class="focus-input100"></span>
					</div>
                                    
                                    
                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the salary">
						<span class="">Salary </span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td><label><input  type="radio" name="name" value="basic" checked="">&nbsp;&nbsp;Basic</label></td>
                                                        <td><label><input  type="radio" name="name"value="HRA" >&nbsp;&nbsp;HRA</label></td>
                                                        <td><label><input  type="radio" name="name" value="DA" >&nbsp;&nbsp;DA</label></td>
                                                        <td><label><input  type="radio" name="name" value="TATA">&nbsp;&nbsp;TA</label></td>
                                                        <td><label><input  type="radio" name="name" value="PF" >&nbsp;&nbsp;PF</label></td>
                                                        <td><label><input  type="radio" name="name" value="Incentive" >&nbsp;&nbsp;Incentive</label></td>
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>

                                    <div class="wrap-input100 validate-input m-b-26" data-validate="Please
                                    enter salary

                                ">
						<span class="">Salary/Stipend during trainning preriod</span>
						<input class="input100" type="text" name="salary" placeholder="Salary during trainning">
						<span class="focus-input100"></span>
					</div><br>
                          <div class="wrap-input100 validate-input m-b-26" data-validate="Please
                                    enter date

                                ">
						<span class="">Joining date</span>
						<input class="input100" type="date" name="jdate" placeholder="Joining date">
						<span class="focus-input100"></span>
					</div><br>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Please
                                enter the field   

                                ">
						<span class="">Offer Letter (i.e after the campus drive , after 8th sem, etc)</span>
						<input class="input100" type="text" name="oletter" placeholder="Offer Letter">
						<span class="focus-input100"></span>
					</div><br>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Please
                                enter the conditions  

                                ">
						<span class="">Terms and Conditions</span>
						<textarea class="input100" type="text" name="con" placeholder="Terms & Conditions"></textarea>
						<span class="focus-input100"></span>
					</div><br>



					<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the type">
						<span class="">Type of Campus Drive </span>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td><label><input  type="radio" name="type" value="On" checked="">&nbsp;&nbsp;On</label></td>
                                                        <td><label><input  type="radio" name="type"value="Off" >&nbsp;&nbsp;Off</label></td>
                                                        <td><label><input  type="radio" name="type" value="Pool" >&nbsp;&nbsp;Pool</label></td>
                                                        <td><label><input  type="radio" name="type" value="Open">&nbsp;&nbsp;Open</label></td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>					
                                    </div>
                     <div class="wrap-input100 validate-input m-b-26" data-validate="Please
                                enter the placement process  

                                ">
						<span class="">Placement Process</span>
						<textarea class="input100" type="text" name="pprocess" placeholder="Placement Process"></textarea>
						<span class="focus-input100"></span>
					</div><br>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Please
                                enter the bond   

                                ">
						<span class="">Bond</span>
						<input class="input100" type="text" name="bond" placeholder="Bond">
						<span class="focus-input100"></span>
					</div><br>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Please
                                enter the security depaint   

                                ">
						<span class="">Security depaint</span>
						<input class="input100" type="text" name="security" placeholder="Security depaint">
						<span class="focus-input100"></span>
					</div><br>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Please
                                enter the job profile  

                                ">
						<span class="">Job Profile</span>
						<textarea class="input100" type="text" name="jprofile" placeholder="Job Profile"></textarea>
						<span class="focus-input100"></span>
					</div><br>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Please
                                enter the date  

                                ">
						<span class="">Proposed Date Of Campus Drive</span>
						<input class="input100" type="date" name="cdate" placeholder="Campus date">
						<span class="focus-input100"></span>
					</div><br>

                       <div class="wrap-input100 validate-input m-b-26" data-validate="Please
                                enter your email  

                                ">
						<span class="">Email id</span>
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div><br>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Please
                               create your password  

                                ">
						<span class="">Create Password</span>
						<input class="input100" type="password" name="password" placeholder="password">
						<span class="focus-input100"></span>
					</div><br>




                                    
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php

if($this->session->flashdata('item')){
    $item=$this->session->flashdata('item');
    if($item == "yes"){ ?>
         <script> swal("Successfully Logged In!!!", "Now the Manage Your Profile", "success");</script>
    <?php }else if ($item == "no"){ ?>
        <script>swal("opps something went wrong!!!", "Please try again...", "error");</script>
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