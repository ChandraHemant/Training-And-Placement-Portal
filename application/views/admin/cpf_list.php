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
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet">
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
				<li class="breadcrumb-item active">Career Preference...</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Career Preference Table <small>Manage Career Preference List...</small></h1>
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
                            <h4 class="panel-title">Training And Placement Career Preference Management <span class="label label-success m-l-5 t-minus-1">NEW</span></h4>
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
                                    <th class="text-center">WHATSAPP NO.</th>
                                    <th class="text-center">WANT JOB THROUGH TNP DEPT OF RIT (YES/NO))</th>
                                    <th class="text-center">FIRST AND PRIMARY REQUIREMENT JOB (YES /NO)</th>
                                    <th class="text-center">WANT TO JOIN FAMILY BUSINESS (YES/NO)</th>
                                    <th class="text-center">WANT TO BECOME  ENTREPRENEUR /SELF EMPLOYMNT(YES/NO)</th>
                                    <th class="text-center">Higher Studies( PREPARING FOR GATE (YES/NO) )</th>
                                    <th class="text-center">Higher Studies( PREPARING FOR GRE (YES/NO) )</th>
                                    <th class="text-center">Higher Studies( M.TECH FROM IIT /NIT/ANY PRIVATE INSITITUTE & UNIVERSITY (SPECIFY) )</th>
                                    <th class="text-center">Higher Studies( PREPARING FOR CAT/GMAT/ MBA FROM ANY OTHER INSTITUTE /UNIVERSITY(SPECIFY) )</th>
                                    <th class="text-center">Higher Studies( PREPARING FOR CIVIL SERVICES -UPSC/PSC (SPECIFY) )</th>
                                    <th class="text-center">Government Job( PREPARING FOR GOVERNMENT JOBS (YES/NO) )</th>
                                    <th class="text-center">Government Job( WANT TO JOIN ONLY GOVT. JOBS (YES/NO) )</th>
                                    <th class="text-center">Location Preference for Job( WANT THE JOB IN CHHATTISGARH ONLY (YES/NO) )</th>
                                    <th class="text-center">Location Preference for Job( READY TO MOVE ANYWHERE IN COUNTRY (YES/NO) )</th>
                                    <th class="text-center">Indusrty Preference( ONLY CORE (Y/N) )</th>
                                    <th class="text-center">Indusrty Preference( ONLY SOFTWARE )</th>
                                    <th class="text-center">Indusrty Preference( ONLY MANAGERIAL JOBS )</th>
                                    <th class="text-center">Indusrty Preference( Ist PREFERENCE CORE BUT OPEN for software and managerial jobs (YES/NO)) </th>
                                    <th class="text-center">Indusrty Preference( ANY OTHER INDUSTRY LIKE BANKING ,STEEL ,POWER CEMENT ETC (SPECIFY BRANCHWISE) )</th>
                                </tr>
                                </thead>
                                 <tbody>        
                                  <?php
                                if($cpf){
                                    if($dbf){
                                        foreach($cpf as $data):
                                            $study=explode('|',$data->higher_study);
                                            $job=explode('|',$data->govt_job);
                                            $location=explode('|',$data->location_for_job);
                                            $pref=explode('|',$data->industry_prfrnce);
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
                                        <td class="text-center"><?= $data->job_thru_tnp?></td>
                                        <td class="text-center"><?= $data->primary_req_job?></td>
                                        <td class="text-center"><?= $data->join_fmly_bsns?></td>
                                        <td class="text-center"><?= $data->self_emplymnt?></td>
                                        <td class="text-center"><?= $study[0]?></td>
                                        <td class="text-center"><?= $study[1]?></td>
                                        <td class="text-center"><?= $study[2]?></td>
                                        <td class="text-center"><?= $study[3]?></td>
                                        <td class="text-center"><?= $study[4]?></td>
                                        <td class="text-center"><?= $job[0]?></td>
                                        <td class="text-center"><?= $job[1]?></td>
                                        <td class="text-center"><?= $location[0]?></td>
                                        <td class="text-center"><?= $location[1]?></td>
                                        <td class="text-center"><?= $pref[0]?></td>
                                        <td class="text-center"><?= $pref[1]?></td>
                                        <td class="text-center"><?= $pref[2]?></td>
                                        <td class="text-center"><?= $pref[3]?></td>
                                        <td class="text-center"><?= $pref[4]?></td>


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

