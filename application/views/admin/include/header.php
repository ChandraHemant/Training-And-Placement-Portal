
<!--===============================================================================================-->	
	    <link rel="icon" href="<?=base_url()?>User_assets/images/logoes.png"> 
<!--===============================================================================================-->

<?php
error_reporting(0);

$pname=$page;

if(strcmp($pname,"CpfList")==0)
{
    $class2='active';
}
else if(strcmp($pname,"SafList")==0)
{
    $class21='active';
}
else if(strcmp($pname,"AddNotice")==0)
{
    $class3='active';
}
else if(strcmp($pname,"CampusList")==0)
{
    $class31='active';
}
else if(strcmp($pname,"PlacementPolicy")==0)
{
    $class4='active';
}
else if(strcmp($pname,"policyupdate")==0)
{
    $class41='active';
}
else if(strcmp($pname,"StdDatabase")==0)
{
    $class5='active';
}
else if(strcmp($pname,"StdDbResume")==0)
{
    $class5='active';
}
else if(strcmp($pname,"StdDatabaseEntry")==0)
{
    $class51='active';
}
else if(strcmp($pname,"TnpTeamUpdate")==0)
{
    $class6='active';
}
else if(strcmp($pname,"TnpTeamList")==0)
{
    $class61='active';
}
else if(strcmp($pname,"AddSlider")==0)
{
    $class7='active';
}
else if(strcmp($pname,"SliderList")==0)
{
    $class71='active';
}
else
{
	$class1='active';
}


?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
/* width */
::-webkit-scrollbar {
    width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 0 ; 
    border-radius: 10px;
	margin-left: 5px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: transparent; 
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #3A3B3D; 
}
</style>
</head>
<body>
	<!-- begin page-cover -->
	<div class="page-cover"></div>
	<!-- end page-cover -->
	
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"><span class="navbar-logo"></span> <b>Training & Placement</b> Admin</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li>
					<form class="navbar-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</li>
				<li class="dropdown">
					<a href="<?=base_url('AdminLogout')?>" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                                            <i class="fa fa-sign-out"> Logout</i>
						<!--<span class="label">5</span>-->
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">

						<li class="dropdown-footer text-center">
							<a href="<?=base_url('AdminLogout')?>">Logout</a>
						</li>
					</ul>
				</li>
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?=base_url()?>assetsAdmin/img/user/user-13.jpg" alt="" /> 
						<span class="d-none d-md-inline">Admin</span> 
					</a>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div class="slimScrollDiv" style="position: relative; overflow: auto; width: auto; height: 100%;"><div data-scrollbar="true" data-height="100%" style="overflow: auto; width: auto; height: 100%;" data-init="true">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="image">
								<img src="<?=base_url()?>assetsAdmin/img/user/user-13.jpg" alt="">
							</div>
							<div class="info">
                                                           
								Admin
<!--								<small>Front end developer</small>-->
							</div>
						</a>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub <?=$class1?>">
						<a href="<?=base_url('Dashboard')?>">
					        <!--<b class="caret"></b>-->
						    <i class="fa fa-th-large"></i>
						    <span>Dashboard</span>
					    </a>
					</li>
                    
                    <li class="has-sub <?=$class5?><?=$class51?>">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-database"></i>
						    <span>Student Database &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Management</span>
						</a>
					    <ul class="sub-menu">
					        <li class="<?=$class51?>"><a href="<?=base_url('StdDatabaseEntry')?>">Add New Student</a></li>
					        <li class="<?=$class5?>"><a href="<?=base_url('StdDatabase')?>">Student Database</a></li>
					    </ul>
					</li>
                    <li class="has-sub <?=$class2?><?=$class21?>">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-users" style="font-size:18px"></i>
						    <span>Student Management</span>
					    </a>
						<ul class="sub-menu">
					        <li class="<?=$class2?>"><a href="<?=base_url('CpfList')?>">Career Preferance List</a></li>
					        <li class="<?=$class21?>"><a href="<?=base_url('SafList')?>">Self Assessment List</a></li>
					    </ul>
					</li>
                                        
                    <li class="has-sub <?=$class3?><?=$class31?>">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-sitemap"></i>
						    <span>Placement &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Management</span>
						</a>
					    <ul class="sub-menu">
					        <li class="<?=$class3?>"><a href="<?=base_url('AddNotice')?>">Add New Notice</a></li>
					        <li class="<?=$class31?>"><a href="<?=base_url('CampusList')?>">Registered Campus List</a></li>
					    </ul>
					</li>
                    
                    <li class="has-sub <?=$class4?>">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-bars"></i>
						    <span>Policy Management</span>
						</a>
					    <ul class="sub-menu">
					        <li class="<?=$class4?>"><a href="<?=base_url('PlacementPolicy')?>">Placement Policies</a></li>
					    </ul>
					</li>
                    
                    <li class="has-sub <?=$class6?><?=$class61?>">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-tasks"></i>
						    <span>T&P Team &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Management</span>
						</a>
					    <ul class="sub-menu">
					        <li class="<?=$class6?>"><a href="<?=base_url('TnpTeamUpdate')?>">Add New T&P Team </a></li>
					        <li class="<?=$class61?>"><a href="<?=base_url('TnpTeamList')?>">List All T&P Members</a></li>
					    </ul>
					</li>
                    
                    <li class="has-sub <?=$class7?><?=$class71?>">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-flag-o"></i>
						    <span>Slider Management</span>
						</a>
					    <ul class="sub-menu">
					        <li class="<?=$class7?>"><a href="<?=base_url('AddSlider')?>">Add New Slider</a></li>
					        <li class="<?=$class71?>"><a href="<?=base_url('SliderList')?>">Slider List</a></li>
					    </ul>
					</li>
                    
                    
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 424.681px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
