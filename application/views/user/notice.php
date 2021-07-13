<?php include'include/top_header.php';?>
<style>
        .resp-container {
            position: relative;
            padding-top: 56.25%;
            
        }
        .resp-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 101%;
            height: 100%;
            border: 0;
        }
</style>
<?php include'include/header.php';?>

   <div id="banner-area" class="banner-area bg-green">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto">
               <div class="banner-heading">
                  <h1 class="banner-title">Latest Notice</h1>
                  <ol class="breadcrumb">
                     <li>Home</li>
                     <li><a href="#">Notice</a></li>
                  </ol>
               </div>
            </div>
            <!-- Col end -->
         </div>
         <!-- Row end -->
      </div>
      <!-- Container end -->
   </div>
   <!-- Banner area end -->

         <div class="row">
             <?php
                if($notice){
                foreach($notice as  $value):
                if($value->role=='home') {

                ?>

                            <div class="resp-container"  style="height:1900px;width:100%">

                                <iframe class="resp-iframe" src="<?=base_url()?><?=$value->image?>" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>

                            </div>
                        </div>
                        <?php if($value->campus=='yes' || $value->campus=='Yes' || $value->campus=='YES'){?>
                            <center><h6>Click Here To &nbsp; &nbsp;<a href=<?=base_url('StdRegisterForCampus/').$value->n_id?>>Register For Campus Drive</a></h6></center>
                        <?php }?>
                <?php                                           	
                }
                endforeach;}
                ?>


<?php include'include/footer.php';?>

   <!-- Javascripts File
      =============================================================================-->
<?php include'include/script.php';?>