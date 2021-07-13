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
                  <h1 class="banner-title">Our Teams</h1>
                  <ol class="breadcrumb">
                     <li>Home</li>
                     <li><a href="#">Tnp Teams</a></li>
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

   <section id="main-container" class="main-container">
      <div class="container">
         <div class="row">
            <?php if($tnpteam){
            foreach($tnpteam as $value):
            if($value->role=='director'){
            ?>
            <div class="col-lg-6 text-lg-right text-md-center wow fadeInLeft" data-wow-duration="1s">
               <img src="<?=base_url()?><?=$value->image?>" style="border-radius:50%;" alt="" class="img-fluid">
                <center>
                <h2><br><?=$value->Name?></h2>
                </center>
            </div>
            <!-- End Col -->
            <div class="col-lg-6 col-md-12 wow fadeInRight intro-text-right" data-wow-duration="1s">
               <h2 class="column-title">About Of The <span>Director</span> Of Training & Placement</h2>
   
               <p>
                  <?=$value->about?>.
               </p>
               <a href="#" class="btn btn-primary tw-mt-40">learn more</a>
               <!-- Default Round Btn -->
               <a href="#" class="btn btn-secondary tw-mt-40">contact us</a>
            </div>
            
             <?php } endforeach;}?>
            <!-- End Col -->
         </div>
         <!-- End Row -->
      </div>
      <!-- End Container -->
   </section>
   <!-- Main container end -->

   <section id="tw-team" class="tw-team bg-lightgray">
      <div class="container">
         <div class="row">
            <div class="col text-center">
               <div class="section-heading tw-mb-80">
                  <h2>
                     <small>Our Teams</small>
                     Training & Placement <span> Faculty Team</span>
                  </h2>
               </div>
            </div>
            <!-- Title Col end -->
         </div>
         <!-- Title row End -->
         <div class="row">
    <?php if($tnpteam){
           foreach($tnpteam as $value):
        if($value->role=='faculty'){
    ?>
            <div class="col-md-3">
               <div class="tw-team-box">
                  <div class="team-img">
                     <img src="<?=base_url()?><?=$value->image?>" style="border-radius:10px;" alt="" class="img-fluid bg-green">
                  </div>
                  <div class="team-info">
                     <h3 class="team-name"><?=$value->Name?></h3>
                     <p class="team-designation"><?=$value->Branch?></p>
                     <div class="team-social-links">
                        <p><?=$value->mobileno?></p>
                        <br>
                     </div>
                  </div>
                  <!-- Team Info end -->
               </div>
               <!-- Team Box End -->
            </div>
     <?php } endforeach;}?>
            <!-- Col End -->
         </div>
         <!-- Content Row End -->
      </div>
      <!-- Container end -->
   </section>
   <!-- Team Section End -->

   <section id="main-container" class="main-container">

      <div class="container">
         <div class="row text-center">
            <div class="col section-heading wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
               <h2>
                  <small>Our Teams</small>
                  Training & Placement <span>Student Teams</span>
               </h2>
            </div>
            <!-- Title Col End -->
         </div>
         <!-- Title Row End -->
         <div class="row">
            <?php if($tnpteam){
            foreach($tnpteam as $value):
            if($value->role=='student' || $value->role=='Student'){
            ?>
            <div class="col-md-4">
               <div class="tw-service-box wow zoomIn" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: zoomIn;">
                  <div class="service-icon service-icon-bg-1 d-table">
                     <div class="service-icon-inner d-table-cell">
                        <img src="<?=base_url()?><?=$value->image?>" style="border-radius:50%;" alt="search engine" class="img-fluid">
                     </div>
                  </div>
                  <!-- Service icon end -->
                  <div class="service-content">
                      <br><center>
                     <h3><?=$value->Name?></h3>
                     <p><?=$value->Branch?></p>
                     <p><?=$value->mobileno?></p>
                      </center>
                  </div>
                  <!-- Service Content end -->
               </div>
               <!-- Service box end -->
            </div>
            <?php } endforeach;}?>
         </div>
      </div>
      <!-- container -->
   </section>
   <!-- Main container end -->

<?php include'include/footer.php';?>

   <!-- Javascripts File
      =============================================================================-->
<?php include'include/script.php';?>