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
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/ColReorder/css/colReorder.bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin<?=base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
    <link href="<?=base_url()?>Adminassets/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
    
	<?php include'./application/views/admin/include/header.php';?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Placement Management</a></li>
				<li class="breadcrumb-item active">Campus List...</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Campus List Table <small>Manage Placement Details...</small></h1>
			<!-- end page-header -->
			
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">

				<div class="col-lg-2"></div>
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
                            <h4 class="panel-title">Training And Placement Campus List Management <span class="label label-success m-l-5 t-minus-1">NEW</span></h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                                        					
				            <table id="data-table-colreorder" class="table table-striped table-bordered m-b-0">
                                <thead>
                                    <tr>
                                        <th><center><b>Company Name</b></center></th>
                                        <th><center><b>Company Website</b></center></th>
                                        <th><center><b>Job Profile</b></center></th>
                                        <th><center><b>Job Location</b></center></th>
                                        <th><center><b>Target Branch</b></center></th>
                                        <th><center><b>Target Batch</b></center></th>
                                        <th><center><b>Job Position</b></center></th>
                                        <th><center><b>Placement Process</b></center></th>
                                        <th><center><b>Recruitment Criteria</b></center></th>
                                        <th><center><b>Package</b></center></th>
                                        <th><center><b>T & C</b></center></th>
                                        <th><center><b>Join Date</b></center></th>
                                        <th><center><b>Bond</b></center></th>
                                        <th><center><b>Date & Time</b></center></th>
                                        <th><center><b>Action(s)</b></center></th>
                                    </tr>
                                </thead>
                                <tbody>

                               <?php if($data){
                                 foreach($data as $value): ?>

                                 <tr>

                                     <td><?= $value->c_name?></td>
                                     <td><?= $value->c_website?></td>
                                     <td><?= $value->job_profile?></td>
                                     <td><?= $value->job_location?></td>
                                     <td><?= $value->trgt_branch?></td>
                                     <td><?= $value->trgt_batch?></td>
                                     <td><?= $value->job_position?></td>
                                     <td><?= $value-> plcmnt_process?></td>
                                     <td><?= $value->rcrtmnt_criteria?></td>
                                     <td><?= $value->salary_package?></td>
                                     <td><?= $value->t_n_c?></td>
                                     <td><?= $value->join_date?></td>
                                     <td><?= $value->bond?></td>
                                      <td><?= $value->dttime?></td>
                                      <td>
                                     
                                        <div class="image">
                                            <?php if($value->status==1){ ?>
                                                
                                            <a href="<?= base_url('CampusAccepted')?>/<?=$value->c_id?>" title="Click Here To Accept"  class="btn btn-success disabled"style="margin-top:10px" >
                                                <i class="fa fa-check">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Accepted</span></i></a>
                                            <?php }elseif($value->status==2){ ?>
                                        <a href="<?= base_url('CampusRejected')?>/<?=$value->c_id?>" title="Click Here To Reject"  class="btn btn-danger disabled"style="margin-top:10px" >
                                            <i class="fa fa-close">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Rejected</span></i></a>
                                            <?php }else{ ?>
                                            <a href="<?= base_url('CampusAccepted')?>/<?=$value->c_id?>" title="Click Here To Accept"  class="btn btn-success"style="margin-top:10px" >
                                                <i class="fa fa-check">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Accept</span></i></a>
                                        <a href="<?= base_url('CampusRejected')?>/<?=$value->c_id?>" title="Click Here To Reject"  class="btn btn-danger"style="margin-top:10px" >
                                            <i class="fa fa-close">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Reject</span></i></a>
                                            <?php }?>
                                            <form id="checkCompanyName" name="checkCompanyName" target="_blank" onsubmit="javascript:return validateCaptcha();" action="http://www.mca.gov.in/mcafoportal/checkCompanyName.do" method="post">
                                                <input type="hidden" name="counter" value="1" id="counterid">
                                                <input  type="hidden" name="name1" value="<?= $value->c_name?>" id="name1" style="width:250px">
                                                <input  type="hidden" name="name2" value="" id="name2" style="width:250px;">
                                                <input  type="hidden" name="name3" value="" id="name3" style="width:250px;">
                                                <input  type="hidden" name="name4" value="" id="name4" style="width:250px;">
                                                <input  type="hidden" name="name5" value="" id="name5" style="width:250px;">
                                                <input  type="hidden" name="name6" value="" id="name6" style="width:250px;">
                                                <input  type="hidden" name="activityType1" value="" id="activityType1" style="width:200px;">

                                                <input  type="hidden" name="activityType2" value="" id="activityType2" style="width:200px;">

                                                <input type="hidden" name="displayCaptcha" value="false" id="displayCaptcha">


                                            <br>
                                                <input type="submit" value="Check Company Profile" id="checkCompanyName_0" class="btn btn-primary">

                                            </form>
                                        </div>


                                     </td>
                                </tr>
			                     <?php endforeach;} ?>
                                </tbody>
                            </table>

                        </div>
                        <!-- end panel-body -->
                        
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
				<div class="col-lg-2"></div>
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

	<script src="<?=base_url()?>assetsAdmin/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/theme/transparent.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/table-manage-colreorder.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
   <!-- Chosen -->
    <script src="<?=base_url()?>Adminassets/js/plugins/chosen/chosen.jquery.js"></script>

    
    <!-- Select2 -->
    <script src="<?=base_url()?>Adminassets/js/plugins/select2/select2.full.min.js"></script>

	<script>
		$(document).ready(function() {
			App.init();
			TableManageColReorder.init();
            
            $('.chosen-select').chosen({width: "100%"});
		});
	</script>

		
</body>
	
</html>

