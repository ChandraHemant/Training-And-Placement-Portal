<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Database Update</title>
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
						Student Database Update Form
					</span>
				</div>
<br>
                <?php
                    if($dbf){
                        foreach($dbf as $value):?>
                
				<form class="validate-form" method="post" action="<?=base_url('StdDataUpdSubmit')?>">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Student name is required"><br>
						<span>Student name</span>
                            <input  class="input100" type="text" name="stdname" value="<?=$value->d_name?>" placeholder="Enter Your Name">
						<span class="focus-input100"></span>
					</div>
                                    
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Tis field is required"><br>
                          <span>Gender</span>
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <?php 
                                                if($value->gender=="Male" || $value->gender=="male" || $value->gender=="M" || $value->gender=="m"){
                                            ?>
                                            <td><input  type="radio" name="gender" value="Male"  checked="">&nbsp;&nbsp;&nbsp;Male</td>
                                            
                                            <td><input type="radio" name="gender" value="Female" >&nbsp;&nbsp;&nbsp;Female</td>
                                            <?php }else{?>
                                                
                                            <td><input  type="radio" name="gender" value="Male"  >&nbsp;&nbsp;&nbsp;Male</td>
                                            
                                            <td><input checked type="radio" value="Female"  name="gender" >&nbsp;&nbsp;&nbsp;Female</td>
                                            <?php }?>
                                        </tr>
                                    </tbody>

                                </table>					
                    </div>
                                    
                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Passin ot year is required"><br>
						<span>Passing Out Year</span>
                            <br><input class="input100" type="number" value="<?=$value->pass_out_yr?>"  name="Pass_year" placeholder="Enter Your Passing Out Year">
						<span class="focus-input100"></span>
					</div>  
                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Semester is required"><br>
						<span>Semester</span>
                            <br><input class="input100" type="text" value="<?=$value->semester?>"  name="semester" placeholder="Enter Your Current Semester">
						<span class="focus-input100"></span>
					</div> 
                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Branch is required"><br>
						<span>Branch</span>
                            <br><input class="input100" type="text" value="<?=$value->branch?>"  name="branch" placeholder="Enter Your Branch">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Email id is required"><br>
						<span>E-Mail Id</span>
                            <br><input class="input100" type="email" name="email_id" value="<?=$value->email_id?>"  placeholder="Enter Your E-Mail Id">
						<span class="focus-input100"></span>
					</div>
                       
                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Mobile no. is required"><br>
						<span>Mobile No.</span>
                            <br><input class="input100" type="number" value="<?=$value->mob_no?>"  name="mob_no" placeholder="Enter Your Mobile Number">
						<span class="focus-input100"></span>
					</div>
                                    
                     <div class="wrap-input100 validate-input m-b-18" data-validate = "Whatsapp no. is required"><br>
						<span>Whatsapp Mobile No</span>
                           <br><input class="input100" type="number" name="whatsapp_no" value="<?=$value->whatsapp_no?>"  placeholder="Enter Your Whatsapp Mobile No">
						<span class="focus-input100"></span>
					</div>
                       
                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "This Field is required"><br>
						<span>10th %</span>
                            <br><input class="input100" pattern="^\d*(\.\d{0,2})?$" value="<?=$value->X_per?>"  name="X_per" placeholder="Enter Your 10th %">
						<span class="focus-input100"></span>
					</div>
                                    
                     <div class="wrap-input100 validate-input m-b-18" data-validate = "This Field is required"><br>
						<span>12th %</span>
                           <br><input class="input100" pattern="^\d*(\.\d{0,2})?$" name="XII_per" value="<?=$value->XII_per?>"  placeholder="Enter Your 12th %">
						<span class="focus-input100"></span>
					</div>
                       
                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "This Field is required"><br>
						<span>1st Semester %</span>
                            <br><input class="input100" pattern="^\d*(\.\d{0,2})?$" name="I_sem_per" value="<?=$value->I_sem_per?>" placeholder="Enter Your Ist Semester %">
						<span class="focus-input100"></span>
					</div>
                                    
                     <div class="wrap-input100 validate-input m-b-18" data-validate = "This Field is required"><br>
						<span>2nd Semester %</span>
                           <br><input class="input100" pattern="^\d*(\.\d{0,2})?$" name="II_sem_per" value="<?=$value->II_sem_per?>" placeholder="Enter Your IInd Semester %">
						<span class="focus-input100"></span>
					</div>
                       
                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "This Field is required"><br>
						<span>3rd Semester %</span>
                            <br><input class="input100" pattern="^\d*(\.\d{0,2})?$" name="III_sem_per" value="<?=$value->III_sem_per?>" placeholder="Enter Your IIIrd Semester %">
						<span class="focus-input100"></span>
					</div>
                                    
                     <div class="wrap-input100 validate-input m-b-18" data-validate = "This Field is required"><br>
						<span>4th Semester %</span>
                           <br><input class="input100" pattern="^\d*(\.\d{0,2})?$" name="IV_sem_per" value="<?=$value->IV_sem_per?>" placeholder="Enter Your IVth Semester %">
						<span class="focus-input100"></span>
					</div>
                       
                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "5th Semester % is required"><br>
						<span>5th Semester %</span>
                            <br><input class="input100" pattern="^\d*(\.\d{0,2})?$" name="V_sem_per" value="<?=$value->V_sem_per?>" placeholder="Enter Your Vth Semester %">
						<span class="focus-input100"></span>
					</div>
                                    
                     <div class="wrap-input100 validate-input m-b-18" data-validate = "This Field is required"><br>
						<span>6th Semester %</span>
                           <br><input class="input100" pattern="^\d*(\.\d{0,2})?$" name="VI_sem_per" value="<?=$value->VI_sem_per?>" placeholder="Enter Your VIth Semester %">
						<span class="focus-input100"></span>
					</div>
                       
                    
					<div class="wrap-input100  m-b-18"><br>
						<span>7th Semester %</span>
                            <br><input class="input100" pattern="^\d*(\.\d{0,2})?$" name="VII_sem_per" value="<?=$value->VII_sem_per?>" placeholder="Enter Your VIIth Semester %">
						<span class="focus-input100"></span>
					</div>
                                    
                     <div class="wrap-input100  m-b-18"><br>
						<span>8th Semester %</span>
                           <br><input class="input100" pattern="^\d*(\.\d{0,2})?$" name="VIII_sem_per" value="<?=$value->VIII_sem_per?>" placeholder="Enter Your VIIIth Semester %">
						<span class="focus-input100"></span>
					</div>
                       
                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "This Field is required"><br>
						<span>Overall %</span>
                            <br><input class="input100" pattern="^\d*(\.\d{0,2})?$" name="overall_per" value="<?=$value->overall_per?>" placeholder="Enter Overall %">
						<span class="focus-input100"></span>
					</div>
                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "This Field is required"><br>
						<span>No. Of Live Backlogs</span>
                            <br><input class="input100" type="text" name="backlogs" value="<?=$value->live_backlogs?>" placeholder="Enter Number Of Live Backlogs">
						<span class="focus-input100"></span>
					</div>
                                    
                     <div class="wrap-input100 validate-input m-b-18" data-validate = "This Field is required"><br>
						<span>Diploma %</span>
                           <br><input class="input100" type="text" name="diploma" value="<?=$value->diploma_per?>" placeholder="Enter Your Diploma %">
						<span class="focus-input100"></span>
					</div>
                                    
                     <div class="wrap-input100 validate-input m-b-18" data-validate = "This Field is required"><br>
						<span>Detains</span>
                           <br><input class="input100" type="text" name="detains" value="<?=$value->detains?>" placeholder="Enter Your Detains Detail">
						<span class="focus-input100"></span>
					</div>
                       
                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Enroll No. is required"><br>
						<span>Enrollment No.</span>
                            <br><input class="input100" type="text"  name="enroll_no" value="<?=$value->enroll_no?>" placeholder="Enter Your Enrollment Number">
						<span class="focus-input100"></span>
					</div>
                                    
                     <div class="wrap-input100 validate-input m-b-18" data-validate = "Roll no. is required"><br>
						<span>Roll No.</span>
                           <br><input class="input100"  type="number" name="roll_no" value="<?=$value->roll_no?>" placeholder="Enter Your Roll No.">
						<span class="focus-input100"></span>
					</div>
                     
					<div class="container-login100-form-btn">
						<input type="submit" value="Submit" name="submit" class="login100-form-btn">
							
					</div>
				</form>
                <?php endforeach;} ?>
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