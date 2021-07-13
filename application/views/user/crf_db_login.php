<!DOCTYPE html>
<html lang="en">

<head>
	<title>Student Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url() ?>User_assets/images/logoes.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>User_assets/logform/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>User_assets/logform/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>User_assets/logform/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>User_assets/logform/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>User_assets/logform/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>User_assets/logform/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>User_assets/logform/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>User_assets/logform/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>User_assets/logform/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>User_assets/logform/css/main.css">
	<!--===============================================================================================-->
	<!-- ================== BEGIN EXTRA JS ================== -->
	<script type="application/javascript" src="<?= base_url() ?>Adminassets/js/sweet.js"></script>
	<!-- ================== END EXTRA JS ================== -->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style=" margin-top:-100px;">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?= base_url() ?>User_assets/logform/images/bg-01.jpg); max-height:50px;">
					<span class="login100-form-title-1">
						Corporate Login Section
					</span>
				</div>

				<form class="validate-form" method="post" action="<?=base_url('CrfLoginSubmit')?>">
					<br>
                       <div class="wrap-input100 validate-input m-b-26" data-validate="Please
                                enter your email">
						<span class="">Email id</span>
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Please
                               create your password">
						<span class="">Password</span>
						<input class="input100" type="password" name="password" placeholder="password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Please
                               enter your registered id">
						<span class="">Registered Id</span>
						<input class="input100" type="text" name="rid" placeholder="Please Enter Registered Id">
						<span class="focus-input100"></span>
					</div>




                                    
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php

	if ($this->session->flashdata('item')) {
		$item = $this->session->flashdata('item');
		if ($item == "yes") { ?>
			<script>
				swal("Successfully Logged In!!!", "Now the Manage Your Profile", "success");
			</script>
		<?php } else if ($item == "no") { ?>
			<script>
				swal("opps something went wrong!!!", "Please try again...", "error");
			</script>
		<?php
			} else if ($item == "uppass") { ?>
			<script>
				swal("Successfully Logged In!!!", "Now The Update Your Password", "success");
			</script>
		<?php
			} else if ($item == "logout") { ?>
			<script>
				swal("Successfully Logged Out!!!", "Thank you...!", "success");
			</script>
		<?php
			} else if ($item == "errpass") { ?>
			<script>
				swal("opps password is wrong!!!", "Please try again...", "error");
			</script>
		<?php
			} else if ($item == "errusr") { ?>
			<script>
				swal("opps Username is wrong!!!", "Please try again...", "error");
			</script>
		<?php
			} else if ($item == "errusr") { ?>
			<script>
				swal("opps Username is wrong!!!", "Please try again...", "error");
			</script>
		<?php
		}
	}

	?>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>User_assets/logform/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>User_assets/logform/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>User_assets/logform/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>User_assets/logform/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>User_assets/logform/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>User_assets/logform/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url() ?>User_assets/logform/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>User_assets/logform/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>User_assets/logform/js/main.js"></script>

</body>

</html>