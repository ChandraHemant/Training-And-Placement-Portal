<!DOCTYPE html>
<html lang="en">
<head>
    <title>Self Assessment Formate</title>
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
    
    <div class="limiter">
        <div class="container">
            <div class="wrap">
                <div class="login100-form-title" style="background-image: url(<?=base_url()?>User_assets/logform/images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Self Assessment Format
                    </span>
                </div>
                        <br><br>
                        <table class="table table-responsive table-vertical">
                            <tbody>
                    <?php
                        if($dbf){
                            foreach($dbf as $value1):
                            if($saf){
                                foreach($saf as $value):
                     $EMPLOYBILITY = explode("|",$value->employbility_skills);
                     $CERTIFY = explode("|",$value->crtf_ex_agency);

                     ?>
                                <tr>
                                    <td>STUDENT NAME </td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value1->d_name?></td>
                                </tr>
                                <tr>
                                    <td>GENDER</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value1->gender?></td>
                                </tr>
                                <tr>
                                    <td>PASSING OUT YEAR</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value1->pass_out_yr?></td>
                                </tr>
                                <tr>
                                    <td>SEMESTER</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value1->semester?></td>
                                </tr>
                                <tr>
                                    <td>BRANCH</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value1->branch?></td>
                                </tr>
                                <tr>
                                    <td>EMAIL ID</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value1->email_id?></td>
                                </tr>
                                <tr>
                                    <td>MOBILE NO.</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value1->mob_no?></td>
                                </tr>
                                <tr>
                                    <td>WHATSAPP NO.</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$value1->whatsapp_no?></td>
                                </tr>
                                <tr>
	                                <td>ATTENDANCE</td> 

	                                <?php if($value->attendance==2){?>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;BELOW 10%</td>
                                    <?php }elseif ($value->attendance==4) { ?>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;10% - 50%</td>
                                    <?php }elseif ($value->attendance==6) { ?>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;50% - 75%</td>
                                    <?php }else{ ?>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;ABOVE 75%</td>
                                    <?php } ?>
                                    
                                </tr>
                                
                                <tr>
                                    <th>EMPLOYBILITY SKILLS</th>
                                </tr>
                                 <tr>
                                    <td>TECHNICAL SKILL(Y/N)</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$EMPLOYBILITY['0']?></td>
                                </tr>
                                <tr>
                                    <td>QUANTITATIVE/ APTITUDE SKILLS(Y/N)</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$EMPLOYBILITY['1']?></td>
                                </tr>
                                <tr>
                                    <td>COMMUNICATION SKILL(Y/N)</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$EMPLOYBILITY['2']?></td>
                                </tr>
                                <tr>
                                    <td>PRESENTATION SKILL(Y/N)</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$EMPLOYBILITY['3']?></td>
                                </tr>
                                <tr>
                                    <td>BEHAVIOURAL/ SOFT/ HR SKILL</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$EMPLOYBILITY['4']?></td>
                                </tr>

                                <tr>
                                    <th>CAMPUS RECRUITMENT TRAINING FROM EXTERNAL AGENCIES</th>
                                </tr>
                                 <tr>
                                    <td>INTERESTED/ NOT INTERESTED</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$CERTIFY['0']?></td>
                                </tr>
                                <tr>
                                    <td>READY TO PAY FOR CAMPUS RECUITMENT TRAINING FROM EXTERNAL AGENCY(Y/N)</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$CERTIFY['1']?></td>
                                </tr>
                                
                                
                                
               <?php
               endforeach;}
               endforeach;}
               ?>  
                            </tbody>
                            
                        </table> 
                <div class="container-login100-form-btn">
                    <a href="SafView/Update">
						<button class="login100-form-btn">
							Update Your Database
						</button>
                    </a>
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

