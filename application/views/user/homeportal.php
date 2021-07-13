<?php include'include/top_header.php';?>

<?php include'include/header.php';?>

   <div class="tw-slider-area owl-carousel">
       
      <!-- 1st Slider -->
      <div class="slider-items bg-orange">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6" id="loaddata">
                  <img src="<?=base_url()?>uploads/slider/campus3.jpg" style="border-radius:10px;" alt="" class="img-fluid">
               </div>
               <div class="col-md-6">
                  <div class="slider-content slide-text-right">
                     <h1>Corporate </h1>
                     <p class="slider-desc">We use technology to help corporate assess and hire candidates from campus and beyond.</p>
                    <button type="button" class="btn btn-primary" id="btnc">CORPORATE</button>
                     <h1>Candidate</h1>
                     <p class="slider-desc">Our vision is to ensure that every student in any corner of India gets an equal opportunity to build a career.</p>
                    <button type="button" class="btn btn-primary" id="btns">STUDENT LOGIN</button>
                     <h1>Institute</h1>
                    <button type="button" class="btn btn-primary" id="btni">INSTITUTE</button>
                  </div>
                  <!-- Slider Content End -->
               </div>
               <!-- Col End -->
            </div>
            <!-- Row ENd -->
         </div>
       </div>
    <?php
        if($slider){  
            foreach ($slider as $data):
    ?>
      <div class="slider-items">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="slider-content">
                     <h1> T&P Department <span><?=$data->Text?>.</span></h1>
                     <p class="slider-desc"><?=$data->description?>.</p>
                  </div>
                  <!-- Slider Content End -->
               </div>
               <!-- Col End -->
               <div class="col-md-6">
                  <img src="<?=base_url($data->image)?>" style="border-radius:10px;" alt="" class="img-fluid">
               </div>
            </div>
            <!-- Row ENd -->
         </div>
         <!-- Container End -->
      </div>
    <?php endforeach;  } ?>
   </div><br>
<center><a href="#"><img class="img-fluid" style="border-radius:5px;" src="<?=base_url()?>User_assets/images/slider/institute.png" alt="Image"></a></center>
   <!-- Slider Area End -->

   <section id="tw-features" class="tw-features-area">
      <div class="container">
         <div class="row text-center">
            <div class="col section-heading wow fadeInDown">
               <h2>
                  <small>Our Features</small>
                  Our Best
                  <span>Features</span>
               </h2>
            </div>
            <!-- Title Col End -->
         </div>
         <!-- Title Row End -->
         <div class="row">
            <div class="col-lg-4 col-md-12 text-md-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
               <div class="features-box">
                  <div class="features-icon d-table">
                     <div class="features-icon-inner d-table-cell">
                        <img src="<?=base_url()?>userassets/images/icon/feature1.png" alt="">
                     </div>
                     <!-- End Features icon inner -->
                  </div>
                  <!-- End Features Icon -->
                  <h3>Quality Service Provide</h3>
                  <p>Our vision is to ensure that every student in any corner of India gets an equal opportunity to build a career.</p>
                  <a href="#" class="tw-readmore">Read More
                     <i class="fa fa-angle-right"></i>
                  </a>
               </div>
               <!-- End Single Features -->
            </div>
            <!-- Col End -->
            <div class="col-lg-4 col-md-12  wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".4s">
               <div class="features-box">
                  <div class="features-icon d-table">
                     <div class="features-icon-inner d-table-cell">
                        <img src="<?=base_url()?>userassets/images/icon/feature2.png" alt="">
                     </div>
                     <!-- End Features Icon inner -->
                  </div>
                  <!-- End Features Icon -->
                  <h3>Professional Placement Platform </h3>
                  <p>We help institutes measure and improve employability of their students.</p>
                  <a href="#" class="tw-readmore">Read More
                     <i class="fa fa-angle-right"></i>
                  </a>
               </div>
               <!-- End Single Features -->
            </div>
            <!-- end col -->
            <div class="col-lg-4 col-md-12  wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".6s">
               <div class="features-box">
                  <div class="features-icon d-table">
                     <div class="features-icon-inner d-table-cell">
                        <img src="<?=base_url()?>userassets/images/icon/feature3.png" alt="">
                     </div>
                     <!-- End Features Icon inner -->
                  </div>
                  <!-- End Features Icon -->
                  <h3>More Campus Available</h3>
                  <p>We use technology to help corporate assess and hire candidates from campus and beyond.</p>
                  <a href="#" class="tw-readmore">Read More
                     <i class="fa fa-angle-right"></i>
                  </a>
               </div>
               <!-- End Single Features -->
            </div>
            <!-- End col -->
         </div>
         <!-- End Row 2 -->
      </div>
      <!-- End Container -->
   </section>
   <!-- End Features section -->

   <section id="tw-facts" class="tw-facts bg-overlay">
      <div class="container">
         <div class="row">
            <div class="col-md-3 text-center">
               <div class="tw-facts-box">
                  <div class="facts-content wow fadeInUp" data-wow-duration="1s">
                     <span class="counter">200</span>
                     <sup>+</sup>
                     <h4 class="facts-title">Active Corporates</h4>
                  </div>
                  <!-- Facts Content End -->
               </div>
               <!-- Facts Box End -->
            </div>
            <!-- Col End -->
            <div class="col-md-3 text-center">
               <div class="tw-facts-box">
                  <div class="facts-content wow slideInUp">
                     <span class="counter">30</span>
                     <sup>+</sup>
                     <h4 class="facts-title">Placements Done</h4>
                  </div>
                  <!-- End Facts Content -->
               </div>
               <!-- End Facts Box -->
            </div>
            <!-- Col End -->
            <div class="col-md-3 text-center">
               <div class="tw-facts-box">
                  <div class="facts-content wow slideInUp">
                     <span class="counter">100</span>
                     <sup>+</sup>
                     <h4 class="facts-title">Placed Students</h4>
                  </div>
                  <!-- End Facts Content -->
               </div>
               <!-- End Facts Box -->
            </div>
            <!-- Col End -->
            <div class="col-md-3 text-center">
               <div class="tw-facts-box">
                  <div class="facts-content wow slideInUp">
                     <span class="counter">500</span>
                     <sup>+</sup>
                     <h4 class="facts-title">Active Students</h4>
                  </div>
                  <!-- End Facts Content -->
               </div>
               <!-- End Facts Box -->
            </div>
            <!-- Col End -->
         </div>
         <!-- Row End -->
      </div>
      <!-- Container End -->
   </section>
   <!-- Facts End -->

   <section id="tw-intro" class="tw-intro-area">
      <div class="container">
         <div class="row">    
    <?php
    if($notice){
        foreach($notice as  $value):
        if($value->role=='home') {

               ?>
            <div class="col-lg-6 col-md-12 wow fadeInRight" data-wow-duration="1s">
               <h2 class="column-title">Latest <span>Notice</span> About T&P</h2>
               <ul class="intro-list">
                  <li><?=$value->notice_content?></li>
               </ul>
                <?php if($value->campus=='yes' || $value->campus=='Yes' || $value->campus=='YES'){?>
                    <a  class="btn btn-primary" href=<?=base_url('StdRegisterForCampus/').$value->n_id?>>Register For Campus Drive</a>
                <?php }?>
               <!-- Default Round Btn -->
               <a href="#" class="btn btn-secondary">contact us</a>
            </div>
    
            <!-- End Col -->

            <div class="col-lg-6 col-md-12 text-lg-right text-md-center wow fadeInLeft" data-wow-duration="1s">
                <div class="resp-container">
 
                    <iframe class="resp-iframe" src="<?=base_url()?><?=$value->image?>" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>

                </div>
            </div>
    <?php                                           	
        }
        endforeach;}
    ?>
            <!-- End Col -->
         </div>
         <!-- End Row -->
      </div>
      <!-- End Container -->
   </section>
   <!-- Intro section End -->

   <section id="work-process" class="work-process bg-green">
      <div class="work-bg-pattern d-none d-lg-inline-block">
         <img src="<?=base_url()?>userassets/images/process/process_arrow.png" alt="" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.2s">
      </div>
      <!-- End Work BG Pattern -->
      <div class="container">
         <div class="row text-center">
            <div class="col section-heading tw-text-white wow fadeInDown" data-wow-duration="1s">
               <h2>
                  <small>Our Policies</small>Placement <span>Policy</span></h2>
            </div>
            <!-- End Col -->
         </div>
         <!-- End Row -->
         <div class="row">
             
        <?php
            $i=1;
            if($policy){
                foreach($policy as  $value) {
            ?>
            <div class="col-md-3">
               <div class="tw-work-process">
                  <div class="process-wrapper d-table wow zoomIn" data-wow-duration="1s" data-wow-delay=".2s">
                     <div class="process-inner d-table-cell">
                        <img src="<?=base_url()?>userassets/images/icon/process<?=$i?>.png" alt="" class="img-fluid">
                        <span class="case-process-number">1</span>
                     </div>
                  </div>
                  <!-- End process wrapper -->
                   <center><p style="max-width:180px;"><?=$value->policy?></p></center>
               </div>
               <!-- End Tw work process -->
            </div>
             
        <?php $i++;}} ?>	
            <!-- End Col -->
         </div>
         <!-- End Row -->
      </div>
      <!-- End Container -->
   </section>
   <!-- End Word Process -->


   <section id="tw-testimonial" class="tw-testimonial bg-overlay">
      <div class="container">
         <div class="row">
            <div class="col text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
               <div class="section-heading">
                  <h2 class="text-white">
                     <small>Developers</small>
                     Love <span>Our Delelopers</span>
                  </h2>
               </div>
            </div>
            <!-- COl End -->
         </div>
         <!-- Row End -->
         <div class="row justify-content-center">
            <div class="col-md-10 text-center">
               <div class="testimonial-slider owl-carousel">
                  <div class="testimonial-content">
                     <div class="testimonial-text">
                        <p>Start working with an company that can do provide every thing at you need to generate awareness,
                           drive traffic, connect with customers, and increase sales nascetur ridiculus mus. </p>
                        <i class="icon icon-quote2"></i>
                     </div>
                     <!-- Testimonial text end -->
                     <div class="testimonial-image">
                        <img src="<?=base_url()?>User_assets/developers/img/heman.jpg" alt="">
                     </div>
                     <div class="testimonial-meta">
                        <h4>
                           HEMANT CHANDRA
                           <small>BE (CSE) WEB DEVELOPER</small>
                        </h4>
                     </div>
                     <!-- Testimonial Meta end -->
                  </div>
                  <div class="testimonial-content">
                     <div class="testimonial-text">
                        <p>Start working with an company that can do provide every thing at you need to generate awareness,
                           drive traffic, connect with customers, and increase sales nascetur ridiculus mus. </p>
                        <i class="icon icon-quote2"></i>
                     </div>
                     <!-- Testimonial text end -->
                     <div class="testimonial-image">
                        <img src="<?=base_url()?>User_assets/developers/img/aakruti.jpg" alt="">
                     </div>
                     <div class="testimonial-meta">
                        <h4>
                           AKRUTI NEGI
                           <small>BE (CSE) WEB DEVELOPER</small>
                        </h4>
                     </div>
                     <!-- Testimonial Meta end -->
                  </div>
               </div>
               <!-- Carousel End -->
            </div>
            <!-- COl End -->
         </div>
         <!-- Row End -->
      </div>
      <!-- Container End -->
   </section>
   <!-- Testimonial end -->

   <section id="tw-pricing" class="tw-pricing">
      <div class="container">
         <div class="row text-center">
            <div class="col section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
               <h2>
                  <small>Our Students</small>
                  Placed <span>Studets</span>
               </h2>
            </div>
            <!-- End Col -->
         </div>
         <!-- End Section Heading Row -->
         <div class="row">         
    <?php
     if($students)
     {
         $i=0;$j=4;
         $data=array('orange','yellow','green','green','orange','yellow','yellow','green','orange','green','yellow','orange');
         foreach ($students as  $value) {
            ?>
            <div class="col-lg-4 col-md-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".<?=$j?>s">
               <div class="tw-case-study-box">
                  <div class="case-img bg-<?=$data[$i]?>">
                     <img src="<?=base_url($value->image)?>" alt="" class="img-fluid">
                  </div>
                  <!-- End case img -->
                  <div class="casestudy-content">
                     <a href="#">
                        <h4><?=$value->comp_name?></h4>
                     </a>
                  </div>
                  <!-- End case study content -->
               </div>
               <!-- End case study box --><br><br>
            </div>
 
    <?php $i++;$j++;if($i=="12"){$i=1;} } } ?>  
         </div>
      </div>
      <!-- Container End -->
   </section>
   <!-- End Pricing -->

   <section id="tw-blog" class="tw-blog">
      <div class="container">
         <div class="row text-center">
            <div class="col section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
               <h2>
                  <small>Gallery</small>
                  Our Photo <span>Gallery</span>
               </h2>
            </div>
            <!-- Col end -->
         </div>
         <!-- Row End -->
         <div class="row">
    <?php
         $i=0;$j=4;
         $data=array('orange','yellow','green','green','orange','yellow','yellow','green','orange','green','yellow','orange');
        if($gallery){
            foreach($gallery as  $value) {

    ?>
            <div class="col-lg-4 col-md-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".<?=$j?>s">
               <div class="tw-case-study-box">
                  <div class="case-img bg-<?=$data[$i]?>">
                     <img src="<?=base_url($value->image)?>" alt="" class="img-fluid">
                  </div>
                  <!-- End case img -->
                  <div class="casestudy-content">
                     <a href="#">
                        <h4><?=$value->text?></h4>
                     </a>
                  </div>
                  <!-- End case study content -->
               </div>
               <!-- End case study box --><br><br>
            </div>
 
    <?php $i++;$j++;if($i=="12"){$i=1;} } } ?>  
            <div class="col-md-12 text-center tw-mt-60">
               <a href="#" class="btn btn-primary">view all</a>
            </div>
         </div>
         <!-- End Row -->
      </div>
      <!-- Container End -->
   </section>
   <!-- End tw blog -->

   <section id="tw-client" class="tw-client">
      <div class="container">
         <div class="row  wow fadeInUp">
            <div class="col-md-12">
               <div class="clients-carousel owl-carousel">
                   <?php if($company){
                        foreach($company as $row){
                    ?>
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img style="max-with:138;max-height:35;min-with:138;min-height:35;" src="<?=base_url($row->c_logo)?>" alt="Company Logo">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                   <?php } }?>
                  <!-- End Client wrapper -->
               </div>
               <!-- End Carousel -->
            </div>
            <!-- End Col -->
         </div>
         <!-- End Row -->
      </div>
      <!-- End Container -->
   </section>
   <!-- End Tw Client -->

<?php include'include/footer.php';?>

<script>
      $(document).ready(function(){$('#btns').click(function(){$('#loaddata').load("<?=base_url('UserController/login')?>")});});
      $(document).ready(function(){$('#btnc').click(function(){$('#loaddata').load("<?=base_url('UserController/corporate_login')?>")});});
      $(document).ready(function(){$('#btni').click(function(){$('#loaddata').load("<?=base_url('UserController/institute_login')?>")});});
</script>
   <!-- Javascripts File
      =============================================================================-->
<?php include'include/script.php';?>