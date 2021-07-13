<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resume Form | Wizards</title>

    <link href="<?=base_url()?>Adminassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/style.css" rel="stylesheet">
	<!-- ================== BEGIN EXTRA JS ================== -->
	<script type="application/javascript" src="<?= base_url()?>Adminassets/js/sweet.js"></script>
	<!-- ================== END EXTRA JS ================== -->

    <style>

        .wizard > .content > .body  position: relative; }

    </style>

</head>

<body style="background-color:white;">

    <div id="wrapper">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                           
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <?php if($log=='yes'){?>
                            <h2>
                               Resume Login Form
                            </h2>
                            <form id="form" action="<?=base_url('ResumeLoginSubmit')?>" method="post">
                                <h1>Log Details</h1>
                                <fieldset>
                                    
                                    <div class="row"> 
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Date Of Birth *</label>
                                                <input id="Name" name="dob" type="date"  class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>E-mail Id *</label>
                                                <input type="email" name="email" type="text" placeholder="Please Enter Your Email Address" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Mobile No. *</label>
                                                <input id="number" name="mobile" type="number" placeholder="Please Enter Your Mobile No."  class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                            <?php } else if($log=='update'){?>
                            <h2>
                               Resume Form
                            </h2>
                      
                            <form id="form" action="<?=base_url('ResumeDetailSubmit/Sid')?>" method="post" enctype="multipart/form-data" class="wizard-big">
                                <h1>Details</h1>
                                <fieldset>
                                    <h2>Professional Details</h2>
                                    <div class="row"> 
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Name *</label>
                                                <input id="Name" name="name" type="text"  class="form-control required">
                                                <input name="sid" type="hidden"  class="form-control" value="<?=$this->session->userdata('sid')?>">
                                            </div>
                                            <div class="form-group">
                                                <label>E-mail Id *</label>
                                                <input type="email" name="email" type="text"  class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Present Address*</label>
                                                <textarea id="Present" name="present" type="text"  class="form-control required"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Parmanent Address*</label>
                                                <textarea id="Parmanent" name="parmanent" type="text"  class="form-control required"></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Mobile No. *</label>
                                                <input id="number" name="mobileNo" type="number"  class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Choose Your Image *</label>
                                                <input id="Name" name="file_name" type="file" class="form-control required btn btn-primary "  style="border-radius:5px" >
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Career</h1>
                                <fieldset>
                                    <h2>Career Objective</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your First Career Objective *</label>
                                                <input id="Name" name="1stcareer" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                                <label>Enter Your Secound Career Objective *</label>
                                                <input id="Name" name="2ndcareer" type="text"  class="form-control required">
                                            </div>
                                          <div class="form-group">
                                                <label>Enter Your Third Career Objective *</label>
                                                <input id="Name" name="3rdcareer" type="text"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Your Four Career Objective *</label>
                                                <input id="Name" name="4thcareer" type="text"  class="form-control">
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                
                                
                                <h1>Acedmics</h1>
                                <fieldset>
                                    <h2>Academic Background</h2>
                                    
                                  <u>  <b> <h3>Course</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Graduation Study *</label>
                                                <input id="graduation" name="Graduation" type="text"  class="form-control required" placeholder="Enter Your Graduation Course">
                                            </div>
                                            <div class="form-group">
                                                <label>Higher Secondery Study(12th/diploma) *</label>
                                                <input id="secondry" name="Secondery" type="text"  class="form-control required" placeholder="Enter Your Higher Secondery Course">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Study(10th)*</label>
                                                <input id="Higher" name="Higher" type="text"  class="form-control required"placeholder="Enter Your Higher Study Course">
                                            </div>
                                            
                                        </div>
                                    </div>
                                   <u> <b> <h3>University/Board</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Graduation Study University Name*</label>
                                                <input id="graduation" name="University" type="text"  class="form-control required" placeholder="Enter Your Graduation Study University Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Higher Secondery Study Board Name(12th/diploma)  *</label>
                                                <input id="secondry" name="Board12" type="text"  class="form-control required" placeholder="Enter Your Higher Secondery Study Board Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Study Board Name(10th)*</label>
                                                <input id="Higher" name="Board10" type="text"  class="form-control required"placeholder="Enter Your Higher Study Board Name">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                     <u> <b> <h3>School/ College</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Graduation Study College Name*</label>
                                                <input id="graduation" name="college" type="text"  class="form-control required" placeholder="Enter Your Graduation Study College Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Higher Secondery Study School Name(12th/diploma)  *</label>
                                                <input id="secondry" name="school12" type="text"  class="form-control required" placeholder="Enter Your Higher Secondery Study School Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Study School Name(10th)*</label>
                                                <input id="Higher" name="school10" type="text"  class="form-control required"placeholder="Enter Your Higher Study School Name">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <u> <b> <h3>Year of passing</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Graduation Study Passing Out Year*</label>
                                                <input id="graduation" name="passclg" type="number"  class="form-control required" placeholder="Enter Your Graduation Study Passing Out Year">
                                            </div>
                                            <div class="form-group">
                                                <label>Higher Secondery Study Passing Out Year(12th/diploma)  *</label>
                                                <input id="secondry" name="pass12" type="number"  class="form-control required" placeholder="Enter Your Higher Secondery Study Passing Out Year">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Study School Passing Out Year(10th)*</label>
                                                <input id="Higher" name="pass10" type="number"  class="form-control required"placeholder="Enter Your Higher Study Passing Out Year">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <u> <b> <h3>Percentage/CGPA</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>1St semester Percentage *</label>
                                                <input id="graduation" name="1st" type="number"  class="form-control required" placeholder="Enter Your 1St semester Percentage ">
                                            </div>
                                            <div class="form-group">
                                                <label>2nd semester Percentage   *</label>
                                                <input id="secondry" name="2nd" type="number"  class="form-control required" placeholder="Enter Your 2nd semester Percentage ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>3rd semester Percentage *</label>
                                                <input id="Higher" name="3rd" type="number"  class="form-control required"placeholder="Enter Your 3rd semester Percentage ">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>4th semester Percentage *</label>
                                                <input id="Higher" name="4th" type="number"  class="form-control required"placeholder="Enter Your 4th semester Percentage ">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>5th semester Percentage *</label>
                                                <input id="Higher" name="5th" type="number"  class="form-control required"placeholder="Enter Your 5th semester Percentage ">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>6th semester Percentage *</label>
                                                <input id="Higher" name="6th" type="number"  class="form-control required"placeholder="Enter Your 6th semester Percentage ">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>7th semester Percentage *</label>
                                                <input id="Higher" name="7th" type="number"  class="form-control"placeholder="Enter Your 7th semester Percentage ">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>8th semester Percentage *</label>
                                                <input id="Higher" name="8th"  class="form-control" type="number"  placeholder="Enter Your 8th semester Percentage ">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                         <div class="form-group">
                                                <label>Higher Secondery Percentage/CGPA(12th/diploma)  *</label>
                                                <input id="secondry" name="percentage12" type="number"  class="form-control required" placeholder="Enter Your Higher Secondery Percentage/CGPA">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Percentage/CGPA(10th)*</label>
                                                <input id="Higher" name="percentage10" type="number"  class="form-control required"placeholder="Enter Your Higher Percentage/CGPA(10th)">
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    
                                </fieldset>
                                    
                                    <h1>Skill </h1>
                                <fieldset>
                                    <h2>Skill Development Program</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your First Skill Development Program *</label>
                                                <input id="Name" name="1stskill" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                                <label>Enter Your Secound Skill Development Program *</label>
                                                <input id="Name" name="2ndskill" type="text"  class="form-control required">
                                            </div>
                                          <div class="form-group">
                                                <label>Enter Your Third Skill Development Program *</label>
                                                <input id="Name" name="3rdskill" type="text"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Your Four Skill Development Program *</label>
                                                <input id="Name" name="4thskill" type="text"  class="form-control">
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                     <h1>Internship</h1>
                                <fieldset>
                                    <h2>Internship/Vocational Training Program</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your First Internship/Vocational Training Program*</label>
                                                <input id="Name" name="1stInternship" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                                <label>Enter Your Secound Internship/Vocational Training Program *</label>
                                                <input id="Name" name="2ndInternship" type="text"  class="form-control">
                                            </div>
                                          <div class="form-group">
                                                <label>Enter Your Third Internship/Vocational Training Program*</label>
                                                <input id="Name" name="3rdInternship" type="text"  class="form-control">
                                            </div>
                                            
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    <h1>UGProject</h1>
                                <fieldset>
                                    <h2>UG Level Project Work</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your UG Level Project Work*</label>
                                                <input id="Name" name="ug1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="ug2" type="text"  class="form-control required">
                                            </div>
                                          <div class="form-group">
                                               
                                                <input id="Name" name="ug3" type="text"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                               
                                                <input id="Name" name="ug4" type="text"  class="form-control">
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    <h1>Computer</h1>
                                <fieldset>
                                    <h2>Computer Proficiency</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Computer Proficiency*</label>
                                                <input id="Name" name="cp1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="cp2" type="text"  class="form-control">
                                            </div>
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    
                                     
                                    <h1>Interest</h1>
                                <fieldset>
                                    <h2>Areas of Interest</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Areas of Interest*</label>
                                                <input id="Name" name="Interest" type="text"  class="form-control required">
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                     
                                    <h1>Awards</h1>
                                <fieldset>
                                    <h2>Awards & Honors</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Awards & Honors*</label>
                                                <input id="Name" name="Awards1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="Awards2" type="text"  class="form-control">
                                            </div>   <div class="form-group">
                                              
                                                <input id="Name" name="Awards3" type="text"  class="form-control">
                                            </div>
                                               <div class="form-group">
                                              
                                                <input id="Name" name="Awards4" type="text"  class="form-control">
                                            </div>
                                               <div class="form-group">
                                              
                                                <input id="Name" name="Awards5" type="text"  class="form-control">
                                            </div>
                                            
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    
                                     <h1>Training</h1>
                                <fieldset>
                                    <h2>Training and Certifications</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Training and Certifications*</label>
                                                <input id="Name" name="Certifications1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="Certifications2" type="text"  class="form-control">
                                            </div>
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                     <h1>Languages </h1>
                                <fieldset>
                                    <h2>Languages known</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Languages known*</label>
                                                <input id="Name" name="language" type="text"  class="form-control required">
                                            </div>
                                           
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                     <h1>Hobbies</h1>
                                <fieldset>
                                    <h2>Hobbies and Interests</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Hobbies and Interests*</label>
                                                <input id="Name" name="Hobbies1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="Hobbies2" type="text"  class="form-control">
                                            </div>
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    
                                    <h1>Personal </h1>
                                <fieldset>
                                    <h2>Personal Details</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Date Of Birth*</label>
                                                <input id="Name" name="dob" type="date"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              <label>Gender*</label>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="radio" value="Male" name="gender" checked="">&nbsp;&nbsp;&nbsp;Male</td>
                                                        <td><input type="radio" value="Female" name="gender">&nbsp;&nbsp;&nbsp;<span style="padding-top:-50px;">Female</span></td>
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>
                                            </div>
                                            <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Marital Status*</label>
                                                <input id="Name" name="Marital" type="text"  class="form-control required" placeholder="Single/Marriage">
                                            </div>
                                            </div>
                                                <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Nationality*</label>
                                                <input id="Name" name="Nationality" type="text"  class="form-control required" placeholder="Indian">
                                            </div>
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                    </div>

                                </fieldset>
                                    
                                    
                                    <h1>References</h1>
                                <fieldset>
                                    <h2>References</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your References*</label>
                                                <input id="Name" name="ref1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="ref2" type="text"  class="form-control">
                                            </div>
                                             
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                
                                <h1>Finish</h1>
                                <fieldset>
                                    <h2>Terms and Conditions</h2>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label><br><br><br>
                                    
                                </fieldset>
                                
                            </form>
                            <?php }else if($log=='updates'){?>
                            <h2>
                               Resume Form
                            </h2>
                          
                            <form id="form" action="<?=base_url('ResumeDetailSubmit/Did')?>" method="post" enctype="multipart/form-data" class="wizard-big">
                                <h1>Details</h1>
                                <fieldset>
                                    <h2>Professional Details</h2>
                                    <div class="row"> 
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <input name="did" type="hidden"  class="form-control" value="<?=$this->session->userdata('uid')?>">
                                                <label>Present Address*</label>
                                                <textarea id="Present" name="present" type="text"  class="form-control required"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Parmanent Address*</label>
                                                <textarea id="Parmanent" name="parmanent" type="text"  class="form-control required"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Choose Your Image *</label>
                                                <input id="Name" name="file_name" type="file" class="form-control required btn btn-primary "  style="border-radius:5px" >
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Career</h1>
                                <fieldset>
                                    <h2>Career Objective</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your First Career Objective *</label>
                                                <input id="Name" name="1stcareer" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                                <label>Enter Your Secound Career Objective *</label>
                                                <input id="Name" name="2ndcareer" type="text"  class="form-control required">
                                            </div>
                                          <div class="form-group">
                                                <label>Enter Your Third Career Objective *</label>
                                                <input id="Name" name="3rdcareer" type="text"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Your Four Career Objective *</label>
                                                <input id="Name" name="4thcareer" type="text"  class="form-control">
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                
                                
                                <h1>Acedmics</h1>
                                <fieldset>
                                    <h2>Academic Background</h2>
                                    
                                  <u>  <b> <h3>Course</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Graduation Study *</label>
                                                <input id="graduation" name="Graduation" type="text"  class="form-control required" placeholder="Enter Your Graduation Course">
                                            </div>
                                            <div class="form-group">
                                                <label>Higher Secondery Study(12th/diploma) *</label>
                                                <input id="secondry" name="Secondery" type="text"  class="form-control required" placeholder="Enter Your Higher Secondery Course">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Study(10th)*</label>
                                                <input id="Higher" name="Higher" type="text"  class="form-control required"placeholder="Enter Your Higher Study Course">
                                            </div>
                                            
                                        </div>
                                    </div>
                                   <u> <b> <h3>University/Board</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Graduation Study University Name*</label>
                                                <input id="graduation" name="University" type="text"  class="form-control required" placeholder="Enter Your Graduation Study University Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Higher Secondery Study Board Name(12th/diploma)  *</label>
                                                <input id="secondry" name="Board12" type="text"  class="form-control required" placeholder="Enter Your Higher Secondery Study Board Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Study Board Name(10th)*</label>
                                                <input id="Higher" name="Board10" type="text"  class="form-control required"placeholder="Enter Your Higher Study Board Name">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                     <u> <b> <h3>School/ College</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Graduation Study College Name*</label>
                                                <input id="graduation" name="college" type="text"  class="form-control required" placeholder="Enter Your Graduation Study College Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Higher Secondery Study School Name(12th/diploma)  *</label>
                                                <input id="secondry" name="school12" type="text"  class="form-control required" placeholder="Enter Your Higher Secondery Study School Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Study School Name(10th)*</label>
                                                <input id="Higher" name="school10" type="text"  class="form-control required"placeholder="Enter Your Higher Study School Name">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <u> <b> <h3>Year of passing</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Graduation Study Passing Out Year*</label>
                                                <input id="graduation" name="passclg" type="number"  class="form-control required" placeholder="Enter Your Graduation Study Passing Out Year">
                                            </div>
                                            <div class="form-group">
                                                <label>Higher Secondery Study Passing Out Year(12th/diploma)  *</label>
                                                <input id="secondry" name="pass12" type="number"  class="form-control required" placeholder="Enter Your Higher Secondery Study Passing Out Year">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Study School Passing Out Year(10th)*</label>
                                                <input id="Higher" name="pass10" type="number"  class="form-control required"placeholder="Enter Your Higher Study Passing Out Year">
                                            </div>
                                            
                                        </div>
                                    </div>
                                   
                                </fieldset>
                                    
                                    <h1>Skill </h1>
                                <fieldset>
                                    <h2>Skill Development Program</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your First Skill Development Program *</label>
                                                <input id="Name" name="1stskill" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                                <label>Enter Your Secound Skill Development Program *</label>
                                                <input id="Name" name="2ndskill" type="text"  class="form-control required">
                                            </div>
                                          <div class="form-group">
                                                <label>Enter Your Third Skill Development Program *</label>
                                                <input id="Name" name="3rdskill" type="text"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Your Four Skill Development Program *</label>
                                                <input id="Name" name="4thskill" type="text"  class="form-control">
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                     <h1>Internship</h1>
                                <fieldset>
                                    <h2>Internship/Vocational Training Program</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your First Internship/Vocational Training Program*</label>
                                                <input id="Name" name="1stInternship" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                                <label>Enter Your Secound Internship/Vocational Training Program *</label>
                                                <input id="Name" name="2ndInternship" type="text"  class="form-control">
                                            </div>
                                          <div class="form-group">
                                                <label>Enter Your Third Internship/Vocational Training Program*</label>
                                                <input id="Name" name="3rdInternship" type="text"  class="form-control">
                                            </div>
                                            
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    <h1>UGProject</h1>
                                <fieldset>
                                    <h2>UG Level Project Work</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your UG Level Project Work*</label>
                                                <input id="Name" name="ug1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="ug2" type="text"  class="form-control required">
                                            </div>
                                          <div class="form-group">
                                               
                                                <input id="Name" name="ug3" type="text"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                               
                                                <input id="Name" name="ug4" type="text"  class="form-control">
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    <h1>Computer</h1>
                                <fieldset>
                                    <h2>Computer Proficiency</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Computer Proficiency*</label>
                                                <input id="Name" name="cp1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="cp2" type="text"  class="form-control">
                                            </div>
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    
                                     
                                    <h1>Interest</h1>
                                <fieldset>
                                    <h2>Areas of Interest</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Areas of Interest*</label>
                                                <input id="Name" name="Interest" type="text"  class="form-control required">
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                     
                                    <h1>Awards</h1>
                                <fieldset>
                                    <h2>Awards & Honors</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Awards & Honors*</label>
                                                <input id="Name" name="Awards1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="Awards2" type="text"  class="form-control">
                                            </div>   <div class="form-group">
                                              
                                                <input id="Name" name="Awards3" type="text"  class="form-control">
                                            </div>
                                               <div class="form-group">
                                              
                                                <input id="Name" name="Awards4" type="text"  class="form-control">
                                            </div>
                                               <div class="form-group">
                                              
                                                <input id="Name" name="Awards5" type="text"  class="form-control">
                                            </div>
                                            
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    
                                     <h1>Training</h1>
                                <fieldset>
                                    <h2>Training and Certifications</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Training and Certifications*</label>
                                                <input id="Name" name="Certifications1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="Certifications2" type="text"  class="form-control">
                                            </div>
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                     <h1>Languages </h1>
                                <fieldset>
                                    <h2>Languages known</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Languages known*</label>
                                                <input id="Name" name="language" type="text"  class="form-control required">
                                            </div>
                                           
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                     <h1>Hobbies</h1>
                                <fieldset>
                                    <h2>Hobbies and Interests</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Hobbies and Interests*</label>
                                                <input id="Name" name="Hobbies1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="Hobbies2" type="text"  class="form-control">
                                            </div>
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    
                                    <h1>Personal </h1>
                                <fieldset>
                                    <h2>Personal Details</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Date Of Birth*</label>
                                                <input id="Name" name="dob" type="date"  class="form-control required">
                                            </div>
                                            <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Marital Status*</label>
                                                <input id="Name" name="Marital" type="text"  class="form-control required" placeholder="Single/Marriage">
                                            </div>
                                            </div>
                                                <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Nationality*</label>
                                                <input id="Name" name="Nationality" type="text"  class="form-control required" placeholder="Indian">
                                            </div>
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                    </div>

                                </fieldset>
                                    
                                    
                                    <h1>References</h1>
                                <fieldset>
                                    <h2>References</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your References*</label>
                                                <input id="Name" name="ref1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="ref2" type="text"  class="form-control">
                                            </div>
                                             
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                
                                <h1>Finish</h1>
                                <fieldset>
                                    <h2>Terms and Conditions</h2>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label><br><br><br>
                                    
                                </fieldset>
                                
                            </form>
                            <?php }else{?>
                            <h2>
                               Resume Form
                            </h2>
                            
                            <p>
                               Already Have Generated Resume ? <a class="form-control btn btn-warning" href="<?=base_url('ResumeForm/Login')?>">Click Here</a>
                            </p>
                            
                            <form id="form" action="<?=base_url('ResumeDetailSubmit')?>" method="post" enctype="multipart/form-data" class="wizard-big">
                                <h1>Details</h1>
                                <fieldset>
                                    <h2>Professional Details</h2>
                                    <div class="row"> 
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Name *</label>
                                                <input id="Name" name="name" type="text"  class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>E-mail Id *</label>
                                                <input type="email" name="email" type="text"  class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Present Address*</label>
                                                <textarea id="Present" name="present" type="text"  class="form-control required"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Parmanent Address*</label>
                                                <textarea id="Parmanent" name="parmanent" type="text"  class="form-control required"></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Mobile No. *</label>
                                                <input id="number" name="mobileNo" type="number"  class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Choose Your Image *</label>
                                                <input id="Name" name="file_name" type="file" class="form-control required btn btn-primary "  style="border-radius:5px" >
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Career</h1>
                                <fieldset>
                                    <h2>Career Objective</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your First Career Objective *</label>
                                                <input id="Name" name="1stcareer" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                                <label>Enter Your Secound Career Objective *</label>
                                                <input id="Name" name="2ndcareer" type="text"  class="form-control required">
                                            </div>
                                          <div class="form-group">
                                                <label>Enter Your Third Career Objective *</label>
                                                <input id="Name" name="3rdcareer" type="text"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Your Four Career Objective *</label>
                                                <input id="Name" name="4thcareer" type="text"  class="form-control">
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                
                                
                                <h1>Acedmics</h1>
                                <fieldset>
                                    <h2>Academic Background</h2>
                                    
                                  <u>  <b> <h3>Course</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Graduation Study *</label>
                                                <input id="graduation" name="Graduation" type="text"  class="form-control required" placeholder="Enter Your Graduation Course">
                                            </div>
                                            <div class="form-group">
                                                <label>Higher Secondery Study(12th/diploma) *</label>
                                                <input id="secondry" name="Secondery" type="text"  class="form-control required" placeholder="Enter Your Higher Secondery Course">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Study(10th)*</label>
                                                <input id="Higher" name="Higher" type="text"  class="form-control required"placeholder="Enter Your Higher Study Course">
                                            </div>
                                            
                                        </div>
                                    </div>
                                   <u> <b> <h3>University/Board</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Graduation Study University Name*</label>
                                                <input id="graduation" name="University" type="text"  class="form-control required" placeholder="Enter Your Graduation Study University Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Higher Secondery Study Board Name(12th/diploma)  *</label>
                                                <input id="secondry" name="Board12" type="text"  class="form-control required" placeholder="Enter Your Higher Secondery Study Board Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Study Board Name(10th)*</label>
                                                <input id="Higher" name="Board10" type="text"  class="form-control required"placeholder="Enter Your Higher Study Board Name">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                     <u> <b> <h3>School/ College</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Graduation Study College Name*</label>
                                                <input id="graduation" name="college" type="text"  class="form-control required" placeholder="Enter Your Graduation Study College Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Higher Secondery Study School Name(12th/diploma)  *</label>
                                                <input id="secondry" name="school12" type="text"  class="form-control required" placeholder="Enter Your Higher Secondery Study School Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Study School Name(10th)*</label>
                                                <input id="Higher" name="school10" type="text"  class="form-control required"placeholder="Enter Your Higher Study School Name">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <u> <b> <h3>Year of passing</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Graduation Study Passing Out Year*</label>
                                                <input id="graduation" name="passclg" type="number"  class="form-control required" placeholder="Enter Your Graduation Study Passing Out Year">
                                            </div>
                                            <div class="form-group">
                                                <label>Higher Secondery Study Passing Out Year(12th/diploma)  *</label>
                                                <input id="secondry" name="pass12" type="number"  class="form-control required" placeholder="Enter Your Higher Secondery Study Passing Out Year">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Study School Passing Out Year(10th)*</label>
                                                <input id="Higher" name="pass10" type="number"  class="form-control required"placeholder="Enter Your Higher Study Passing Out Year">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <u> <b> <h3>Percentage/CGPA</h3></b></u>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>1St semester Percentage *</label>
                                                <input id="graduation" name="1st" type="number"  class="form-control required" placeholder="Enter Your 1St semester Percentage ">
                                            </div>
                                            <div class="form-group">
                                                <label>2nd semester Percentage   *</label>
                                                <input id="secondry" name="2nd" type="number"  class="form-control required" placeholder="Enter Your 2nd semester Percentage ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>3rd semester Percentage *</label>
                                                <input id="Higher" name="3rd" type="number"  class="form-control required"placeholder="Enter Your 3rd semester Percentage ">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>4th semester Percentage *</label>
                                                <input id="Higher" name="4th" type="number"  class="form-control required"placeholder="Enter Your 4th semester Percentage ">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>5th semester Percentage *</label>
                                                <input id="Higher" name="5th" type="number"  class="form-control required"placeholder="Enter Your 5th semester Percentage ">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>6th semester Percentage *</label>
                                                <input id="Higher" name="6th" type="number"  class="form-control required"placeholder="Enter Your 6th semester Percentage ">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>7th semester Percentage *</label>
                                                <input id="Higher" name="7th" type="number"  class="form-control"placeholder="Enter Your 7th semester Percentage ">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>8th semester Percentage *</label>
                                                <input id="Higher" name="8th"  class="form-control" type="number"  placeholder="Enter Your 8th semester Percentage ">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                         <div class="form-group">
                                                <label>Higher Secondery Percentage/CGPA(12th/diploma)  *</label>
                                                <input id="secondry" name="percentage12" type="number"  class="form-control required" placeholder="Enter Your Higher Secondery Percentage/CGPA">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Higher Percentage/CGPA(10th)*</label>
                                                <input id="Higher" name="percentage10" type="number"  class="form-control required"placeholder="Enter Your Higher Percentage/CGPA(10th)">
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    
                                </fieldset>
                                    
                                    <h1>Skill </h1>
                                <fieldset>
                                    <h2>Skill Development Program</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your First Skill Development Program *</label>
                                                <input id="Name" name="1stskill" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                                <label>Enter Your Secound Skill Development Program *</label>
                                                <input id="Name" name="2ndskill" type="text"  class="form-control required">
                                            </div>
                                          <div class="form-group">
                                                <label>Enter Your Third Skill Development Program *</label>
                                                <input id="Name" name="3rdskill" type="text"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Your Four Skill Development Program *</label>
                                                <input id="Name" name="4thskill" type="text"  class="form-control">
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                     <h1>Internship</h1>
                                <fieldset>
                                    <h2>Internship/Vocational Training Program</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your First Internship/Vocational Training Program*</label>
                                                <input id="Name" name="1stInternship" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                                <label>Enter Your Secound Internship/Vocational Training Program *</label>
                                                <input id="Name" name="2ndInternship" type="text"  class="form-control">
                                            </div>
                                          <div class="form-group">
                                                <label>Enter Your Third Internship/Vocational Training Program*</label>
                                                <input id="Name" name="3rdInternship" type="text"  class="form-control">
                                            </div>
                                            
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    <h1>UGProject</h1>
                                <fieldset>
                                    <h2>UG Level Project Work</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your UG Level Project Work*</label>
                                                <input id="Name" name="ug1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="ug2" type="text"  class="form-control required">
                                            </div>
                                          <div class="form-group">
                                               
                                                <input id="Name" name="ug3" type="text"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                               
                                                <input id="Name" name="ug4" type="text"  class="form-control">
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    <h1>Computer</h1>
                                <fieldset>
                                    <h2>Computer Proficiency</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Computer Proficiency*</label>
                                                <input id="Name" name="cp1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="cp2" type="text"  class="form-control">
                                            </div>
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    
                                     
                                    <h1>Interest</h1>
                                <fieldset>
                                    <h2>Areas of Interest</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Areas of Interest*</label>
                                                <input id="Name" name="Interest" type="text"  class="form-control required">
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                     
                                    <h1>Awards</h1>
                                <fieldset>
                                    <h2>Awards & Honors</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Awards & Honors*</label>
                                                <input id="Name" name="Awards1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="Awards2" type="text"  class="form-control">
                                            </div>   <div class="form-group">
                                              
                                                <input id="Name" name="Awards3" type="text"  class="form-control">
                                            </div>
                                               <div class="form-group">
                                              
                                                <input id="Name" name="Awards4" type="text"  class="form-control">
                                            </div>
                                               <div class="form-group">
                                              
                                                <input id="Name" name="Awards5" type="text"  class="form-control">
                                            </div>
                                            
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    
                                     <h1>Training</h1>
                                <fieldset>
                                    <h2>Training and Certifications</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Training and Certifications*</label>
                                                <input id="Name" name="Certifications1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="Certifications2" type="text"  class="form-control">
                                            </div>
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                     <h1>Languages </h1>
                                <fieldset>
                                    <h2>Languages known</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Languages known*</label>
                                                <input id="Name" name="language" type="text"  class="form-control required">
                                            </div>
                                           
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                     <h1>Hobbies</h1>
                                <fieldset>
                                    <h2>Hobbies and Interests</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Hobbies and Interests*</label>
                                                <input id="Name" name="Hobbies1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              
                                                <input id="Name" name="Hobbies2" type="text"  class="form-control">
                                            </div>
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                    
                                    
                                    <h1>Personal </h1>
                                <fieldset>
                                    <h2>Personal Details</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Date Of Birth*</label>
                                                <input id="Name" name="dob" type="date"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              <label>Gender*</label>
                                                <table class="table table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="radio" value="Male" name="gender" checked="">&nbsp;&nbsp;&nbsp;Male</td>
                                                        <td><input type="radio" value="Female" name="gender">&nbsp;&nbsp;&nbsp;<span style="padding-top:-50px;">Female</span></td>
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>
                                            </div>
                                            <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Marital Status*</label>
                                                <input id="Name" name="Marital" type="text"  class="form-control required" placeholder="Single/Marriage">
                                            </div>
                                            </div>
                                                <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your Nationality*</label>
                                                <input id="Name" name="Nationality" type="text"  class="form-control required" placeholder="Indian">
                                            </div>
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                    </div>

                                </fieldset>
                                    
                                    
                                    <h1>References</h1>
                                <fieldset>
                                    <h2>References</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Enter Your References*</label>
                                                <input id="Name" name="ref1" type="text"  class="form-control required">
                                            </div>
                                           <div class="form-group">
                                              <label>Enter Your References*</label>
                                                <input id="Name" name="ref2" type="text"  class="form-control">
                                            </div>
                                             
                                          
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                
                                <h1>Finish</h1>
                                <fieldset>
                                           <div class="form-group">
                                              
                                              <label>If You Belong To RITEE Raipur College Then Enter Your Enrollment No.*</label>
                                                <input id="Name" name="enroll" type="text" placeholder="Please Enter Your Enrollment No.(BA1234)" class="form-control">
                                            </div>
                                    
                                    <h2>Terms and Conditions</h2>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label><br><br><br>
                                    
                                </fieldset>
                                
                            </form>
                            <?php }?>
                        </div>
                    </div>
                    </div>

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
    }else if ($item == "update"){ ?>
        <script>swal("Successfully Updated!!!", "Thank you...!", "success");</script>
   <?php     
    }
}

?>


    <!-- Mainly scripts -->
    <script src="<?=base_url()?>Adminassets/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>Adminassets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url()?>Adminassets/js/inspinia.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/pace/pace.min.js"></script>

    <!-- Steps -->
    <script src="<?=base_url()?>Adminassets/js/plugins/staps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="<?=base_url()?>Adminassets/js/plugins/validate/jquery.validate.min.js"></script>


    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>

</body>

</html>
