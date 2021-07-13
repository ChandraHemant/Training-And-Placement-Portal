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
                        Career Prefrence 
                    </span>
                </div>
                        <br><br>
                        <table class="table table-responsive table-vertical">
                            <tbody>
                    <?php
                    if($cpf){
                        foreach($cpf as $data):
                    $higher=$data->higher_study;
                    $govt=$data->govt_job;
                    $loc=$data->location_for_job;
                    $indstry=$data->industry_prfrnce;
                    $datas = explode("|",$higher);
                    $dataes = explode("|",$govt);
                    $dates = explode("|",$loc);
                    $dats = explode("|",$indstry);
                    if($dbf){
                        foreach($dbf as $value):?>
                                <tr>
                                    <td>STUDENT NAME</td>
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
                                    <td>WANT JOB THROUGH TNP DEPT OF RIT</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?= $data->job_thru_tnp?></td>
                                </tr>
                                <tr>
                                    <td>FIRST AND PRIMARY REQUIRMENT JOB</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?= $data->primary_req_job?></td>
                                </tr>
                                <tr>
                                    <td>WANT TO JOIN FAMILY BUSINESS</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$data->join_fmly_bsns?></td>
                                </tr>
                                <tr>
                                    <td>WANT TO BECOME ENTREPRENEUR/SELF EMPLOYMENT</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$data->self_emplymnt?></td>
                                </tr>
                                <tr>
                                    <th>HIGHER STUDIES</th>
                                </tr>
                                <tr>
                                    <td>Preparing For Gate</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$datas['0']?></td>
                                </tr>
                                <tr>
                                    <td>Preparing For GRE</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$datas['1']?></td>
                                </tr>
                                <tr>
                                    <td>M.Tech From IIT/NIT/Any Private Institute & University (Specify)</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$datas['2']?></td>
                                </tr>
                                <tr>
                                    <td>Preparing For CAT/GMAT/MBA From Any Other Institute & University (Specify)</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$datas['3']?></td>
                                </tr>
                                <tr>
                                    <td>Preparing For Civil Services - UPSC/PSC</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$datas['4']?></td>
                                </tr>
                                
                                <tr>
                                    <th>GOVERNMENT JOBS</th>
                                </tr>
                                
                                <tr>
                                    <td>Preparing For Government Job</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$dataes['0']?></td>
                                </tr>
                                
                                <tr>
                                    <td>Want To Join Only Government Job</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$dataes['1']?></td>
                                </tr>
                                <tr>
                                    <th>LOCATION PREFERENCE FOR JOB</th>
                                </tr>
                                <tr>
                                    <td>Want To Join In Chhattisgarh Only</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$dates['0']?></td>
                                </tr>
                                <tr>
                                    <td>Ready To Move Anywhere In Country</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$dates['1']?></td>
                                </tr>
                                <tr>
                                    <th>INDUSTRY PREFERENCE</th>
                                </tr>
                                <tr>
                                    <td>Only Core</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$dats['0']?></td>
                                </tr>
                                <tr>
                                    <td>Only Software</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$dats['1']?></td>
                                </tr>
                                <tr>
                                    <td>Only Managerial jobs</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$dats['2']?></td>
                                </tr>
                                <tr>
                                    <td>First Preference Core But Open For Software & Managerial jobs</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$dats['3']?></td>
                                </tr>
                                <tr>
                                    <td>Any Other Industry Like Banking,Steel,Power Cement etc(Specify Branch wise)</td>
                                    <td>:&nbsp;&nbsp;&nbsp;&nbsp;<?=$dats['4']?></td>
                                </tr>
                               
               <?php
               endforeach;}
               endforeach;}
               ?>  
                            </tbody>
                            
                        </table> 
                <div class="container-login100-form-btn">
                    <a href="CpfView/Update">
                        <button class="login100-form-btn">
                            Update Your CPF
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