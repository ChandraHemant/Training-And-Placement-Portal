<!DOCTYPE html>

<html lang="en">
	
<head>
	<meta charset="utf-8" />
	
	<title>Training & Placement | Admin</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
	<!--<link href="<?=base_url()?>assetsAdmin/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />-->
	<link href="<?=base_url()?>assetsAdmin/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/style.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
	<link href="<?=base_url()?>assetsAdmin/css/default/invoice-print.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<?php include'./application/views/admin/include/header.php';?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb hidden-print pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">Resume View</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header hidden-print">Resume <small class="text-white">Student Resume Format...</small></h1>
			<!-- end page-header -->
			
			<!-- begin invoice -->
        <div class="invoice" style="background-color:white">
            <div class="row">
                    <div class="col-md-12">
                    <!-- begin invoice-company -->
                        <span class="pull-right hidden-print">
                        <a href="javascript:;" onclick="window.export()" class="btn btn-sm btn-warning m-b-10 p-l-5"><i class="fa fa-file-pdf t-plus-1 text-primary fa-fw fa-lg"></i> Export as PDF</a>
                        <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-primary m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
                        </span>
                    </div>
                <div class="col-md-12">
                <!-- end invoice-company -->
                <?php 
                        if($dbf){
                                foreach($dbf as $std){
                                    $did=$std->d_id;
                                    $name=$std->d_name;
                                    $gender=$std->gender;
                                    $mob=$std->mob_no;
                                    $email=$std->email_id;
                                    $x_per=$std->X_per;
                                    $xii_per=$std->XII_per;
                                    $i_per=$std->I_sem_per;
                                    $ii_per=$std->II_sem_per;
                                    $iii_per=$std->III_sem_per;
                                    $iv_per=$std->IV_sem_per;
                                    $v_per=$std->V_sem_per;
                                    $vi_per=$std->VI_sem_per;
                                    $vii_per=$std->VII_sem_per;
                                    $viii_per=$std->VIII_sem_per;
                                }
                            }
                        if($resume || $dbf){
                            foreach($resume as $value):
                            $career=explode("|",$value->career_obj);
                            $course=explode("|",$value->course);
                            $university=explode("|",$value->university_board);
                            $school=explode("|",$value->school_college);
                            $pass=explode("|",$value->pass_out_yr);
                            $percent=explode("|",$value->percentage_cgpa);
                            $skill=explode("|",$value->skill_dvlpmnt_prgm);
                            $vocational=explode("|",$value->voc_train_prgm);
                            $project=explode("|",$value->ug_lvl_project);
                            $computer=explode("|",$value->computer_proficiency);
                            $interest=explode("|",$value->area_of_interest);
                            $awards=explode("|",$value->awards_honours);
                            $training=explode("|",$value->training_certifications);
                            $hobby=explode("|",$value->hobbies);
                            $reference=explode("|",$value->references);
                            
                            ?>
                    <br>
                        <div class="row">
                                <div class="col-md-8 text-center">
                                    <h2 class="text-black"><strong>CURRICULUM VITAE</strong></h2>
                                </div>
                                <div class="col-md-4 text-right" style="float:right;">
                                    <img class="img-responsive" style="max-width:100px;max-height:70px;" src="<?=base_url($value->pic)?>" alt="Image">
                                </div>
                        </div><br><hr class="text-black">
                        <div class="row">
                                <div class="col-md-4" style="float:left;margin-top:-19px;max-width:20%">
                                    <h6 class="text-left text-black">Name </h6>
                                    <h6 class="text-left text-black">Email </h6>
                                    <h6 class="text-left text-black">Mobile </h6>
                                    <h6 class="text-left text-black">Present Address </h6><br>
                                    <h6 class="text-left text-black">Permanent Address </h6>

                                </div>

                                <div class="col-md-8 text-left" style="margin-top:-19px;max-width:80%">
                                        <h6 class="text-black">:  <?=$name?></h6>
                                        <h6 class="text-black">:  <?=$email?></h6>
                                        <h6 class="text-black">:  <?=$mob?></h6>
                                        <h6 class="text-black">:  <?=$value->present_addr?></h6>
                                        <h6 class="text-black" style="margin-top:20px;">:  <?=$value->permanent_addr?></h6>
                                </div>
                                
                            </div>
                        <hr>
                        <?php if($career['0']!=""){?>
                            <img class="img-responsive" style="min-width:100%;max-height:25px;" src="<?=base_url()?>assetsAdmin/bg1.PNG" alt="Image">
                            <h6 class="text-left text-black" style="margin-top:-19px; margin-left:10px;"> Career Objective:</h6>
                        <?php } ?>

                <?php 
                        $j=sizeof($career);
                        $i=0;
                    for($i;$i<$j;$i++)
                    { 
                        if($career[$i]!=""){
                ?>
                        
                        <li  class="text-black"><?=$career[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        
                        <hr>
                        <img class="img-responsive" style="min-width:100%;max-height:25px;" src="<?=base_url()?>assetsAdmin/bg1.PNG" alt="Image">
                        <h6  class="text-black" style="margin-top:-19px; margin-left:10px;"> Academic Background:</h6>
                        
                            <div class="col-md-12">
                                <table  class="table table-bordered m-b-0 text-black" style="1px solid black">
                                    <thead>
                                        <tr>
                                            <th class="text-black">
                                                Course
                                            </th>
                                            <th class="text-black">
                                                University/Board
                                            </th>
                                            <th class="text-black">
                                                School/College
                                            </th>
                                            <th class="text-black">
                                                Year Of Passing
                                            </th>
                                            <th class="text-black">
                                                Percentage/CGPA
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                               <?=$course['0']?>
                                            </td>
                                            <td>
                                                <?=$university['0']?>
                                            </td>
                                            <td>
                                                <?=$school['0']?>
                                            </td>
                                            <td>
                                                <?=$pass['0']?>
                                            </td>
                                            <td>
                                                1st Sem: <?=$i_per?> <br>
                                                2nd Sem: <?=$ii_per?> <br>
                                                3rd Sem: <?=$iii_per?> <br>
                                                4th Sem: <?=$iv_per?> <br>
                                                5th Sem: <?=$v_per?> <br>
                                                6th Sem: <?=$vi_per?> <br>
                                                7th Sem: <?=$vii_per?> <br>
                                                8th Sem: <?=$viii_per?> <br>
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <?=$course['1']?>
                                            </td>
                                            <td>
                                                <?=$university['1']?>
                                            </td>
                                            <td>
                                                <?=$school['1']?>
                                            </td>
                                            <td>
                                                <?=$pass['1']?>
                                            </td>
                                            <td>
                                                <?=$xii_per?>%
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                               <?=$course['2']?>
                                            </td>
                                            <td>
                                               <?=$university['2']?>
                                            </td>
                                            <td>
                                                
                                               <?=$school['2']?>
                                            </td>
                                            <td>
                                                
                                               <?=$pass['2']?>
                                            </td>
                                            <td>
                                                <?=$x_per?>%
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        <hr>
                        <?php if($skill['0']!=""){?>
                          <img class="img-responsive" style="min-width:100%;max-height:25px;" src="<?=base_url()?>assetsAdmin/bg1.PNG" alt="Image">
                            <h6  class="text-black" style="margin-top:-19px; margin-left:10px;"> Skill Development Program:</h6>
                        <?php }
                            
                        $j=sizeof($skill);
                        $i=0;
                            for($i;$i<$j;$i++)
                            {
                                if($skill[$i]!=""){
                        ?>

                                <li class="text-black"><?=$skill[$i]?></li>

                         <?php }
                            } $i=0;
                         ?>
                        <hr>

                        <?php if($vocational['0']!=""){?>
                           <img class="img-responsive" style="min-width:100%;max-height:25px;" src="<?=base_url()?>assetsAdmin/bg1.PNG" alt="Image">
                            <h6  class="text-black" style="margin-top:-19px; margin-left:10px;"> Internship/Vocational Training Program:</h6>
                        <?php }

                                $j=sizeof($vocational);
                                $i=0;
                            for($i;$i<$j;$i++)
                            {
                                 if($vocational[$i]!=""){
                        ?>

                                <li class="text-black"><?=$vocational[$i]?></li>

                         <?php }
                            } $i=0;
                         ?>
                        <hr>
                <?php if($project['0']!=""){?>
                    <img class="img-responsive" style="min-width:100%;max-height:25px;" src="<?=base_url()?>assetsAdmin/bg1.PNG" alt="Image">
                    <h6  class="text-black" style="margin-top:-19px; margin-left:10px;">UG Level Project Work:</h6>

                <?php }
                        $j=sizeof($project);
                        $i=0;
                    for($i;$i<$j;$i++)
                    {
                         if($project[$i]!=""){
                ?>
                        
                        <li class="text-black"><?=$project[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        <hr>
                        
                <?php if($computer['0']!=""){?>
                     <img class="img-responsive" style="min-width:100%;max-height:25px;" src="<?=base_url()?>assetsAdmin/bg1.PNG" alt="Image">
                        <h6  class="text-black" style="margin-top:-19px; margin-left:10px;">Computer Proficiency:</h6>

                <?php }
                        $j=sizeof($computer);
                        $i=0;
                    for($i;$i<$j;$i++)
                    {
                         if($computer[$i]!=""){
                ?>
                        
                        <li class="text-black"><?=$computer[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        <hr>
                <?php if($interest['0']!=""){?>
                        <img class="img-responsive" style="min-width:100%;max-height:25px;" src="<?=base_url()?>assetsAdmin/bg1.PNG" alt="Image">
                        <h6  class="text-black" style="margin-top:-19px; margin-left:10px;">Areas of Interest:</h6>

                <?php }
                        $j=sizeof($interest);
                        $i=0;
                    for($i;$i<$j;$i++)
                    {
                         if($interest[$i]!=""){
                ?>
                        
                        <li class="text-black"><?=$interest[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        <hr>
                <?php if($awards['0']!=""){?>
                     <img class="img-responsive" style="min-width:100%;max-height:25px;" src="<?=base_url()?>assetsAdmin/bg1.PNG" alt="Image">
                        <h6  class="text-black" style="margin-top:-19px; margin-left:10px;">Awards & Honors:</h6>

                <?php }
                        $j=sizeof($awards);
                        $i=0;
                    for($i;$i<$j;$i++)
                    {
                         if($awards[$i]!=""){
                ?>
                        
                        <li class="text-black"><?=$awards[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        <hr>
                <?php if($training['0']!=""){?>
                    <img class="img-responsive" style="min-width:100%;max-height:25px;" src="<?=base_url()?>assetsAdmin/bg1.PNG" alt="Image">
                        <h6  class="text-black" style="margin-top:-19px; margin-left:10px;">Training and Certifications:</h6>

                <?php }
                        $j=sizeof($training);
                        $i=0;
                    for($i;$i<$j;$i++)
                    {
                         if($training[$i]!=""){
                ?>
                        
                        <li class="text-black"><?=$training[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        <hr>
                     <img class="img-responsive" style="min-width:100%;max-height:25px;" src="<?=base_url()?>assetsAdmin/bg1.PNG" alt="Image">
                        <h6  class="text-black" style="margin-top:-19px; margin-left:10px;">Languages known:</h6>

                        <li class="text-black"> <?=$value->language_known?></li>
                        
                        <hr>
                <?php if($hobby['0']!=""){?>
                    <img class="img-responsive" style="min-width:100%;max-height:25px;" src="<?=base_url()?>assetsAdmin/bg1.PNG" alt="Image">
                        <h6  class="text-black" style="margin-top:-19px; margin-left:10px;">Hobbies and Interests:</h6>

                <?php }
                        $j=sizeof($hobby);
                        $i=0;
                    for($i;$i<$j;$i++)
                    {
                         if($hobby[$i]!=""){
                ?>
                        
                        <li class="text-black"><?=$hobby[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        <hr>
                    <img class="img-responsive" style="min-width:100%;max-height:25px;" src="<?=base_url()?>assetsAdmin/bg1.PNG" alt="Image">
                        <h6  class="text-black" style="margin-top:-19px; margin-left:10px;">Personal Details:</h6>
                        <div class="row">
                                <div class="col-sm-3" style="float:left; margin-left:20px;">
                                    <p class="text-black">DOB :</p>
                                    <p class="text-black">Gender:</p>
                                    <p class="text-black">Marital:</p>
                                    <p class="text-black">Nationality:</p>

                                </div>

                                <div class="col-sm-6">
                                    <p class="text-left text-black"> <?=$value->dob?></p>
                                    <p class="text-left text-black"> <?=$gender?></p>
                                    <p class="text-left text-black"> <?=$value->marital?></p>
                                    <p class="text-left text-black"> <?=$value->nationality?></p>
                                   
                                </div>
                                
                            </div>
                        <hr>
                <?php if($reference['0']!=""){?>
                      <img class="img-responsive" style="min-width:100%;max-height:25px;" src="<?=base_url()?>assetsAdmin/bg1.PNG" alt="Image">
                        <h6  class="text-black" style="margin-top:-19px; margin-left:10px;">References:</h6>

        
                <?php }
                        $j=sizeof($reference);
                        $i=0;
                        $k=0;
                    for($i;$i<$j;$i++)
                    {
                         if($reference['0']!=""){?>
                    
                        <li class="text-black">
                            <?php
                           $ref=explode(',',$reference[$i]);
                             for($k;$k<sizeof($ref);$k++){
                ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$ref[$k]?><br> 
                        
                 <?php } ?></li><br><?php }
                    } $i=0;
                 ?>
                        
                        <br>
                        
                    <h class="text-black">I hereby declare that the above information given is true to the best of my knowledge.</h>
                        <br><br>
                        <div class="row">
                                <div class="col-sm-4" style="float:left; margin-left:20px;">
                                    <p class="text-black">Date : <?=date('d-m-Y')?></p>
                                    <p class="text-black">Place:</p>

                                </div>

                                <div class="col-sm-6 text-right">
                                    <h6  class="text-black"></h6><br>
                                    <h6  class="text-black">(<?=$name?>)</h6>
                                   
                                </div>
                                
                            </div>
                        <?php endforeach;}?>
                <div class="row" style="height:600px"></div>
            </div>
			<!-- end invoice -->
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
	<?php include'./application/views/admin/include/footer.php';?>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?=base_url()?>assetsAdmin/crossbrowserjs/html5shiv.js"></script>
		<script src="<?=base_url()?>assetsAdmin/crossbrowserjs/respond.min.js"></script>
		<script src="<?=base_url()?>assetsAdmin/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?=base_url()?>assetsAdmin/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/theme/transparent.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>

	
</html>

