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
				<li class="breadcrumb-item"><a href="javascript:;">Student Management</a></li>
				<li class="breadcrumb-item active">Add Database...</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Database Table <small>Manage New Student...</small></h1>
			<!-- end page-header -->
			
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
	
				<div class="col-lg-2"></div>
                <!-- begin col-6 -->
			    <div class="col-lg-8">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Training And Placement Add New Student...</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">

                            <form action="<?= base_url('StdDatabaseSubmit')?>" method="post" enctype="multipart/form-data" class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                        <fieldset class="form-horizontal">
                                             <div class="form-group row m-b-15">                                                 <label class="col-md-4 col-sm-4 col-form-label" for="image">Student Name *</label>
                                                <div class="col-sm-7"><input type="text" name="name" class="form-control" required autofocus="" placeholder="Enter Student Name " tabindex="1"></div>
                                            </div>


                                               <div class="form-group row m-b-15">                                                 <label class="col-md-4 col-sm-4 col-form-label" for="image">Student Enroll No. *</label>
                                                <div class="col-sm-7"><input type="text" name="enroll" class="form-control" required placeholder="Enter Student Enrollment No." tabindex="2"></div>
                                            </div>

                                               <div class="form-group row m-b-15">                                                 <label class="col-md-4 col-sm-4 col-form-label" for="image">Student Roll No. *</label>
                                                <div class="col-sm-7"><input type="text" name="roll" class="form-control" required placeholder="Enter Student Roll No." tabindex="3"></div>
                                            </div>


                                            
                                            <div class="form-group row m-b-0">
                                                <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                                                <div class="col-md-7 col-sm-7">
                                                    <button type="submit" class="btn btn-primary btn-success btn-block">Submit</button>

                                                </div>

                                            </div>
                                        </fieldset>
                            </form>
                        </div>
                        <!-- end panel-body -->
                        
                    </div>
                    <!-- end panel -->
                </div>
                
                <!-- end col-6 -->
				<div class="col-lg-2"></div>
			    <!-- begin col-10 -->
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

