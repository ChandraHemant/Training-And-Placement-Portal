<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ResumeView</title>

    <link href="<?=base_url()?>Adminassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>Adminassets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/style.css" rel="stylesheet">

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

    <div id="wrapper">
        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Resume View</h2>
                </div>
            <div class="col-lg-4">
                    <div class="title-action">
                        <div>
                            <?php $id =$this->session->userdata('uid');
                                if($this->session->userdata('uid')){?>
                                <a class="btn btn-warning" style="margin-left:0px;" class="text-left" href="<?=base_url('ResumeFormView/Updates/'.$id)?>"><i class="fa fa-edit"></i> Update Resume</a>
                            <?php }else{?>
                            
                                <a class="btn btn-warning" style="margin-left:0px;" class="text-left" href="<?=base_url('ResumeFormView/Update')?>"><i class="fa fa-edit"></i> Update Resume</a>
                            <?php }?>
                            
                            <button class="btn btn-primary" class="text-right" onclick="printDiv('printpage')"><i class="fa fa-print"></i> Print Resume</button>
                        
                        </div>

                    </div>
                </div>
               
            </div>
        <div class="row" id="printpage">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="ibox-content p-xl">
                    <?php 
                        if($dbf){
                                foreach($dbf as $std){
                                    $did=$std->d_id;
                                    $name=$std->d_name;
                                    $gender=$std->gender;
                                    $mob=$std->mob_no;
                                    $email=$std->email_id;
                                    $x_per=$std->X_per;
                                    $xii_per=$std->XII_per;
                                    $i_per=$std->I_sem_per;
                                    $ii_per=$std->II_sem_per;
                                    $iii_per=$std->III_sem_per;
                                    $iv_per=$std->IV_sem_per;
                                    $v_per=$std->V_sem_per;
                                    $vi_per=$std->VI_sem_per;
                                    $vii_per=$std->VII_sem_per;
                                    $viii_per=$std->VIII_sem_per;
                                }
                            }
                        if($resume || $dbf){
                            foreach($resume as $value):
                            $career=explode("|",$value->career_obj);
                            $course=explode("|",$value->course);
                            $university=explode("|",$value->university_board);
                            $school=explode("|",$value->school_college);
                            $pass=explode("|",$value->pass_out_yr);
                            $percent=explode("|",$value->percentage_cgpa);
                            $skill=explode("|",$value->skill_dvlpmnt_prgm);
                            $vocational=explode("|",$value->voc_train_prgm);
                            $project=explode("|",$value->ug_lvl_project);
                            $computer=explode("|",$value->computer_proficiency);
                            $interest=explode("|",$value->area_of_interest);
                            $awards=explode("|",$value->awards_honours);
                            $training=explode("|",$value->training_certifications);
                            $hobby=explode("|",$value->hobbies);
                            $reference=explode("|",$value->references);
                            
                            ?>
                        <div class="row">
                                <div class="col-sm-8 text-center">
                                    <h2><strong>CURRICULUM VITAE</strong></h2>
                                </div>
                                <div class="col-sm-4" style="float:right;">
                                    <img class="img-responsive" style="max-width:100px;max-height:70px;" src="<?=base_url($value->pic)?>" alt="Image">
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-4" style="float:left;margin-top:-19px">
                                    <h4>Name:</h4>
                                    <h4>Email:</h4>
                                    <h4>Mobile:</h4>
                                    <h4>Present Address:</h4><br>
                                    <h4>Permanent Address: </h4>

                                </div>

                                <div class="col-sm-6 text-right" style="margin-top:-19px">
                                <?php if($dbf){ 
                                    
                                    if($value->d_id==$did){?>
                                    
                                        <h4 class="text-left"><?=$name?></h4>
                                        <h4 class="text-left"><?=$email?></h4>
                                        <h4 class="text-left"><?=$mob?></h4>
                                    
                                       <?php } }if($value->s_id==$this->session->userdata('sid')){?>
                                            <h4 class="text-left"><?=$value->s_name?></h4>
                                            <h4 class="text-left"><?=$value->email_id?></h4>
                                            <h4 class="text-left"><?=$value->mob_no?></h4>
                                <?php }?>
  
                                            <h4 class="text-left"><?=$value->present_addr?></h4>
                                            <h4 class="text-left" style="margin-top:20px;"> <?=$value->permanent_addr?></h4>
                                </div>
                                
                            </div>
                        <hr>
                        <?php if($career['0']!=""){?>
                            <img class="img-responsive" style="max-width:100%;max-height:100px;" src="<?=base_url()?>Adminassets/bg1.PNG" alt="Image">
                            <h4 style="margin-top:-19px; margin-left:10px;"> Career Objective:</h4>
                        <?php } ?>

                <?php 
                        $j=sizeof($career);
                        $i=0;
                    for($i;$i<$j;$i++)
                    { 
                        if($career[$i]!=""){
                ?>
                        
                        <li><?=$career[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        
                        <hr>
                        <img class="img-responsive" style="max-width:100%;max-height:100px;" src="<?=base_url()?>Adminassets/bg1.PNG" alt="Image">
                        <h4 style="margin-top:-19px; margin-left:10px;"> Academic Background:</h4>
                        
                            <div class="table-responsive m-t">
                            <div class="col-md-12">
                                <table class="table table-sm table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                Course
                                            </th>
                                            <th>
                                                University/Board
                                            </th>
                                            <th>
                                                School/College
                                            </th>
                                            <th>
                                                Year Of Passing
                                            </th>
                                            <th>
                                                Percentage/CGPA
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                               <?=$course['0']?>
                                            </td>
                                            <td>
                                                <?=$university['0']?>
                                            </td>
                                            <td>
                                                <?=$school['0']?>
                                            </td>
                                            <td>
                                                <?=$pass['0']?>
                                            </td>
                                            <td>
                                    <?php
                                        if($value->s_id==$this->session->userdata('sid')){
                                            $j=sizeof($percent);
                                            $i=2;
                                            $k=1;
                                            for($i;$i<$j;$i++)
                                            {
                                        ?>
                                                        
                                            <?=$k?> Sem: <?=$percent[$i]?> <br>
                                                
                                    <?php $k++;
                                        } $i=0;
                                    } 
                                            if($dbf){
                                                if($value->d_id==$did){?>
                                                1st Sem: <?=$i_per?> <br>
                                                2nd Sem: <?=$ii_per?> <br>
                                                3rd Sem: <?=$iii_per?> <br>
                                                4th Sem: <?=$iv_per?> <br>
                                                5th Sem: <?=$v_per?> <br>
                                                6th Sem: <?=$vi_per?> <br>
                                                7th Sem: <?=$vii_per?> <br>
                                                8th Sem: <?=$viii_per?> <br>
                                    <?php }
                                        }
                                    ?>
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <?=$course['1']?>
                                            </td>
                                            <td>
                                                <?=$university['1']?>
                                            </td>
                                            <td>
                                                <?=$school['1']?>
                                            </td>
                                            <td>
                                                <?=$pass['1']?>
                                            </td>
                                            <td>
                                        <?php
                                                if($value->s_id==$this->session->userdata('sid')){?>
                                                <?=$percent['0']?>%
                                        <?php } 
                                            if($dbf){
                                                if($value->d_id==$did){?>
                                                <?=$xii_per?>%
                                        <?php }
                                            }?>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                               <?=$course['2']?>
                                            </td>
                                            <td>
                                               <?=$university['2']?>
                                            </td>
                                            <td>
                                                
                                               <?=$school['2']?>
                                            </td>
                                            <td>
                                                
                                               <?=$pass['2']?>
                                            </td>
                                            <td>
                                        <?php 
                                                if($value->s_id==$this->session->userdata('sid')){?>
                                                <?=$percent['1']?>%
                                        <?php } 
                                            if($dbf){
                                                if($value->d_id==$did){?>
                                                <?=$x_per?>%
                                        <?php }
                                            }?>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <hr>
                        <?php if($skill['0']!=""){?>
                            <img class="img-responsive" style="max-width:100%;max-height:100px;" src="<?=base_url()?>Adminassets/bg1.PNG" alt="Image">
                            <h4 style="margin-top:-19px; margin-left:10px;"> Skill Development Program:</h4>
                        <?php }
                            
                        $j=sizeof($skill);
                        $i=0;
                            for($i;$i<$j;$i++)
                            {
                                if($skill[$i]!=""){
                        ?>

                                <li><?=$skill[$i]?></li>

                         <?php }
                            } $i=0;
                         ?>
                        <hr>

                        <?php if($vocational['0']!=""){?>
                            <img class="img-responsive" style="max-width:100%;max-height:100px;" src="<?=base_url()?>Adminassets/bg1.PNG" alt="Image">
                            <h4 style="margin-top:-19px; margin-left:10px;"> Internship/Vocational Training Program:</h4>
                        <?php }

                                $j=sizeof($vocational);
                                $i=0;
                            for($i;$i<$j;$i++)
                            {
                                 if($vocational[$i]!=""){
                        ?>

                                <li><?=$vocational[$i]?></li>

                         <?php }
                            } $i=0;
                         ?>
                        <hr>
                <?php if($project['0']!=""){?>
                    <img class="img-responsive" style="max-width:100%;max-height:100px;" src="<?=base_url()?>Adminassets/bg1.PNG" alt="Image">
                    <h4 style="margin-top:-19px; margin-left:10px;">UG Level Project Work:</h4>

                <?php }
                        $j=sizeof($project);
                        $i=0;
                    for($i;$i<$j;$i++)
                    {
                         if($project[$i]!=""){
                ?>
                        
                        <li><?=$project[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        <hr>
                        
                <?php if($computer['0']!=""){?>
                        <img class="img-responsive" style="max-width:100%;max-height:100px;" src="<?=base_url()?>Adminassets/bg1.PNG" alt="Image">
                        <h4 style="margin-top:-19px; margin-left:10px;">Computer Proficiency:</h4>

                <?php }
                        $j=sizeof($computer);
                        $i=0;
                    for($i;$i<$j;$i++)
                    {
                         if($computer[$i]!=""){
                ?>
                        
                        <li><?=$computer[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        <hr>
                <?php if($interest['0']!=""){?>
                        <img class="img-responsive" style="max-width:100%;max-height:100px;" src="<?=base_url()?>Adminassets/bg1.PNG" alt="Image">
                        <h4 style="margin-top:-19px; margin-left:10px;">Areas of Interest:</h4>

                <?php }
                        $j=sizeof($interest);
                        $i=0;
                    for($i;$i<$j;$i++)
                    {
                         if($interest[$i]!=""){
                ?>
                        
                        <li><?=$interest[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        <hr>
                <?php if($awards['0']!=""){?>
                        <img class="img-responsive" style="max-width:100%;max-height:100px;" src="<?=base_url()?>Adminassets/bg1.PNG" alt="Image">
                        <h4 style="margin-top:-19px; margin-left:10px;">Awards & Honors:</h4>

                <?php }
                        $j=sizeof($awards);
                        $i=0;
                    for($i;$i<$j;$i++)
                    {
                         if($awards[$i]!=""){
                ?>
                        
                        <li><?=$awards[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        <hr>
                <?php if($training['0']!=""){?>
                        <img class="img-responsive" style="max-width:100%;max-height:100px;" src="<?=base_url()?>Adminassets/bg1.PNG" alt="Image">
                        <h4 style="margin-top:-19px; margin-left:10px;">Training and Certifications:</h4>

                <?php }
                        $j=sizeof($training);
                        $i=0;
                    for($i;$i<$j;$i++)
                    {
                         if($training[$i]!=""){
                ?>
                        
                        <li><?=$training[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        <hr>
                        <img class="img-responsive" style="max-width:100%;max-height:100px;" src="<?=base_url()?>Adminassets/bg1.PNG" alt="Image">
                        <h4 style="margin-top:-19px; margin-left:10px;">Languages known:</h4>

                        <li> <?=$value->language_known?></li>
                        
                        <hr>
                <?php if($hobby['0']!=""){?>
                        <img class="img-responsive" style="max-width:100%;max-height:100px;" src="<?=base_url()?>Adminassets/bg1.PNG" alt="Image">
                        <h4 style="margin-top:-19px; margin-left:10px;">Hobbies and Interests:</h4>

                <?php }
                        $j=sizeof($hobby);
                        $i=0;
                    for($i;$i<$j;$i++)
                    {
                         if($hobby[$i]!=""){
                ?>
                        
                        <li><?=$hobby[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        <hr>
                        <img class="img-responsive" style="max-width:100%;max-height:100px;" src="<?=base_url()?>Adminassets/bg1.PNG" alt="Image">
                        <h4 style="margin-top:-19px; margin-left:10px;">Personal Details:</h4>
                        <div class="row">
                                <div class="col-sm-4" style="float:left; margin-left:20px;">
                                    <p>DOB :</p>
                                    <p>Gender:</p>
                                    <p>Marital:</p>
                                    <p>Nationality:</p>

                                </div>

                                <div class="col-sm-6 text-right">
                                    <p class="text-left"> <?=$value->dob?></p>
                                    <p class="text-left"> <?=$value->gender?></p>
                                    <p class="text-left"> <?=$value->marital?></p>
                                    <p class="text-left"> <?=$value->nationality?></p>
                                   
                                </div>
                                
                            </div>
                        <hr>
                <?php if($reference['0']!=""){?>
                        <img class="img-responsive" style="max-width:100%;max-height:100px;" src="<?=base_url()?>Adminassets/bg1.PNG" alt="Image">
                        <h4 style="margin-top:-19px; margin-left:10px;">References:</h4>

        
                <?php }
                        $j=sizeof($reference);
                        $i=0;
                    for($i;$i<$j;$i++)
                    {
                         if($reference['0']!=""){
                ?>
                        
                        <li><?=$reference[$i]?></li>
                        
                 <?php }
                    } $i=0;
                 ?>
                        
                        <br>
                        
                       I hereby declare that the above information given is true to the best of my knowledge.
                        <br><br>
                        <div class="row">
                                <div class="col-sm-4" style="float:left; margin-left:20px;">
                                    <p>Date : <?=date('d-m-Y')?></p>
                                    <p>Place:</p>

                                </div>

                                <div class="col-sm-6 text-right">
                                    <h4></h4><br>
                                    <h4>(<?=$value->s_name?>)</h4>
                                   
                                </div>
                                
                            </div>
                        <?php endforeach;}?>
                    </div>
                </div>
            </div>

        </div>
	<?php

if($this->session->flashdata('item')){
    $item=$this->session->flashdata('item');
    if($item == "yes"){ ?>
         <script> swal("Successfully Registered!!!", "Thank You", "success");</script>
    <?php }else if ($item == "no"){ ?>
        <script>swal("oops something went wrong!!!", "Please try again...", "error");</script>
   <?php     
    }else if ($item == "uppass"){ ?>
        <script>swal("Successfully Logged In!!!", "Now The Update Your Password", "success");</script>
   <?php     
    }else if ($item == "logout"){ ?>
        <script>swal("Successfully Logged Out!!!", "Thank you...!", "success");</script>
   <?php     
    }else if ($item == "errpass"){ ?>
        <script>swal("oops password is wrong!!!", "Please try again...", "error");</script>
    <?php     
    }else if ($item == "already"){ ?>
        <script>swal("oops user already registerd!!!", "Please try again next time...", "error");</script>
   <?php     
    }else if ($item == "errusr"){ ?>
        <script>swal("oops Username is wrong!!!", "Please try again...", "error");</script>
   <?php     
    }else if ($item == "update"){ ?>
        <script>swal("Successfully Updated!!!", "Thank you...!", "success");</script>
   <?php     
    }
}

?>
    <!-- Mainly scripts -->
    <script src="<?=base_url()?>Adminassets/js/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url()?>Adminassets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url()?>Adminassets/js/inspinia.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/pace/pace.min.js"></script>
    
        <!-- Page-Level Scripts -->
    <script>
        function printDiv(printpage){
            var printContents = document.getElementById(printpage).innerHTML;
            var originalContents = document.body.innerHTML;
            
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>


</body>
</html>
