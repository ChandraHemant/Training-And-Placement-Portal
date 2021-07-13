<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Database</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?=base_url()?>User_assets/images/logoes.png"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>User_assets/logform/css/main.css">
<!--===============================================================================================-->
    <!-- ================== BEGIN EXTRA JS ================== -->
    <script type="application/javascript" src="<?= base_url()?>Adminassets/js/sweet.js"></script>
    <!-- ================== END EXTRA JS ================== -->
</head>
<body>
    
    <div class="limiter">
        <div class="container">
            <div class="wrap">
                <div class="login100-form-title" style="background-image: url(<?=base_url()?>User_assets/logform/images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Student Database 
                    </span>
                </div>
                        <br><br>
                        <table class="table table-responsive table-vertical">
                            <tbody>
                    <?php
                    if($dbf){
                        foreach($dbf as $value):
                        $mobile = $value->mob_no; ?>
                                <tr>
                                    <td>STUDENT NAME </td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->d_name?></td>
                                </tr>
                                <tr>
                                    <td>GENDER</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->gender?></td>
                                </tr>
                                <tr>
                                    <td>PASSING OUT YEAR</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->pass_out_yr?></td>
                                </tr>
                                <tr>
                                    <td>SEMESTER</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->semester?></td>
                                </tr>
                                <tr>
                                    <td>BRANCH</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->branch?></td>
                                </tr>
                                <tr>
                                    <td>EMAIL ID</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->email_id?></td>
                                </tr>
                                <tr>
                                    <td>MOBILE NO.</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->mob_no?></td>
                                </tr>
                                <tr>
                                    <td>WHATSAPP NO.</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->whatsapp_no?></td>
                                </tr>
                                <tr>
                                    <td>10TH%</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?= $value->X_per?></td>
                                </tr>
                                <tr>
                                    <td>12TH%</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?= $value->XII_per?></td>
                                </tr>
                                <tr>
                                    <td>SEM-1%</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->I_sem_per?></td>
                                </tr>
                                <tr>
                                    <td>SEM-2%</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->II_sem_per?></td>
                                </tr>
                                <tr>
                                    <td>SEM-3%</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->III_sem_per?></td>
                                </tr>
                                
                                <tr>
                                    <td>SEM-4%</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->IV_sem_per?></td>
                                </tr>
                                <tr>
                                    <td>SEM-5%</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->V_sem_per?></td>
                                </tr>
                                <tr>
                                    <td>SEM-6%</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->VI_sem_per?></td>
                                </tr>
                                <tr>
                                    <td>SEM-7%</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->VII_sem_per?></td>
                                </tr>
                                <tr>
                                    <td>SEM-8%</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->VIII_sem_per?></td>
                                </tr>
                                <tr>
                                    <td>OVERALL % TILL 6TH SEM</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->overall_per?></td>
                                </tr>
                                <tr>
                                    <td>LIVE BACKLOGS</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->live_backlogs?></td>
                                </tr>
                                <tr>
                                    <td>DETAINS</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value->detains?></td>
                                </tr>
                                <tr>
                                    <td>DIPLOMA %</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?= $value->diploma_per?></td>
                                </tr>
                                <tr>
                                    <td>ROLL NO.</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?= $value->roll_no?></td>
                                </tr>
                                <tr>
                                    <td>ENROLLMENT NO.</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?= $value->enroll_no?></td>
                                </tr>
                                
               <?php
               endforeach;}
               ?>  
                            </tbody>
                            
                        </table> 
                <div class="container-login100-form-btn">
                    <a href="<?=base_url('DbfView/Update')?>">
						<button class="login100-form-btn">
							Update Your Profile
						</button>
                    </a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php if($mobile!=""){?>
                        <a href="<?=base_url('ResumeView')?>">
    						<button class="login100-form-btn">
    							Generate Resume
    						</button>
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <?php

if($this->session->flashdata('item')){
    $item=$this->session->flashdata('item');
    if($item == "yes"){ ?>
         <script> swal("Successfully Logged In!!!", "Now the Manage Your Profile", "success");</script>
    <?php }else if ($item == "no"){ ?>
        <script>swal("opps something went wrong!!!", "Please try again...", "error");</script>
   <?php     
    }else if ($item == "uppass"){ ?>
        <script>swal("Successfully Logged In!!!", "Now The Update Your Password", "success");</script>
   <?php     
    }else if ($item == "logout"){ ?>
        <script>swal("Successfully Logged Out!!!", "Thank you...!", "success");</script>
   <?php     
    }else if ($item == "errpass"){ ?>
        <script>swal("opps password is wrong!!!", "Please try again...", "error");</script>
   <?php     
    }else if ($item == "errusr"){ ?>
        <script>swal("opps Username is wrong!!!", "Please try again...", "error");</script>
   <?php     
    }
}

?>
<!--===============================================================================================-->
    <script src="<?=base_url()?>User_assets/logform/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?=base_url()?>User_assets/logform/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="<?=base_url()?>User_assets/logform/vendor/bootstrap/js/popper.js"></script>
    <script src="<?=base_url()?>User_assets/logform/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?=base_url()?>User_assets/logform/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?=base_url()?>User_assets/logform/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?=base_url()?>User_assets/logform/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="<?=base_url()?>User_assets/logform/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="<?=base_url()?>User_assets/logform/js/main.js"></script>

</body>
</html>