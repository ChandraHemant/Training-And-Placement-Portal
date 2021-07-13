<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
    <title><?php if($this->session->userdata('role')=='shop'){
                        echo $this->session->userdata('shop_name');
                }else{
                        echo 'Admin';
                }
        ?> | Dashboard</title>

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
	<link href="<?=base_url()?>assetsAdmin/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/ColReorder/css/colReorder.bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	
	<?php include'./application/views/admin/include/header.php';?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
             <?php   $tcompany=$tuser=$tplaced=$tcampus=0;
              
                        foreach ($company as $data1) {
                        $tcompany=$tcompany+1;
                        }
                        foreach ($student as $data2) {
                            $tuser=$tuser+1;
                        }
                        foreach ($placed as $data3) {
                            $tplaced=$tplaced+1;
                        }
                        foreach ($campus as $data4) {
                            $tcampus=$tcampus+1;
                        }?>    
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>Detail Here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-grey-darker">
						<div class="stats-icon"><i class="fa fa-desktop"></i></div>
						<div class="stats-info">
                                <h4>TOTAL REQUESTED COMPANIES</h4>
                                <p><?=$tcompany?></p>           
						</div>
						<div class="stats-link">
							<p href="javascript:;"> <i class="fa fa-arrow-alt-circle-right"></i></p>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-green">
						<div class="stats-icon"><i class="fa fa-link"></i></div>
						<div class="stats-info">
							<h4>TOTAL ELIGIABLE STUDENTS</h4>
                            <P><?=$tuser?></P>                   
						</div>
						<div class="stats-link">
							<p href="javascript:;"> <i class="fa fa-arrow-alt-circle-right"></i></p>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-orange">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>TOTAL REGISTERED STUDENT</h4>
                            <P><?=$tcampus?></P>
                        </div>
						<div class="stats-link">
							<p href="javascript:;"> <i class="fa fa-arrow-alt-circle-right"></i></p>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-red">
						<div class="stats-icon"><i class="fa fa-clock-o"></i></div>
						<div class="stats-info">
							<h4>TOTAL PLACED STUDENTS</h4>
                            <P><?=$tplaced?></P>                        
						</div>
						<div class="stats-link">
							<p href="javascript:;"><i class="fa fa-arrow-alt-circle-right"></i></p>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
	<!--			<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-red">
						<div class="stats-icon"><i class="fa fa-clock-o"></i></div>
						<div class="stats-info">
							<h4>TOTAL ORDERS</h4>
                            <P><?=$totalorder?></P>                        
						</div>
						<div class="stats-link">
							<p href="javascript:;"><i class="fa fa-arrow-alt-circle-right"></i></p>
						</div>
					</div>
				</div>-->
				<!-- end col-3 -->
			</div>
			<!-- end row -->
		</div>
	
    <?php if($totalorder>0){ ?>
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Recent Orders </a></li>
				<li class="breadcrumb-item active">ORDERS...</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">ORDERS Table <small>Manage ORDERS...</small></h1>
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
                            <h4 class="panel-title">FRESH AND FAST Recent Orders Management <span class="label label-success m-l-5 t-minus-1">NEW</span></h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        
                        <?php if($totalorder==0){ ?>
                        <div class="panel-body">
                            <table id="data-table-colreorder" class="table table-striped table-bordered m-b-0">
                                <thead>
                                    <tr>
                                    	<h4 class="text-center"> No Recent Order(s) Yet.... </h4>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                         <?php }else { ?>
                        <div class="panel-body">
                            <table id="data-table-colreorder" class="table table-striped table-bordered m-b-0">
                                <thead>
                                    <tr>
                                        <th  width="9%">No.</th>
                                        <th class="text-nowrap">Order Id</th>
                                        <th class="text-nowrap">Shop Name</th>
                                        <th class="text-nowrap">Customer Name</th>
                                        <th class="text-nowrap">Bill</th>
                                        <th class="text-nowrap">Order Date</th>
                                        <th class="text-nowrap">Status</th>
                                    	
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                                $count=0;
                                                foreach ($allorder as $value):
                                                    $shopid=$value->shop_id;
                                                    $uid=$value->u_id;
                                                     $udata['user']=$this->db->query("SELECT * FROM users WHERE u_id='$uid'")->result_array();
                                                    foreach ($udata['user'] as $value1) 
                                                        {
                                                            $cust_name=$value1['name'];
                                                        }
                                                    $count++;
                                                ?>
                                                <tr class="gradeC" style="padding:20px;">
                                                    <td><?=$count?></td>
                                                    <td><a title="Click to see the <?=$value->order_id?> Detail" href="<?=base_url('order-details/')?><?=$value->order_id?>"><?=$value->order_id?></a></td>
                                                    <?php 
                                                $shopdata=$this->ShopModel->invoice_shop_detail_model($shopid);
                                                    foreach ($shopdata as $value2):?>
                                                        <td><?=$value2->name?></td>
                                                <?php endforeach; ?>
                                                
                                                    <td><?=$cust_name?></td>
                                                    <td><?php
                                                        $sum=$this->ShopModel->sum_calculating($value->order_id,$shopid);
                                                        echo $sum;
                                                    ?></td>
                                                    <td class="text-navy"><?=$value->dttime?></td>
                                                <td><?=$value->status?></td>

                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                </tbody>
                            </table>
                        </div>
                        
                    <?php }?>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->
            </div>
            <!-- end row -->
		</div>
    
     <?php }?>
		<!-- end #content -->
		<!-- end #content -->
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
	<script src="<?=base_url()?>assetsAdmin/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/flot/jquery.flot.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/dashboard.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/table-manage-colreorder.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/parsley/dist/parsley.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/form-wizards-validation.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
			
			
			TableManageColReorder.init();
		});
	</script>

 </body>

</html>

