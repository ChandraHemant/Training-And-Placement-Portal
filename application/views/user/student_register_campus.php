

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Registration </title>
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
						Student Registration Form
					</span>
				</div>
                <?php if($log=='yes'){?>
                
				<form class="validate-form" method="post" action="<?=base_url('StdRegSubmit')?>">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Enrollment no. is required">
                    <br><br><br>
						<span class="">Enrollment Number</span>
						<input  class="input100" type="text" name="eroll" placeholder="Enroll Number">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Roll number is required">
						<span class="">Roll Number</span>
						<input  class="input100" type="number" name="rollno" placeholder="Rollno">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the name">
						<span class="">Student Name</span>
						<input class="input100" type="text" name="name" placeholder="Student Name ">
						<span class="focus-input100"></span>
					</div>
					
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>
				</form>
                <?php }else{?>
                
				<form class="validate-form" method="post" action="<?=base_url('StdRegViewSub')?>" enctype="multipart/form-data">
					
                        
                        <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter your college name">
                             <br><br><br>
						<span class="">College Name</span>
						<input class="input100" type="text" name="collname" placeholder="Enter Your College Name"> 
						<span class="focus-input100"></span>
                    </div>   
                        
                       <div class="wrap-input100 validate-input m-b-26" data-validate="Enrollment no. is required">
						<span class="">Enrollment Number</span>
						<input  class="input100" type="text" name="eroll" placeholder="Enter Your Enroll Number">
						<span class="focus-input100"></span>
					</div>
                    
					<div class="wrap-input100 validate-input m-b-26" data-validate="Roll number is required">
						<span class="">Roll Number</span>
						<input  class="input100" type="number" name="rollno" placeholder="Enter Your Rollno">
						<span class="focus-input100"></span>
					</div>
                    
					<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the name">
						<span class="">Student Name</span>
						<textarea class="input100" type="text" name="name" placeholder="Enter Your Name "></textarea> 
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the Mobile number">
						<span class="">Mobile Number</span>
						<input class="input100" type="number" name="mobile" placeholder=" Enter Your Mobile No."> 
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the whatsapp number">
						<span class="">Whatsapp Number</span>
						<input class="input100" type="number" name="wp" placeholder=" Enter Your Whatsapp No."> 
						<span class="focus-input100"></span>
					</div>
                    
                     <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the email id">
						<span class="">Email Id</span>
						<input class="input100" type="email" name="email" placeholder="Enter Your Email Id"> 
						<span class="focus-input100"></span>
					</div>
                       
					<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the 10th %">
						<span class="">10th%</span>
						<input class="input100" type="number" name="X_per" placeholder="Percentage of 10th class "> 
						<span class="focus-input100"></span>
					</div>
					
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the 12th %">
						<span class="">12th%</span>
						<input class="input100" type="number" name="XII_per" placeholder="Percentage of 12th class "> 
						<span class="focus-input100"></span>
					</div>
					 
					 <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the branch">
						<span class="">Branch</span>
						<input class="input100" type="text" name="branch" placeholder=" Branch "> 
						<span class="focus-input100"></span>
					</div>
                    
					<div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the I sem%">
						<span class="">I semester %</span>
						<input class="input100" type="text" name="Isem_per" placeholder=" Enter your Ist sem%"> 
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the IInd sem%">
						<span class="">II semester%</span>
						<input class="input100" type="number" name="IIsem_per" placeholder=" Enter your II sem%"> 
						<span class="focus-input100"></span>
					</div>
                    
                     <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the IIIrd sem%">
						<span class="">III semester%</span>
						<input class="input100" type="number" name="IIIsem_per" placeholder=" Enter your II sem%"> 
						<span class="focus-input100"></span>
					</div>
                    
                     <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the Vth sem%">
						<span class="">IV semester%</span>
						<input class="input100" type="number" name="IVsem_per" placeholder=" Enter your VI sem%"> 
						<span class="focus-input100"></span>
					</div>
                    
                     <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the Vth sem%">
						<span class="">V semester%</span>
						<input class="input100" type="number" name="Vsem_per" placeholder=" Enter your Vth sem%"> 
						<span class="focus-input100"></span>
					</div>
                   
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the VIth sem%">
						<span class="">VI semester%</span>
						<input class="input100" type="number" name="VIsem_per" placeholder=" Enter your VIth sem%"> 
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the VIIth sem%">
						<span class="">VII semester%</span>
						<input class="input100" type="number" name="VIIsem_per" placeholder=" Enter your VIIth sem%"> 
						<span class="focus-input100"></span>
					</div>
                   
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the VIIIth sem%">
						<span class="">VIII semester%</span>
						<input class="input100" type="number" name="VIIIsem_per" placeholder=" Enter your VIIIth sem%"> 
						<span class="focus-input100"></span>
					</div>
                    
                         <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter overall per">
						<span class="">OverAll %</span>
						<input class="input100" type="number" name="overall_per" placeholder=" Enter Your OverAll%"> 
						<span class="focus-input100"></span>
                    </div>
                             
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the year">
						<span class="">Passing out year</span>
						<input class="input100" type="number" name="passout_yr" placeholder=" Pass out Year"> 
						<span class="focus-input100"></span>
					</div>
					
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the Current Backlogs">
						<span class="">Total Backlogs (if any)</span>
						<input class="input100" type="number" name="backlogs" placeholder=" Backlogs"> 
						<span class="focus-input100"></span>
					</div>
					
					 <div class="wrap-input100 validate-input m-b-26" data-validate="Please enter the Working Experience">
						<span class="">Working</span>
						<input class="input100" type="text" name="work" placeholder=" Working Experience"> 
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>
				</form>
                <?php }?>
			</div>
		</div>
	</div>
	<?php

if($this->session->flashdata('item')){
    $item=$this->session->flashdata('item');
    if($item == "yes"){ ?>
         <script> swal("Successfully Registered!!!", "Thank You", "success");</script>
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
        <script>swal("oops password is wrong!!!", "Please try again...", "error");</script>
    <?php     
    }else if ($item == "already"){ ?>
        <script>swal("oops user already registerd!!!", "Please try again next time...", "error");</script>
   <?php     
    }else if ($item == "errusr"){ ?>
        <script>swal("oops Username is wrong!!!", "Please try again...", "error");</script>
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