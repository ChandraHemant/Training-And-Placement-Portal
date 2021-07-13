<?php
    @ob_start;
    $uid=$this->session->userdata('uid');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylsheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
<!--===============================================================================================-->	
	    <link rel="icon" href="<?=base_url()?>userassets/images/logoes.png"> 
<!--===============================================================================================-->

<style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
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
            background: #1ABB9C; 
        }
</style>
</head>

<body>
   <div class="search-bar">
      <i class="fa fa-close"></i>
      <form class="search-bar-fixed" action="#">
         <input type="text" placeholder="search...">
         <button type="submit"><i class="icon icon-search"></i></button>
      </form>
   </div>
   <!--End Search bar -->

   <div class="tw-top-bar bg-green">
      <div class="container">
         <div class="row">
            <div class="col-md-8 text-left">
               <div class="top-contact-info">
                  <span> <i class="icon icon-map-marker2"></i> Training & Placement Cell</span>
                  <span> <i class="icon icon-envelope"></i> info@tnprit.in</span>
                  <span><i class="icon icon-phone3"></i>  (+91) 93297 73028 | (+91) 93297 73026</span>
               </div>
            </div>
            <!-- Col End -->
            <div class="col-md-4 ml-auto text-right">
               <div class="top-social-links">
                  <span>Follow us:</span>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
               </div>
            </div>
            <!-- Col End -->
         </div>
         <!-- Row End -->
      </div>
      <!-- Container End -->
   </div>
   <!-- Top Bar end -->

   <!-- header======================-->
   <header>
      <div class="tw-head">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
               <a class="navbar-brand tw-nav-brand" href="index-2.html">
                  <img src="<?=base_url()?>userassets/images/logo.png" style="max-width:180px; border-radius:5px" alt="T&P">
               </a>
               <!-- End of Navbar Brand -->
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <!-- End of Navbar toggler -->
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                   <ul class="navbar-nav">

                        <li class="nav-item <?php if(in_array($this->router->fetch_method(),array('homeportal')) ){echo 'active'; } ?>"><a class="nav-link" href="<?=base_url()?>"><i class="fa fa-home"></i>&nbsp;Home</a>
                        </li>


                        <?php
                         if(!isset($uid))	{
                            ?>
                            <li class="nav-item <?php if(in_array($this->router->fetch_method(),array('crf')) ){echo 'active'; } ?>"><a class="nav-link" href="<?=base_url('Crf')?>"><i class="fa fa-building-o"></i>&nbsp;Corporate</a></li>
                        <?php
                         }
                         ?>

                        <li class="nav-item <?php if(in_array($this->router->fetch_method(),array('notice','student_register')) ){echo 'active'; } ?>"><a class="nav-link" href="<?=base_url('Notice')?>"><i class="fa fa-book"></i>&nbsp;Notice</a></li>

                        <li class="nav-item <?php if(in_array($this->router->fetch_method(),array('tnp_team')) ){echo 'active'; } ?>"><a class="nav-link" href="<?=base_url('TnpTeams')?>"><i class="fa fa-users"></i>&nbsp;TNP Team</a></li>

                        <?php
                         if(isset($uid))	{
                            ?>
                        <li class="nav-item dropdown <?php if(in_array($this->router->fetch_method(),array('dbf','cpf','saf')) ){echo 'active'; } ?>">
                            <a class="nav-link" href="#" data-toggle="dropdown">
                               <i class="fa fa-graduation-cap"></i>&nbsp;Students
                               <span class="tw-indicator"><i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu tw-dropdown-menu">

                                    <li class="<?php if(in_array($this->router->fetch_method(),array('dbf')) ){echo 'active'; } ?>"><a href="<?=base_url('Dbf')?>">Profile</a></li>

                                    <li class="<?php if(in_array($this->router->fetch_method(),array('cpf')) ){echo 'active'; } ?>"><a href="<?=base_url('Cpf')?>">Career Preference Format</a></li>

                                    <li class="<?php if(in_array($this->router->fetch_method(),array('saf')) ){echo 'active'; } ?>"><a href="<?=base_url('Saf')?>">Self Assessment Form (SAF)</a></li>
                            </ul>
                            <!-- End of Dropdown menu -->
                         </li>

                        <?php } else{?>

                            <li class="nav-item <?php if(in_array($this->router->fetch_method(),array('resume_form')) ){echo 'active'; } ?>"><a class="nav-link" href="<?=base_url('Resume')?>"><i class="fa fa-graduation-cap"></i>&nbsp;Generate Resume</a></li>

                        <?php }
                         if(isset($uid)){
                        ?>
                            <li class="nav-item <?php if(in_array($this->router->fetch_method(),array('std_login')) ){echo 'active'; } ?>"><a class="nav-link" href="<?=base_url('Logout')?>"><i class="fa fa-sign-out"></i>&nbsp;Sign Out</a></li>
                        <?php
                             }
                         else{
                        ?>
                            <li class="nav-item <?php if(in_array($this->router->fetch_method(),array('std_login')) ){echo 'active'; } ?>"><a class="nav-link" href="<?=base_url('login')?>"><i class="fa fa-sign-in"></i>&nbsp;Sign In</a></li>
                        <?php
                             }
                            ?>
                    </ul>
                  <!-- End Navbar Nav -->
                  <div class="tw-off-search d-none d-lg-inline-block">
                     <div class="tw-search">
                        <i class="icon icon-search"></i>
                     </div>
                  </div>
                  <!-- End off canvas menu -->
               </div>
               <!-- End of navbar collapse -->
            </nav>
            <!-- End of Nav -->
         </div>
         <!-- End of Container -->
      </div>
      <!-- End tw head -->
   </header>
   <!-- End of Header area -->
