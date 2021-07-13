<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8" />
			<title>Training And Placement | Admin</title>

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
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin<?=base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
    </head>
    <div class="panel-body">
        <center>
			<h3><?=$branch_name?></h3>
        </center><br><br>
            <table id="data-table-buttons" class="table table-striped table-bordered m-b-0">
             <thead>
                <tr>
                    <th class="text-center">Student Name</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Roll No</th>
                    <th class="text-center">Enroll No</th>
                    <th class="text-center">Semester</th>
                    <th class="text-center">Branch</th>
                    <th class="text-center">Pass Out Year</th>
                    <th class="text-center">Email Id</th>
                    <th class="text-center">Mobile No</th>
                    <th class="text-center">whatsapp No</th>
                    <th class="text-center">Class X</th>
                    <th class="text-center">ClassXII</th>
                    <th class="text-center">Diploma</th>
                    <th class="text-center">1st Sem</th>
                    <th class="text-center">2nd Sem</th>
                    <th class="text-center">3rd Sem</th>
                    <th class="text-center">4th Sem</th>
                    <th class="text-center">5th Sem</th>
                    <th class="text-center">6th Sem</th>
                    <th class="text-center">7th Sem</th>
                    <th class="text-center">8th Sem</th>
                    <th class="text-center">Overall %</th>
                    <th class="text-center">Live Backlogs</th>
                    <th class="text-center">Detain</th>
                     <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>        
                   <?php
                         if($branch){
                            foreach($branch as $value):?>



                    <tr>
                        <td class="text-center"><?= $value->d_name?></td>
                        <td class="text-center"><?= $value->gender?></td>
                        <td class="text-center"><?= $value->roll_no?></td>
                        <td class="text-center"><?= $value->enroll_no?></td>
                        <td class="text-center"><?= $value->semester?></td>
                        <td class="text-center"><?= $value->branch?></td>
                        <td class="text-center"><?= $value->pass_out_yr?></td>
                        <td class="text-center"><?= $value->email_id?></td>
                        <td class="text-center"><?= $value->mob_no?></td>
                        <td class="text-center"><?= $value->whatsapp_no?></td>
                        <td class="text-center"><?= $value->X_per?>%</td>
                        <td class="text-center"><?= $value->XII_per?>%</td>
                        <td class="text-center"><?= $value->diploma_per?></td>
                        <td class="text-center"><?= $value->I_sem_per?></td>
                        <td class="text-center"><?= $value->II_sem_per?></td>
                        <td class="text-center"><?= $value->III_sem_per?></td>
                         <td class="text-center"><?= $value->IV_sem_per?></td>
                         <td class="text-center"><?= $value->V_sem_per?></td>
                         <td class="text-center"><?= $value->VI_sem_per?></td>
                         <td class="text-center"><?= $value->VII_sem_per?></td>
                         <td class="text-center"><?= $value->VIII_sem_per?></td>
                         <td class="text-center"><?= $value->overall_per?></td>
                         <td class="text-center"><?= $value->live_backlogs?></td>
                         <td class="text-center"><?= $value->detains?></td>
                        <td class="text-center">
                            <a href="<?= base_url('StdDbDelete')?>/<?=$value->d_id?>"  class="btn btn-danger"style="margin-top:10px" >
                                <i class="fa fa-trash-o">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Delete</span></i></a>

                            <a href="<?= base_url('StdDbResume')?>/<?=$value->d_id?>"  class="btn btn-primary"style="margin-top:10px" >
                                <i class="fa fa-eye">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Resume</span></i></a>
                        </td>


                      </tr>    
                   <?php endforeach; } ?> 

                </tbody>    
        </table>
</div>
    	
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
	
		<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/table-manage-buttons.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			TableManageButtons.init();
            
		});
	</script>