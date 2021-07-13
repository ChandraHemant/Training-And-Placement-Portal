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
                  <h1 class="banner-title">Student Career Prefrence</h1>
                  <ol class="breadcrumb">
                     <li>Home</li>
                     <li><a href="#">Career Prefrence</a></li>
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

   <section id="main-container" class="main-container" style="background-color:gray">
      <div class="container">
         <div class="row">
             <div class="col-md-2"></div>
             <div class="col-md-8" style="height:2300px;">
                <iframe class="resp-iframe" style="border-radius:10px;" src="<?=base_url('SafView')?>" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>
             </div>
            <!-- End Col -->
         </div>
         <!-- End Row -->
      </div>
      <!-- End Container -->
   </section>
   <!-- Main container end -->


<?php include'include/footer.php';?>

   <!-- Javascripts File
      =============================================================================-->
<?php include'include/script.php';?>