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
				<li class="breadcrumb-item"><a href="javascript:;">Order Management</a></li>
				<li class="breadcrumb-item active">ORDERS...</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">ORDERS Table <small>Manage Order Details...</small></h1>
			<!-- end page-header -->
			
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <?php if($order){
                        foreach ($order as $value) {
                          $check=$value->status;  
                        $cstmorderid=$value->order_id;
                        } 
                if($check=='pending'){
                ?>		
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
                            <h4 class="panel-title">Single User Order Detail</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form action="<?= base_url('add-new-product-in-cart')?>" method="post" enctype="multipart/form-data" class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                        <fieldset class="form-horizontal">
                                            
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-sm-4 col-form-label">Select Product Name *</label>
                                                <div class="col-sm-7">
                                                    
                                                    <input type="hidden" value="<?=$cstmorderid?>" name="order">
                                                    <select data-placeholder="Select A Shop..." required class="col-sm-6 chosen-select" name="product" tabindex="1" autofocus="">
                                                        <option value="">Add-New-Product-In-Cart</option>
                                                    <?php foreach ($product as $value):?>
                                                        <option value="<?=$value->p_id?>"><?=$value->name?></option>
                                                    <?php endforeach; ?>    
                                                    </select>
                                                </div>
											</div>

                                            
                                            <div class="form-group row m-b-15">
                                                <label class="col-md-4 col-sm-4 col-form-label" for="image"> Select Quantity *</label>
                                                <div class="col-sm-7">
                                                        <input class="form-control" required type="number" min="1" max="20" placeholder="Select Quantity" tabindex="2" name="quantity">
                                                    </div>
                                                </div>
                                            
                                            <div class="form-group row m-b-0">
                                                <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                                                <div class="col-md-7 col-sm-7">
                                                    <button type="submit" class="btn btn-primary btn-success btn-block">Add Product</button>

                                                </div>

                                            </div>
                                    
                                        </fieldset>
                            </form>
                        </div>
                        <!-- end panel-body -->
                        
                    </div>
                    <!-- end panel -->
                </div>
                
                <?php } } ?>
                <!-- end col-6 -->
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
                            <h4 class="panel-title">Fresh And Fast Delivered Order Management <span class="label label-success m-l-5 t-minus-1">NEW</span></h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                                        					
				            <table id="data-table-colreorder" class="table table-striped table-bordered m-b-0">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Order Id</th>
                                    <th>Product Status</th>
                                    <th>Product Name</th>
                                    <th>Actual Price</th>
                                    <th>Discounted Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th>Action(s)</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeC"> 
                                <?php  if($order){
                                        $sno=1;
                                        foreach($order as $value):

                                    $orderid=$value->order_id;
                                    $status=$value->status;
                                    $shop_id=$value->shop_id;
                                        foreach ($shopdata as $value2):
                                        if($value->p_id!=$value2->p_id){
                                            goto neeche;
                                        }
                                        else{ ?>
                                    <td><?=$sno?></td>
                                    <td><?=$value->order_id?></td>


                                    <td>
                                    <?php if($value->subtotal=='0'){?>
                                        Free
                                    <?php }else{?>
                                        Chargeable
                                    <?php }?>
                                    </td>
                                    <td><?=$value2->name?></td>
                                    <td><?=$value2->ac_price?></td>
                                    <td><?=$value2->discnt_price?></td>
                                    <td><?=$value->quantity?></td>
                                    <td><?=$value->subtotal?></td>
                                    <td><?php if($value->status=='pending'){?>
                                        <a href="<?= base_url('edit-product-in-cart')?>/<?=$value->order_id?>/<?=$value->o_id?>" title="Edit Products" style="margin-top:10px" >
                                            <button class="btn btn-info"><i class="fa fa-edit"> &nbsp;&nbsp;Edit</i></button></a><br/>
                                        <a href="<?= base_url('remove-product-from-cart')?>/<?=$value->order_id?>/<?=$value->o_id?>/<?=$this->uri->segment(3)?>" title="Clear This Products From The Cart" style="margin-top:10px" >
                                            <button  class="btn btn-danger"><i class="fa fa-trash-o"> &nbsp;&nbsp;Clear</i></button></a>
                                        <?php if($value->subtotal!=0){ ?>
                                        <a href="<?= base_url('free-product-on-cart')?>/<?=$value->order_id?>/<?=$value->o_id?>" title="Lets Free This Product For User" style="margin-top:10px" >
                                            <button class="btn btn-warning"><i class="fa fa-thumbs-up"> &nbsp;&nbsp;Free</i></button></a>
                                        <?php }elseif($value->subtotal==0){ ?>
                                        <a href="<?= base_url('unfree-product-on-cart')?>/<?=$value->order_id?>/<?=$value->o_id?>" title="Lets Unfree This Product For User" style="margin-top:10px" >
                                            <button class="btn btn-warning" ><i class="fa fa-thumbs-down"> &nbsp;&nbsp;Unfree</i></button></a>
                                        <?php } ?>
                                    <?php }else{?><button class="btn btn-info"><i class="fa fa-check-square-o"> &nbsp;&nbsp;<?=$value->status?></i></button><?php }?>        
                                    </td>
                                    </tr>

                                <?php } neeche:  endforeach; $sno=$sno+1; endforeach; 

                                ?>
                                </tbody>
                            </table>
								
                    <?php 
                    if($order && $status=='pending'){?>
                            
                            <form action="<?=base_url('order-approved')?>/<?=$orderid?>" method="post" enctype="multipart/form-data" class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                <fieldset class="form-horizontal">
                                            
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-sm-4 col-form-label" for="image">Select Delivery Boy *</label>
                                                <div class="col-sm-6">
                                                    <select data-placeholder="Select A Delivery Boy..." class="chosen-select" name="d_id" required>
                                                        <option value="">Select A Delivery Boy...</option>
                                                    <?php foreach ($dboy as $value):?>
                                                        <option value="<?=$value->d_id?>"><?=$value->name?> (<?=$value->mobile?>)</option>
                                                    <?php endforeach; ?>    
                                                    </select>
                                                </div>
											</div>
                                            
                                            <div class="form-group row m-b-0">
                                                <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <button type="submit" class="btn btn-primary btn-success btn-block"><i class="fa fa-send"></i> &nbsp;&nbsp;Dispatch (with Invoice)</button>
                                                    

                                                </div>

                                            </div>
                                    
                                        </fieldset>
                                    </form>
                             <?php }elseif($order && $status=='cancelled'){ ?>
                                <button class="btn btn-danger" disabled=""><i class="fa fa-close"></i> &nbsp;&nbsp;Cancelled </button>  
                            
                            <?php    }else{?>
                            <a href="<?= base_url('invoice')?>/<?=$value->order_id?>/<?=$value->shop_id?>" title="Print Invoice" ><button class="btn btn-danger">
                                <i class="fa fa-print"></i>&nbsp;&nbsp;&nbsp;Print Invoice</button></a>
                            <button class="btn btn-success" disabled=""><i class="fa fa-truck"></i> &nbsp;&nbsp;Dispatched </button>
                            <?php } }?>
                            
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

