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
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Student Management</a></li>
				<li class="breadcrumb-item active">Self Assesment ...</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Self Assesment  Table <small>Manage Self Assesment ...</small></h1>
			<!-- end page-header -->
			
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
                            <h4 class="panel-title">Training And Placement Self Assesment Management <span class="label label-success m-l-5 t-minus-1">NEW</span></h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                                        					
								<table id="data-table-buttons" class="table table-striped table-bordered m-b-0">
                                <thead>
                                <tr>
                                    <th class="text-center">STUDENT NAME</th>
                                    <th class="text-center">GENDER</th>
                                    <th class="text-center">BRANCH</th>
                                    <th class="text-center">PASS OUT YEAR</th>
                                    <th class="text-center">SEMESTER</th>
                                    <th class="text-center">EMAIL ID</th>
                                    <th class="text-center">MOBILE NO.</th>
                                    <th class="text-center">WHATTSAPP NO.</th>
                                    <th class="text-center">ATTENDANCE IN ACADEMICS</th>
                                    <th class="text-center">EMPLOYBILITY SKILLS ( TECHNICAL SKILLS(Y/N) )</th>
                                    <th class="text-center">EMPLOYBILITY SKILLS ( QUANTITATIVE /APTITUDE SKILLS (Y/N) )</th>
                                    <th class="text-center">EMPLOYBILITY SKILLS ( COMMUNICATION SKILLS (Y/N) )</th>
                                    <th class="text-center">EMPLOYBILITY SKILLS ( PRESENTATION SKILLS (Y/N) )</th>
                                    <th class="text-center">EMPLOYBILITY SKILLS ( BEHAVIOURAL/SOFT /HR SKILLS )</th>
                                    <th class="text-center">CAMPUS RECRUITMENT TRAINING FROM EXTERNAL AGENCY ( INTERESTED/NOT INTERESTED )</th>
                                    <th class="text-center">READY TO PAY FOR CAMPUS RECRUITMENT TRAINING FROM EXTERNAL AGENCY (Y/N)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if($saf){
                                    if($dbf){
                                        foreach($saf as $data):
                                            $study=explode('|',$data->employbility_skills);
                                            $job=explode('|',$data->crtf_ex_agency);
                                        foreach($dbf as $value):
                                    if($data->d_id==$value->d_id){
                                    ?>
                                    <tr>

                                        <td class="text-center"><?= $value->d_name?></td>                           
                                        <td class="text-center"><?= $value->gender?></td>
                                        <td class="text-center"><?= $value->branch?></td>
                                        <td class="text-center"><?= $value->pass_out_yr?></td>
                                        <td class="text-center"><?= $value->semester?></td>
                                        <td class="text-center"><?= $value->email_id?></td>
                                        <td class="text-center"><?= $value->mob_no?></td>
                                        <td class="text-center"><?= $value->whatsapp_no?></td>
                                        <td class="text-center"><?= $data->attendance?></td>
                                        <td class="text-center"><?= $study[0]?></td>
                                        <td class="text-center"><?= $study[1]?></td>
                                        <td class="text-center"><?= $study[2]?></td>
                                        <td class="text-center"><?= $study[3]?></td>
                                        <td class="text-center"><?= $study[4]?></td>
                                        <td class="text-center"><?= $job[0]?></td>
                                        <td class="text-center"><?= $job[1]?></td>
                                          </tr>    
                                    <?php }
                                       endforeach;
                                       endforeach;} }
                                       ?>  



                                </tbody>
                            </table>
								
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

</body>
	
</html>

