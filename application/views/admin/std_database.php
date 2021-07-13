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
	
	<?php include'./application/views/admin/include/header.php';?>
		<!-- end #sidebar -->
		
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Student Management</a></li>
				<li class="breadcrumb-item active">Student Database ...</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Student Database <small>Manage Student Database ...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-10 -->
			    <div class="col-lg-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Training And Placement Student Database Management <span class="label label-success m-l-5 t-minus-1">NEW</span></h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                        <h4 class="text-center"> Select A Branch</h4>
                            <center>
                                <button type="button" class="btn btn-success text-white" id="btnbio">BIOTECH</button>
                              <button type="button" class="btn btn-danger text-white" id="btnchem">CHEMICAL</button>
                               <button type="button" class="btn btn-warning text-white" id="btncivil">CIVIL</button>
                               <button type="button" class="btn btn-primary text-white" id="btncse" >CSE</button>
                                <button type="button" class="btn btn-default text-white" id="btnett">ET&T</button>
                               <button type="button" class="btn btn-info text-white" id="btnmech" >MECHANICAL</button>
                            </center>
          
                        <div  id="loaddata">
			
								<table id="data-table-buttons" class="table table-striped table-bordered m-b-0">
                                 <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Gender</th>
                                    <th>Roll No</th>
                                    <th>Enroll No</th>
                                    <th>Semester</th>
                                    <th>Branch</th>
                                    <th>Pass Out Year</th>
                                    <th>Email Id</th>
                                    <th>Mobile No</th>
                                    <th>whatsapp No</th>
                                    <th>Class X</th>
                                    <th>ClassXII</th>
                                    <th>Diploma</th>
                                    <th>1st Sem</th>
                                    <th>2nd Sem</th>
                                    <th>3rd Sem</th>
                                    <th>4th Sem</th>
                                    <th>5th Sem</th>
                                    <th>6th Sem</th>
                                    <th>7th Sem</th>
                                    <th>8th Sem</th>
                                    <th>Overall %</th>
                                    <th>Live Backlogs</th>
                                    <th>Detain</th>
                                     <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>        
                                   <?php
                                    if($data){
                                      foreach($data as $value):?>



                                    <tr>
                                        <td><?= $value->d_name?></td>
                                        <td><?= $value->gender?></td>
                                        <td><?= $value->roll_no?></td>
                                        <td><?= $value->enroll_no?></td>
                                        <td><?= $value->semester?></td>
                                        <td><?= $value->branch?></td>
                                        <td><?= $value->pass_out_yr?></td>
                                        <td><?= $value->email_id?></td>
                                        <td><?= $value->mob_no?></td>
                                        <td><?= $value->whatsapp_no?></td>
                                        <td><?= $value->X_per?>%</td>
                                        <td><?= $value->XII_per?>%</td>
                                        <td><?= $value->diploma_per?></td>
                                        <td><?= $value->I_sem_per?></td>
                                        <td><?= $value->II_sem_per?></td>
                                        <td><?= $value->III_sem_per?></td>
                                         <td><?= $value->IV_sem_per?></td>
                                         <td><?= $value->V_sem_per?></td>
                                         <td><?= $value->VI_sem_per?></td>
                                         <td><?= $value->VII_sem_per?></td>
                                         <td><?= $value->VIII_sem_per?></td>
                                         <td><?= $value->overall_per?></td>
                                         <td><?= $value->live_backlogs?></td>
                                         <td><?= $value->detains?></td>


                                        <td class="center">
                                            <!-- <a href="<?= base_url('StdDbEdit')?>/<?=$value->d_id?>"  class="btn btn-success"style="margin-top:10px" >
                                            <i class="fa fa-edit">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Edit</span></i></a> -->
                                        <a href="<?= base_url('StdDbDelete')?>/<?=$value->d_id?>"  class="btn btn-danger"style="margin-top:10px" >
                                            <i class="fa fa-trash-o">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Delete</span></i></a>

                                        <a href="<?= base_url('StdDbResume')?>/<?=$value->d_id?>"  class="btn btn-primary"style="margin-top:10px" >
                                            <i class="fa fa-eye">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Resume</span></i></a>
                                        </td>


                                      </tr>    
                                   <?php endforeach;} ?> 

                                </tbody>    
                            </table>
								
                        </div>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->

	<?php include'./application/views/admin/include/footer.php';?>
	
		
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
 <script>
      $(document).ready(function(){$('#btnchem').click(function(){$('#loaddata').load("<?=base_url('AdminController/chemical')?>")
                                                                 
                                                                 });
                                  
                                  });
        

       $(document).ready(function(){$('#btnett').click(function(){$('#loaddata').load("<?=base_url('AdminController/EtT')?>")
                                                                 
                                                                 });
                                  
                                  });
          
        
         $(document).ready(function(){$('#btncse').click(function(){$('#loaddata').load("<?=base_url('AdminController/cse')?>")
                                                                 
                                                                 });
                                  
                                  });
        
         $(document).ready(function(){$('#btnbio').click(function(){$('#loaddata').load("<?=base_url('AdminController/bio')?>")
                                                                 
                                                                 });
                                  
                                  });




         $(document).ready(function(){$('#btnmech').click(function(){$('#loaddata').load("<?=base_url('AdminController/mech')?>")
                                                                 
                                                                 });
                                  
                                  });
        
            $(document).ready(function(){$('#btncivil').click(function(){$('#loaddata').load("<?=base_url('AdminController/civil')?>")
                                                                 
                                                                 });
                                  
                                  });
        



        
    </script>
</body>
	
</html>

