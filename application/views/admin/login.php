<!DOCTYPE html>

<html lang="en">
	
<head>
	<meta charset="utf-8" />
	<title>Training & Placement | Admin</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
<!--===============================================================================================-->	
	    <link rel="icon" href="<?=base_url()?>User_assets/images/logoes.png"> 
<!--===============================================================================================-->
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?= base_url()?>assetsAdmin/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?= base_url()?>assetsAdmin/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="<?= base_url()?>assetsAdmin/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="<?= base_url()?>assetsAdmin/css/transparent/style.min.css" rel="stylesheet" />
	<link href="<?= base_url()?>assetsAdmin/css/transparent/style-responsive.min.css" rel="stylesheet" />
	<link href="<?= base_url()?>assetsAdmin/css/transparent/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?= base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
        <script type="application/javascript" src="<?= base_url()?>assets/sweet.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
	
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<div class="login-cover">
	    <div class="login-cover-image" style="background-image: url(<?= base_url()?>assetsAdmin/img/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
	    <div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span><b>Admin Section</b> 
                    <!--<small>Admin Section</small>-->
                </div>
                <div class="icon">
                    <i class="fa fa-lock"></i>
                </div>
            </div>
            <!-- end brand -->
            <!-- begin login-content -->
            <div class="login-content">
                <form action="<?= base_url('AdminLoginCheck')?>" method="POST" class="margin-bottom-0">
                    
                    <div class="form-group m-b-20">
                        <input type="email" class="form-control form-control-lg" name="uname" placeholder="Enter E-mail" autofocus="" required />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control form-control-lg" name="pass" placeholder="Password" required />
                    </div>
                    <div class="checkbox checkbox-css m-b-20">
                        <input type="checkbox" id="remember_checkbox" /> 
                        <label for="remember_checkbox">
                        	Remember Me
                        </label>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                    </div>
                    <div class="m-t-20">
                        Not a member yet? Click <a href="<?=base_url()?>adminRegister">here</a> to register.
                    </div>
                </form>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end login -->
        <?php
        if($this->session->flashdata('item')){
        $item=$this->session->flashdata('item');
        if($item == "no"){ ?>
        ?>
          <script>swal("opps something went wrong!!!", "Please try again...", "error");</script>
        <?php } }
        
        ?>

        
<?php //include'include/footer.php';?>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?= base_url()?>assetsAdmin/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url()?>assetsAdmin/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?= base_url()?>assetsAdmin/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?= base_url()?>assetsAdmin/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?= base_url()?>assetsAdmin/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?= base_url()?>assetsAdmin/js/theme/transparent.min.js"></script>
	<script src="<?= base_url()?>assetsAdmin/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?= base_url()?>assetsAdmin/js/demo/login-v2.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			LoginV2.init();
		});
	</script>

</body>

	
</html>

