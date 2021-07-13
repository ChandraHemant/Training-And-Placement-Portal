<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Fresh And Fast | Admin</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
	
	<link href="<?=base_url()?>assetsAdmin/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/style.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?=base_url()?>assetsAdmin/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
	
	<link href="<?=base_url()?>assetsAdmin/plugins/dropzone/min/dropzone.min.css" rel="stylesheet" />
        <script type="application/javascript" src="<?= base_url()?>assets/sweet.js"></script>
	<!-- ================== END BASE JS ================== -->
	
    <link href="<?=base_url()?>Adminassets/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
    
	<?php include'./application/views/admin/include/header.php';?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Slider Management</a></li>
				<li class="breadcrumb-item active">Add New Slider</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Add New Slider <small>Manage Slider...</small></h1>
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
                            <h4 class="panel-title">Add New Slider</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <div class="note note-yellow m-b-15">
                                <div class="note-icon f-s-20">
                                    <i class="fa fa-lightbulb fa-2x"></i>
                                </div>
                                <div class="note-content">
                                    <h4 class="m-t-5 m-b-5 p-b-2">Notes</h4>
                                    <ul class="m-b-5 p-l-25">
                                        <li>The maximum file size for uploads in this note is <strong>5 MB</strong> (default file size is unlimited).</li>
                                        <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this note (by default there is no file type restriction).</li>
                                        <li>The resolution of image file is <strong>250x167</strong>.</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <form action="<?= base_url('AddTnpTeamSubmit')?>" method="post" enctype="multipart/form-data" class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                        <fieldset class="form-horizontal">
                                         
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-sm-4 col-form-label">Enter Name*</label>
                                                <div class="col-sm-7"><input type="text" name="phone" class="form-control" required autofocus="" placeholder="Enter Mobile No." tabindex="1"></div>
                                            </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-sm-4 col-form-label">Enter Branch*</label>
                                                <div class="col-sm-7"><input type="text" name="branch" class="form-control" required autofocus="" placeholder="Enter Branch" tabindex="1"></div>
                                            </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-sm-4 col-form-label">Enter Mobile No.*</label>
                                                <div class="col-sm-7"><input type="text" name="phone" class="form-control" required autofocus="" placeholder="Enter Mobile No." tabindex="1"></div>
                                            </div>
                                        
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-sm-4 col-form-label">Select Target Product</label>
                                                    <div class="col-sm-7">
                                                        <select name="role" required="" class="col-sm-6 chosen-select"  tabindex="1" autofocus="">                                                            
                                                            <option value="">Select Role</option>
                                                            <option value="Director">Director</option>
                                                             <option value="Faculty">Faculty</option>
                                                            <option value="Student">Student</option>
							                             </select>
                                                    </div>
						                          </div>
                                            
                                            <div class="form-group row m-b-15">
                                                <label class="col-md-4 col-sm-4 col-form-label" for="image">  Select Image Of Slider *</label>
                                                <div class="col-sm-7">
                                                        <input class="form-control" type="file" name="file_name" required placeholder="Required" data-parsley-required="true" accept="image/x-png,image/gif,image/jpeg" />
                                                    </div>
                                                </div>
                                            
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-sm-4 col-form-label"></label>
                                                <div class="col-sm-7"><button class="form-control btn btn-success btn-rounded" title="Create A New Category" tabindex="3"><strong>Upload</strong></button> </div>
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
            </div>
            <!-- end row -->
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
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/parsley/dist/parsley.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/highlight/highlight.common.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/render.highlight.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
   <!-- Chosen -->
    <script src="<?=base_url()?>Adminassets/js/plugins/chosen/chosen.jquery.js"></script>

    
    <!-- Select2 -->
    <script src="<?=base_url()?>Adminassets/js/plugins/select2/select2.full.min.js"></script>
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="<?=base_url()?>assetsAdmin/plugins/dropzone/min/dropzone.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
        <?php

    if($this->session->flashdata('item')){
        $item=$this->session->flashdata('item');
    if($item == "yes"){ ?>
         <script> swal("Successfully added!!!", "Browse to add more..", "success");</script>
    <?php }else if ($item == "no"){ ?>
        <script>swal("opps something went wrong!!!", "Please try again...", "error");</script>
   <?php     
    }
    }

?>
	<script>
		$(document).ready(function() {
			App.init();
			Highlight.init();
            
            $('.chosen-select').chosen({width: "100%"});
		});
        
	</script>
</body>

</html>

