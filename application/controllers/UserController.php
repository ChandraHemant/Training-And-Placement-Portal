<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	
    
         public function code() 
         {

            $this->load->view('user/code');

        }		
    
         public function codes() 
         {

            $this->load->view('users/index');

        }	
    
         public function user_logout() 
         {

            $this->session->unset_userdata('uid');
            $this->session->sess_destroy();

            $this->session->set_flashdata('item','logout');

                redirect(base_url('Home'));

        }

        
    
       public function StdReg_Submit()
       {
           $id = $this->session->userdata('uid');
            $eroll=$this->input->post('eroll');
            $rollno=$this->input->post('rollno');
            $name=$this->input->post('name');
            $ret=$this->UserModel->srf_fetch_model($id);
            foreach($ret as $value){
                $roll=$value->rollno;
                $enroll=$value->eroll;
            }
            if($rollno==$roll || $eroll==$enroll){
                
                $this->session->set_flashdata('item','already');
                redirect(base_url('StudentRegisterView'));
            }
            else{
                
                 if($res=$this->UserModel->StdReg_Submit_model($eroll,$rollno,$name,$id))
                 {
                     //echo "ho gya";
                    $this->session->set_flashdata('item','yes');
                    redirect(base_url('StudentRegisterView'));
                 }
                 else
                 {
                     //echo "nhi hua ";
                    $this->session->set_flashdata('item','no');
                    redirect(base_url('StudentRegisterView'));
                 }
            }
            
       }
    
    // fot other clg student
        public function StdRegView_Sub()
       {
            $id=$this->session->userdata('uid');
            $eroll=$this->input->post('eroll');
            $rollno=$this->input->post('rollno');
            $name=$this->input->post('name');
            $clg=$this->input->post('collname');
             $mob=$this->input->post('mobile');
             $wp=$this->input->post('wp');
             $email=$this->input->post('email');
            $branch=$this->input->post('branch');
            $X_per=$this->input->post('X_per');
            $XII_per=$this->input->post('XII_per');
            $I_sem_per=$this->input->post('Isem_per');
            $II_sem_per=$this->input->post('IIsem_per');
            $III_sem_per=$this->input->post('IIIsem_per');
            $IV_sem_per=$this->input->post('IVsem_per');
            $V_sem_per=$this->input->post('Vsem_per');
            $VI_sem_per=$this->input->post('VIsem_per');
            $VII_sem_per=$this->input->post('VIIsem_per');
            $VIII_sem_per=$this->input->post('VIIIsem_per');
            $overall_per=$this->input->post('overall_per');
            $pass_yr=$this->input->post('passout_yr');
            $live_back=$this->input->post('backlogs');
            $work=$this->input->post('work');
           
//            echo $name,$rollno;exit();
            
              $data =  array('name'=>$name,'passout_yr'=>$pass_yr,'branch'=>$branch,'email'=>$email,
                             'mobile'=>$mob,'wp'=>$wp,'X_per'=>$X_per,
                             'XII_per'=>$XII_per,'Isem_per'=>$I_sem_per,'IIsem_per'=>$II_sem_per,
                           'IIIsem_per'=>$III_sem_per,'IVsem_per'=>$IV_sem_per,
                           'Vsem_per'=>$V_sem_per,'VIsem_per'=>$VI_sem_per,
                            'VIIsem_per'=>$VII_sem_per,'VIIIsem_per'=>$VIII_sem_per,
                             'overall_per'=>$overall_per, 'backlogs'=>$live_back,
                            'work'=>$work,'collname'=>$clg,
                            'rollno'=>$rollno,'eroll'=>$eroll);

            $ret=$this->UserModel->srf_fetch_model($id);
            foreach($ret as $value){
                $roll=$value->rollno;
                $enroll=$value->eroll;
            }
            if($rollno==$roll || $eroll==$enroll){
                
                $this->session->set_flashdata('item','already');
                redirect(base_url('StudentRegisterView'));
            }
            else{
                
                 if($res=$this->UserModel->StdReg_Sub_model($data))
                 {
                     //echo "ho gya";
                    $this->session->set_flashdata('item','yes');
                    redirect(base_url('StudentRegisterView'));
                 }
                 else
                 {
                     //echo "nhi hua ";
                    $this->session->set_flashdata('item','no');
                    redirect(base_url('StudentRegisterView'));
                 }
            }
            
       }
    
    
        
        public function login()
        {
            $this->load->view('user/std_login');
        }
    
        
        public function corporate_login()
        {
            $this->load->view('user/crf_db_login');
        }
    
        
        public function institute_login()
        {
            $this->load->view('user/ins_login');
        }
    
        public function updatepass()
        {
             $rollno=$this->uri->segment(2);
            $data['update']= $this->UserModel->pass_edit_model($rollno);  
            $this->load->view('user/updatepass',$data);
        }
    
    
         public function update_submit()
         {
             $d_id=$this->input->post('id');
             $pass=base64_encode($this->input->post('pass'));
            
             $get=$this->UserModel->student_model($d_id);
             $ret=$this->UserModel->edit_submit_model($d_id,$pass);
            
             if($ret>0)
            {
                foreach($get as $value)
                {
                    $this->session->set_userdata('uid',$value->d_id);
                    $this->session->set_userdata('uname',$value->d_name);
                    $this->session->set_userdata('email',$value->email_id);
                    $this->session->set_userdata('mobile',$value->mob_no);
                    $this->session->set_userdata('user_logged',TRUE);
                    
                }
                 
                $this->session->set_flashdata('item','logged');
                  
                redirect(base_url('Home'));
            }
            else
            {
                $this->session->set_flashdata('item','no');
                redirect(base_url('updatepass/').$pass);
            }
        }
    
       public function resume_login_submit()
             {             
                $dob=$this->input->post('dob');
                $mobile=$this->input->post('mobile');
                $email=$this->input->post('email');
                $data = array('dob'=>$dob,'mob_no'=>$mobile,'email_id'=>$email);
                 if($ret=$this->UserModel->resume_login_submit_model($data))
                 {
                    foreach($ret as $value)
                    {
                        $this->session->set_userdata('sid',$value->s_id);
                        $this->session->set_userdata('user_logged',TRUE);

                    }

                    $this->session->set_flashdata('item','logged');

                    redirect(base_url('ResumeView'));
                }
                else
                {
                    $this->session->set_flashdata('item','no');
                    redirect(base_url('ResumeForm/Login'));
                }
            }

        public function login_submit()
        {
            $s1=$this->input->post('username');
            $s2=$this->input->post('pass');
            $datas=explode('@',$s1);
            $pwd = base64_encode($s2);
            if($datas[1]=='csvtu.ac.in' or $datas[1]=='CSVTU.AC.IN') {
                if ($ret['user'] = $this->UserModel->else_login_model($datas[0], $pwd)) {
                    foreach ($ret['user'] as $value) {
                        $email = $value->email_id;
                        $mobi = $value->mob_no;
                        $uname = $value->d_name;
                        $uid = $value->d_id;
                    }
                    $this->session->set_userdata('uid', $uid);
                    $this->session->set_userdata('uname', $uname);
                    $this->session->set_userdata('email', $email);
                    $this->session->set_userdata('mobile', $mobi);
                    $this->session->set_userdata('user_logged', TRUE);
                    $this->session->set_flashdata('item', 'logged');
                    redirect(base_url('Home'));
                }
                else if ($ret = $this->UserModel->login_model($datas[0], $s2)) {
                    foreach($ret as $value){
                        $pass = $value->password;
                    }
                    if($pass!=""){
                        $this->session->set_flashdata('item', 'errpass');
                        redirect(base_url('login'));
                    }
                    $this->session->set_flashdata('item', 'uppass');
                    redirect(base_url('updatepass/') . $s2);
                } 
                else if($ret = $this->UserModel->user_check_for_login_model($datas[0])){
                    $this->session->set_flashdata('item', 'errpass');
                    redirect(base_url('login'));
                }
                else {
                    $this->session->set_flashdata('item', 'erruser');
                    redirect(base_url('login'));
                }
            }
        }
        public function index()
        {
            $this->load->view('user/index');
        }

    
        public function privacy_page()
        {
            $this->load->view('user/privacy');
        }
    

    
        public function condition_page()
        {
            $this->load->view('user/terms');
        }
    

    
        public function home()
        {
            $this->load->view('user/home');
        }
    
        public function homeportal()
        {
             
            $data['slider']=$this->UserModel->slider_ret_model();             
            $data['gallery']=$this->UserModel->gallery_ret_model();
            $data['tnpteam']=$this->UserModel->tnp_team_model();
            $data['policy']=$this->UserModel->policy_model();
            $data['notice']=$this->UserModel->notice_model();
            $data['news']=$this->UserModel->news_model();
            $data['company']=$this->UserModel->company_model();
            $data['students']=$this->UserModel->students_ret_model();
            $this->load->view('user/homeportal',$data);
            


        }

        public function demo()
        {
            $data['slider']=$this->UserModel->slider_ret_model();             
            $data['gallery']=$this->UserModel->gallery_ret_model();
            $data['tnpteam']=$this->UserModel->tnp_team_model();
            $data['policy']=$this->UserModel->policy_model();
            $data['notice']=$this->UserModel->notice_model();
            $data['news']=$this->UserModel->news_model();
            $data['students']=$this->UserModel->students_ret_model();
            $this->load->view('user/demo',$data);
        }
        
        public function cpf()
        { 
            if($this->session->userdata('uname')){              
                $data['slider']=$this->UserModel->slider_ret_model();             
                $data['gallery']=$this->UserModel->gallery_ret_model();
                $data['tnpteam']=$this->UserModel->tnp_team_model();
                $data['policy']=$this->UserModel->policy_model();
                $data['notice']=$this->UserModel->notice_model();
                $data['news']=$this->UserModel->news_model();
                $data['students']=$this->UserModel->students_ret_model();
                $this->load->view('user/cpf',$data);                
             }
             else{                 
                 redirect(base_url('login'));                 
             }
        }
         public function crf()
        {            
                $data['slider']=$this->UserModel->slider_ret_model();             
                $data['gallery']=$this->UserModel->gallery_ret_model();
                $data['tnpteam']=$this->UserModel->tnp_team_model();
                $data['policy']=$this->UserModel->policy_model();
                $data['notice']=$this->UserModel->notice_model();
                $data['news']=$this->UserModel->news_model();
                $data['students']=$this->UserModel->students_ret_model();
                $this->load->view('user/crf',$data);                
            
        }
    
         public function student_register()
        {            
                $data['slider']=$this->UserModel->slider_ret_model();             
                $data['gallery']=$this->UserModel->gallery_ret_model();
                $data['tnpteam']=$this->UserModel->tnp_team_model();
                $data['policy']=$this->UserModel->policy_model();
                $data['notice']=$this->UserModel->notice_model();
                $data['news']=$this->UserModel->news_model();
                $data['students']=$this->UserModel->students_ret_model();
             
                $this->load->view('user/student_register',$data);     
         }
        
        public function notice()
        {
            $data['slider']=$this->UserModel->slider_ret_model();             
            $data['gallery']=$this->UserModel->gallery_ret_model();
            $data['tnpteam']=$this->UserModel->tnp_team_model();
            $data['policy']=$this->UserModel->policy_model();
            $data['notice']=$this->UserModel->notice_model();
            $data['news']=$this->UserModel->news_model();
            $data['students']=$this->UserModel->students_ret_model();
            $this->load->view('user/notice',$data);
        }
        
        public function policy()
        {
            $data['slider']=$this->UserModel->slider_ret_model();             
            $data['gallery']=$this->UserModel->gallery_ret_model();
            $data['tnpteam']=$this->UserModel->tnp_team_model();
            $data['policy']=$this->UserModel->policy_model();
            $data['notice']=$this->UserModel->notice_model();
            $data['news']=$this->UserModel->news_model();
            $data['students']=$this->UserModel->students_ret_model();
            $this->load->view('user/policy',$data);
        }
         public function dbf()
        {
            if($this->session->userdata('uname')){              
                $data['slider']=$this->UserModel->slider_ret_model();             
                $data['gallery']=$this->UserModel->gallery_ret_model();
                $data['tnpteam']=$this->UserModel->tnp_team_model();
                $data['policy']=$this->UserModel->policy_model();
                $data['notice']=$this->UserModel->notice_model();
                $data['news']=$this->UserModel->news_model();
                $data['students']=$this->UserModel->students_ret_model();
                $this->load->view('user/dbf',$data);                
             }
             else{                 
                 redirect(base_url('login'));                 
             }
        }
         public function tnp_team()
        {
            $data['slider']=$this->UserModel->slider_ret_model();             
            $data['gallery']=$this->UserModel->gallery_ret_model();
            $data['tnpteam']=$this->UserModel->tnp_team_model();
            $data['policy']=$this->UserModel->policy_model();
            $data['notice']=$this->UserModel->notice_model();
            $data['news']=$this->UserModel->news_model();
            $data['students']=$this->UserModel->students_ret_model();
            $this->load->view('user/tnp_team',$data);
        }
        
        public function saf()
        {
            if($this->session->userdata('uname')){              
                $data['slider']=$this->UserModel->slider_ret_model();             
                $data['gallery']=$this->UserModel->gallery_ret_model();
                $data['tnpteam']=$this->UserModel->tnp_team_model();
                $data['policy']=$this->UserModel->policy_model();
                $data['notice']=$this->UserModel->notice_model();
                $data['news']=$this->UserModel->news_model();
                $data['students']=$this->UserModel->students_ret_model();
                $this->load->view('user/saf',$data);                
             }
             else{                 
                 redirect(base_url('login'));                 
             }
        }
        
         public function resume()
        {
            $data['slider']=$this->UserModel->slider_ret_model();             
            $data['gallery']=$this->UserModel->gallery_ret_model();
            $data['tnpteam']=$this->UserModel->tnp_team_model();
            $data['policy']=$this->UserModel->policy_model();
            $data['notice']=$this->UserModel->notice_model();
            $data['news']=$this->UserModel->news_model();
            $data['resume']=$this->UserModel->resume_fetch_model();
            $data['students']=$this->UserModel->students_ret_model();
            if($this->session->userdata('uname')||$this->session->userdata('sid')){
                $this->load->view('user/resume',$data);
            }
            else{
                
                 redirect(base_url('ResumeForm')); 
            }
        }
         
         public function resume_form()
        {
            $data['slider']=$this->UserModel->slider_ret_model();             
            $data['gallery']=$this->UserModel->gallery_ret_model();
            $data['tnpteam']=$this->UserModel->tnp_team_model();
            $data['policy']=$this->UserModel->policy_model();
            $data['notice']=$this->UserModel->notice_model();
            $data['news']=$this->UserModel->news_model();
            $data['students']=$this->UserModel->students_ret_model();
            $this->load->view('user/resume_form',$data);
        }
        
         public function resume_view()
        {
             $sid = $this->session->userdata('sid');
             $did = $this->session->userdata('uid');
             $data['dbf']=$this->UserModel->student_model($did);
             if($this->session->userdata('sid')){
                 
                $data['resume']=$this->UserModel->resume_ret_model($sid);
             }
             else{
                $data['resume']=$this->UserModel->resume_ret_model($did);
             }
            $this->load->view('user/resume_view',$data);
        }
        
         public function dbf_view()
        {
             $d_id = $this->session->userdata('uid');
             $data['dbf']=$this->UserModel->dbf_ret_model($d_id);
             if($this->uri->segment(2)=='Update'){
                 $this->load->view('user/std_db_update',$data);
             }
             else{
                $this->load->view('user/dbf_view',$data);                 
             }
             
        }
    
         public function studentregister_view()
        {
            if($this->session->userdata('uname')){  
                $data['log']='yes';
                $this->load->view('user/student_register_campus',$data);
            }
             else{  
                $data['log']='no';
                $this->load->view('user/student_register_campus',$data);
             }
        }
        
    public function cpf_view()
        {
        	 $d_id = $this->session->userdata('uid');
             $data['dbf']=$this->UserModel->dbf_ret_model($d_id);
             $data['cpf']=$this->UserModel->cpf_ret_model($d_id);
             if($this->uri->segment(2)=='Update'){
                 $this->load->view('user/cpf_db_update',$data);
             }
             else if($cpf=$this->UserModel->cpf_ret_model($d_id)){
                $this->load->view('user/cpf_view',$data);  
             }
             else{               
                $this->load->view('user/cpf_db_update',$data);  
             }
        }
        
     public function cpf_data_submit()
        {
            $d_id = $this->session->userdata('uid');
            $tnpjob=$this->input->post('tnpjob');
            $reqjob=$this->input->post('requirjob');
            $Enterpeneur=$this->input->post('Enterpeneur');
            $gate=$this->input->post('gate');
            $ger=$this->input->post('ger');
            $mtech=$this->input->post('mtech');
            $cat=$this->input->post('cat');
            $upsc=$this->input->post('upsc');
            $govtjob=$this->input->post('govtjob');
           $o_govtjob=$this->input->post('onlygovtjob');
           $cgjob=$this->input->post('cgjob');
           $cuntry=$this->input->post('country');
           $cor=$this->input->post('core');
           $soft=$this->input->post('software');
           $manager=$this->input->post('Managerinal');
           $jobpre=$this->input->post('jobpreferance');
           $banking=$this->input->post('banking');
             
            $study = array($gate,$ger,$mtech,$cat,$upsc);
            $job = array($govtjob,$o_govtjob);
            $loc = array($cgjob,$cuntry);
            $prfrnce = array($cor,$soft,$manager,$jobpre,$banking);
         
            $higher = implode("|",$study);
            $govt = implode("|",$job);
            $location = implode("|",$loc);
            $industry = implode("|",$prfrnce);
         

             if($get=$this->UserModel->cpf_fetch_model($d_id))
             {
                    $data = array('job_thru_tnp'=>$tnpjob,
                                  'primary_req_job'=>$reqjob,
                                  'self_emplymnt'=>$Enterpeneur,
                                  'higher_study'=>$higher,
                                  'govt_job'=>$govt,
                                  'location_for_job'=>$location,
                                  'industry_prfrnce'=>$industry
                                 );
                 if($set=$this->UserModel->cpf_form_update_model($data,$d_id))
                 {
                    $this->session->set_flashdata('item','yes');
                    redirect(base_url('CpfView'));
                     //echo "update hua";
                 }
                 else{
                    $this->session->set_flashdata('item','no');
                    redirect(base_url('CpfView'));
                 } 

             }
             else{

                    $data =   array('d_id'=>$d_id,
                                    'job_thru_tnp'=>$tnpjob,
                                      'primary_req_job'=>$reqjob,
                                      'self_emplymnt'=>$Enterpeneur,
                                      'higher_study'=>$higher,
                                      'govt_job'=>$govt,
                                      'location_for_job'=>$location,
                                      'industry_prfrnce'=>$industry
                                     );

                 if($ret=$this->UserModel->cpf_form_submit_model($data))
                 {
                    $this->session->set_flashdata('item','yes');
                    redirect(base_url('CpfView'));
                      //echo "insert hua";
                 }
                 else{

                    $this->session->set_flashdata('item','no');
                    redirect(base_url('CpfView'));
                 }

             }

         

        }
    
        
         public function saf_view()
        {
             $d_id = $this->session->userdata('uid');
             $data['dbf']=$this->UserModel->dbf_ret_model($d_id);
             $data['saf']=$this->UserModel->saf_ret_model($d_id);
             if($this->uri->segment(2)=='Update'){
                 $this->load->view('user/saf_db_update',$data);
             }
             else{
                 $this->load->view('user/saf_view',$data);                
             }
        }
        
         public function crf_view()
        {
             $c_id = $this->session->userdata('cid');
             $data['crf']=$this->UserModel->dbf_ret_model($c_id);
             if($this->uri->segment(2)=='Update'){
                 $this->load->view('user/crf_db_update',$data);
             }
             else if($this->uri->segment(2)=='Register'){
                 $this->load->view('user/crf_db_register',$data);
             }
             else if($this->uri->segment(2)=='Login'){
                 $this->load->view('user/crf_db_login',$data);
             }
             else{
                 $this->load->view('user/crf_view',$data);                
             }
        }
         
         public function resume_form_view()
        {
            if($this->uri->segment(2)=="Login"){
                $data['log']='yes';
               $this->load->view('user/resume_wizard',$data); 
            }
            else if($this->uri->segment(2)=="Update"){
                $data['log']='update';
               $this->load->view('user/resume_wizard',$data); 
            }
            else if($this->uri->segment(2)=="Updates" && $this->uri->segment(3)==$this->session->userdata('uid')){
                $data['log']='updates';
               $this->load->view('user/resume_wizard',$data); 
            }
            else{
            
                $data['log']='no';
                $this->load->view('user/resume_wizard',$data);
                 
             }
        }

        public function crf_submit()
        {

               $cname=$this->input->post('cname');
            $website=$this->input->post('website');
            $cprofile=$this->input->post('cprofile');
            $cpin=$this->input->post('pin');
            $branch=$this->input->post('branch');
            $passbatch=$this->input->post('batch');
            $criteria=$this->input->post('criteria');
            $position=$this->input->post('jposition');
            $location=$this->input->post('jlocation');
            $tdetails=$this->input->post('tdetails');
            $salary=$this->input->post('name');
            $stipend=$this->input->post('salary');
            $jdate=$this->input->post('jdate');
            $oletter=$this->input->post('oletter');
            $terms=$this->input->post('con');
            $type=$this->input->post('type');
            $process=$this->input->post('pprocess');
            $bond=$this->input->post('bond');
            $security=$this->input->post('security');
             $jprofile=$this->input->post('jprofile');
             $date=$this->input->post('cdate');
             $mail=$this->input->post('email');
             $pass=base64_encode($this->input->post('password'));
            $data =  array('c_name'=>$cname,
                           'c_website'=>$website,
                           'c_profile'=>$cprofile,
                           'job_profile'=>$jprofile,
                           'job_location'=>$location,
                           'trgt_branch'=>$branch,
                           'trgt_batch'=>$passbatch,
                           'job_position'=>$position,
                           'plcmnt_process'=>$process,
                           'rcrtmnt_criteria'=>$criteria,
                           'salary_package'=>$salary ,
                           't_n_c'=>$terms,
                           'join_date'=>$jdate,
                           'bond'=>$bond,
                           'c_pin'=>$cpin,
                           't_details'=>$tdetails,
                           't_salary'=>$stipend,
                           'oletter'=>$oletter,
                           'type_of_campus'=>$type,
                           'security'=>$security,
                           'campus_date'=>$date,
                           'email'=>$mail,
                           'pass'=>$pass
                          );
            
            if($ret=$this->UserModel->crf_submit_model($data))
            {
                    $this->session->set_flashdata('item','yes');
                     redirect(base_url('CrfView/Login')); 
            }
            else
            {
                    $this->session->set_flashdata('item','no');
                     redirect(base_url('CrfView/Register')); 
            }
            
            

        }
    
        public function dbf_view_submit()
         {
        
            $d_id = $this->session->userdata('uid');
            $dname=$this->input->post('stdname');
            $gender=$this->input->post('gender');
            $pass_yr=$this->input->post('Pass_year');
            $sem=$this->input->post('semester');
            $branch=$this->input->post('branch');
            $email=$this->input->post('email_id');
            $contact=$this->input->post('mob_no');
            $wp=$this->input->post('whatsapp_no');
            $X_per=$this->input->post('X_per');
            $XII_per=$this->input->post('XII_per');
            $I_sem_per=$this->input->post('I_sem_per');
            $II_sem_per=$this->input->post('II_sem_per');
            $III_sem_per=$this->input->post('III_sem_per');
            $IV_sem_per=$this->input->post('IV_sem_per');
            $V_sem_per=$this->input->post('V_sem_per');
            $VI_sem_per=$this->input->post('VI_sem_per');
            $VII_sem_per=$this->input->post('VII_sem_per');
            $VIII_sem_per=$this->input->post('VIII_sem_per');
            $overall_per=$this->input->post('overall_per');
            $live_back=$this->input->post('backlogs');
            $detains=$this->input->post('detains');
            $diploma=$this->input->post('diploma');
            $roll_no=$this->input->post('roll_no');
             $enroll_no=$this->input->post('enroll_no');
               
             $data =  array('d_name'=>$dname,
                            'gender'=>$gender,
                            'pass_out_yr'=>$pass_yr,
                            'semester'=>$sem,
                            'branch'=>$branch,
                            'email_id'=>$email,
                            'mob_no'=>$contact,
                            'whatsapp_no'=>$wp,
                            'X_per'=>$X_per,
                            'XII_per'=>$XII_per,
                            'I_sem_per'=>$I_sem_per,
                            'II_sem_per'=>$II_sem_per,
                            'III_sem_per'=>$III_sem_per,
                            'IV_sem_per'=>$IV_sem_per,
                            'V_sem_per'=>$V_sem_per,
                            'VI_sem_per'=>$VI_sem_per,
                            'VII_sem_per'=>$VII_sem_per,
                            'VIII_sem_per'=>$VIII_sem_per,
                            'overall_per'=>$overall_per,
                            'live_backlogs'=>$live_back,
                            'detains'=>$detains,
                            'diploma_per'=>$diploma,
                            'roll_no'=>$roll_no,
                            'enroll_no'=>$enroll_no
                           );
        
                if($res=$this->UserModel->dbf_upd_model($d_id,$data))
                {
                     redirect(base_url('DbfView')); 
                }
                else
                {
                     redirect(base_url('DbfView')); 
                }
          }
       
    
        public function saf_form_submit()
        {
            
            $did=$this->session->userdata('uid');
            $attendance=$this->input->post('attendance');
            $technical=$this->input->post('technical');  
            $aptitude=$this->input->post('aptitude');
            $communication=$this->input->post('communication');
         
            $presentation=$this->input->post('presentation');
            $behaviour=$this->input->post('behaviour'); 
            $campus=$this->input->post('campus');
            $agency=$this->input->post('agency');
         
            $safskill=array($technical, $aptitude,$communication,$presentation,$behaviour);
            $safcampus=array($campus,$agency);
         
            $skill=implode("|",$safskill);
            $campus=implode("|",$safcampus);
         
             if($get=$this->UserModel->saf_fetch_model($did))
             {
                    $data =  array('attendance'=>$attendance,
                                   'employbility_skills'=>$skill,
                                   'crtf_ex_agency'=>$campus
                                  );
                 if($set=$this->UserModel->saf_form_update_model($data,$did))
                 {
                    $this->session->set_flashdata('item','yes');
                    redirect(base_url('SafView'));
                     //echo "update hua";
                 }
                 else{
                    $this->session->set_flashdata('item','no');
                    redirect(base_url('SafView'));
                 } 

             }
             else{

                    $data =  array('d_id'=>$did,
                                   'attendance'=>$attendance,
                                   'employbility_skills'=>$skill,
                                   'crtf_ex_agency'=>$campus
                                  );
                 
                 if($ret=$this->UserModel->saf_form_submit_model($data))
                 {
                    $this->session->set_flashdata('item','yes');
                    redirect(base_url('SafView'));
                      //echo "insert hua";
                 }
                 else{

                    $this->session->set_flashdata('item','no');
                    redirect(base_url('SafView'));
                 }

             }

         
        }

        public function resume_form_submit()
        {

            if($this->uri->segment(2)=='Sid'){
                $sid=$this->input->post('sid');
             $did="";
            if($this->session->userdata('uid')){
                $did=$this->session->userdata('uid');
            }
           $name=$this->input->post('name');
           $email=$this->input->post('email');
           $present=$this->input->post('present');
           $Permanent=$this->input->post('parmanent');
           $mobile=$this->input->post('mobileNo');
           $career1=$this->input->post('1stcareer');
           $career2=$this->input->post('2ndcareer');
           $career3=$this->input->post('3rdcareer');
           $career4=$this->input->post('4thcareer');
           $Graduation=$this->input->post('Graduation');
           $Secondery=$this->input->post('Secondery');
           $Higher=$this->input->post('Higher');
           $University=$this->input->post('University');
           $Board12=$this->input->post('Board12');
           $Board10=$this->input->post('Board10');
           $college=$this->input->post('college');
           $school12=$this->input->post('school12');
           $school10=$this->input->post('school10');
           $passclg=$this->input->post('passclg');
           $pass12=$this->input->post('pass12');
           $pass10=$this->input->post('pass10');
           $sem1=$this->input->post('1st');
           $sem2=$this->input->post('2nd');
           $sem3=$this->input->post('3rd');
           $sem4=$this->input->post('4th');
           $sem5=$this->input->post('5th');
           $sem6=$this->input->post('6th');
           $sem7=$this->input->post('7th');
           $sem8=$this->input->post('8th');
           $percent12=$this->input->post('percentage12');
           $percent10=$this->input->post('percentage10');
           $skill1=$this->input->post('1stskill');
           $skill2=$this->input->post('2ndskill');
           $skill3=$this->input->post('3rdskill');
           $skill4=$this->input->post('4thskill');
           $intern1=$this->input->post('1stInternship');
           $intern2=$this->input->post('2ndInternship');
           $intern3=$this->input->post('3rdInternship');
           $ug1=$this->input->post('ug1');
           $ug2=$this->input->post('ug2');
           $ug3=$this->input->post('ug3');
           $ug4=$this->input->post('ug4');
           $cp1=$this->input->post('cp1');
           $cp2=$this->input->post('cp2');
           $Interest=$this->input->post('Interest');
           $Awards1=$this->input->post('Awards1');
           $Awards2=$this->input->post('Awards2');
           $Awards3=$this->input->post('Awards3');
           $Awards4=$this->input->post('Awards4');
           $Awards5=$this->input->post('Awards5');
           $Certifications1=$this->input->post('Certifications1');
           $Certifications2=$this->input->post('Certifications2');
		   $language=$this->input->post('language');           
		   $Hobbies1=$this->input->post('Hobbies1');
		   $Hobbies2=$this->input->post('Hobbies2');
		   $dob=$this->input->post('dob');
		   $gender=$this->input->post('gender');
		   $Marital=$this->input->post('Marital');
		   $Nationality=$this->input->post('Nationality');
		   $ref1=$this->input->post('ref1');
		   $ref2=$this->input->post('ref2');
            
           $config['upload_path']   = './uploads/ResumePics/';
		   $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif|JPG|PNG';
		   $config['file_name']     = $_FILES['file_name']['name'];
		   $config['width']     = 400;
		   $config['height']     = 400;
                if($config['file_name']){
                    
                    $this->load->library('upload',$config);						
                    $this->upload->initialize($config);
                    $this->upload->do_upload('file_name');
                    $uploadData = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image']  = $uploadData['full_path'];
                    $this->load->library('image_lib', $config); 
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();							
                    $image  = $config['upload_path'].$uploadData['file_name'];
                    
                }
		   $rcareer=array($career1,$career2,$career3,$career4);
			$career=implode("|",$rcareer);

			

			$rcource=array($Graduation,$Secondery,$Higher);
			$cource=implode("|",$rcource);

			$runiversity=array($University,$Board12,$Board10);
			$board=implode("|",$runiversity);

			$rschool=array($college,$school12,$school10);
			$college=implode("|",$rschool);

			$rpass=array($passclg,$pass12,$pass10);
			$pass=implode("|",$rpass);

			$rpercent=array($percent12,$percent10,$sem1,$sem2,$sem3,$sem4,$sem5,$sem6,$sem7,$sem8);
			$percent=implode("|",$rpercent);

			$rskill=array($skill1,$skill2,$skill3,$skill4);
			$skill=implode("|",$rskill);

		   $rintern=array($intern1,$intern2,$intern3);
		   $intern=implode("|",$rintern);

			$rug=array($ug1,$ug2,$ug3,$ug4);
			$ug=implode("|",$rug);

			$rcp=array($cp1,$cp2);
			$cp=implode("|",$rcp);

		   $rAwards=array($Awards1,$Awards2,$Awards3,$Awards4,$Awards5);
		   $Awards=implode("|",$rAwards);

		   $rcertifications=array($Certifications1,$Certifications2);
		   $Certifications=implode("|",$rcertifications);

		   $rhobbies=array($Hobbies1,$Hobbies2);
		   $hobbies=implode("|", $rhobbies );

		   $rref=array($ref1,$ref2);
		   	$ref=implode("|",$rref); 
                    
            $data =  array('s_name'=>$name,
                           'd_id'=>$did,
                           'email_id'=>$email, 
                           'present_addr'=>$present,
                           'permanent_addr'=>$Permanent,
                           'mob_no'=>$mobile,
                           'pic'=>$image,
                           'dob'=>$dob,
                           'gender'=>$gender,
                           'marital'=>$Marital,
                           'nationality'=>$Nationality,
                           'career_obj'=>$career,
                           'course'=>$cource,
                           'university_board'=>$board,
                           'school_college'=>$college,
                           'pass_out_yr'=>$pass,
                           'percentage_cgpa'=>$percent,
                           'skill_dvlpmnt_prgm'=>$skill,
                           'voc_train_prgm'=>$intern,
                           'ug_lvl_project'=>$ug,
                           'computer_proficiency'=>$cp, 
                           'area_of_interest'=>$Interest,
                           'awards_honours'=>$Awards, 
                           'training_certifications'=>$Certifications,
                           'language_known'=>$language,
                           'hobbies'=>$hobbies,
                           'references'=>$ref
                           );
		  
                if($ret=$this->UserModel->resume_form_update_models($data,$sid)){
                    $this->session->set_flashdata('item','update');
                    
                }else{
                    
                    $this->session->set_flashdata('item','no');
                }
                    redirect(base_url('ResumeView'));
            }
            
            else if($this->uri->segment(2)=='Did'){
                $did=$this->input->post('did');
                 $name=$this->input->post('name');
               $email=$this->input->post('email');
               $present=$this->input->post('present');
               $Permanent=$this->input->post('parmanent');
               $mobile=$this->input->post('mobileNo');
               $career1=$this->input->post('1stcareer');
               $career2=$this->input->post('2ndcareer');
               $career3=$this->input->post('3rdcareer');
               $career4=$this->input->post('4thcareer');
               $Graduation=$this->input->post('Graduation');
               $Secondery=$this->input->post('Secondery');
               $Higher=$this->input->post('Higher');
               $University=$this->input->post('University');
               $Board12=$this->input->post('Board12');
               $Board10=$this->input->post('Board10');
               $college=$this->input->post('college');
               $school12=$this->input->post('school12');
               $school10=$this->input->post('school10');
               $passclg=$this->input->post('passclg');
               $pass12=$this->input->post('pass12');
               $pass10=$this->input->post('pass10');
               $sem1=$this->input->post('1st');
               $sem2=$this->input->post('2nd');
               $sem3=$this->input->post('3rd');
               $sem4=$this->input->post('4th');
               $sem5=$this->input->post('5th');
               $sem6=$this->input->post('6th');
               $sem7=$this->input->post('7th');
               $sem8=$this->input->post('8th');
               $percent12=$this->input->post('percentage12');
               $percent10=$this->input->post('percentage10');
               $skill1=$this->input->post('1stskill');
               $skill2=$this->input->post('2ndskill');
               $skill3=$this->input->post('3rdskill');
               $skill4=$this->input->post('4thskill');
               $intern1=$this->input->post('1stInternship');
               $intern2=$this->input->post('2ndInternship');
               $intern3=$this->input->post('3rdInternship');
               $ug1=$this->input->post('ug1');
               $ug2=$this->input->post('ug2');
               $ug3=$this->input->post('ug3');
               $ug4=$this->input->post('ug4');
               $cp1=$this->input->post('cp1');
               $cp2=$this->input->post('cp2');
               $Interest=$this->input->post('Interest');
               $Awards1=$this->input->post('Awards1');
               $Awards2=$this->input->post('Awards2');
               $Awards3=$this->input->post('Awards3');
               $Awards4=$this->input->post('Awards4');
               $Awards5=$this->input->post('Awards5');
               $Certifications1=$this->input->post('Certifications1');
               $Certifications2=$this->input->post('Certifications2');
               $language=$this->input->post('language');           
               $Hobbies1=$this->input->post('Hobbies1');
               $Hobbies2=$this->input->post('Hobbies2');
               $dob=$this->input->post('dob');
               $gender=$this->input->post('gender');
               $Marital=$this->input->post('Marital');
               $Nationality=$this->input->post('Nationality');
               $ref1=$this->input->post('ref1');
               $ref2=$this->input->post('ref2');

               $config['upload_path']   = './uploads/ResumePics/';
               $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif|JPG|PNG';
               $config['file_name']     = $_FILES['file_name']['name'];
               $config['width']     = 400;
               $config['height']     = 400;
                    if($config['file_name']){

                        $this->load->library('upload',$config);						
                        $this->upload->initialize($config);
                        $this->upload->do_upload('file_name');
                        $uploadData = $this->upload->data();
                        $config['image_library'] = 'gd2';
                        $config['source_image']  = $uploadData['full_path'];
                        $this->load->library('image_lib', $config); 
                        $this->image_lib->initialize($config);
                        $this->image_lib->resize();							
                        $image  = $config['upload_path'].$uploadData['file_name'];
                      
                    }
               $rcareer=array($career1,$career2,$career3,$career4);
                $career=implode("|",$rcareer);



                $rcource=array($Graduation,$Secondery,$Higher);
                $cource=implode("|",$rcource);

                $runiversity=array($University,$Board12,$Board10);
                $board=implode("|",$runiversity);

                $rschool=array($college,$school12,$school10);
                $college=implode("|",$rschool);

                $rpass=array($passclg,$pass12,$pass10);
                $pass=implode("|",$rpass);

                $rpercent=array($percent12,$percent10,$sem1,$sem2,$sem3,$sem4,$sem5,$sem6,$sem7,$sem8);
                $percent=implode("|",$rpercent);

                $rskill=array($skill1,$skill2,$skill3,$skill4);
                $skill=implode("|",$rskill);

               $rintern=array($intern1,$intern2,$intern3);
               $intern=implode("|",$rintern);

                $rug=array($ug1,$ug2,$ug3,$ug4);
                $ug=implode("|",$rug);

                $rcp=array($cp1,$cp2);
                $cp=implode("|",$rcp);

               $rAwards=array($Awards1,$Awards2,$Awards3,$Awards4,$Awards5);
               $Awards=implode("|",$rAwards);

               $rcertifications=array($Certifications1,$Certifications2);
               $Certifications=implode("|",$rcertifications);

               $rhobbies=array($Hobbies1,$Hobbies2);
               $hobbies=implode("|", $rhobbies );

               $rref=array($ref1,$ref2);
                $ref=implode("|",$rref); 
                $data =  array('present_addr'=>$present,
                               'permanent_addr'=>$Permanent,
                               'pic'=>$image,
                               'dob'=>$dob,
                               'marital'=>$Marital,
                               'nationality'=>$Nationality,
                               'career_obj'=>$career,
                               'course'=>$cource,
                               'university_board'=>$board,
                               'school_college'=>$college,
                               'pass_out_yr'=>$pass,
                               'skill_dvlpmnt_prgm'=>$skill,
                               'voc_train_prgm'=>$intern,
                               'ug_lvl_project'=>$ug,
                               'computer_proficiency'=>$cp, 
                               'area_of_interest'=>$Interest,
                               'awards_honours'=>$Awards, 
                               'training_certifications'=>$Certifications,
                               'language_known'=>$language,
                               'hobbies'=>$hobbies,
                               'references'=>$ref
                               );
                if($get=$this->UserModel->ret_resume_model($did)){
                    
                    if($ret=$this->UserModel->resume_form_update_model($data,$did)){
                        $this->session->set_flashdata('item','update');
                    }else{

                        $this->session->set_flashdata('item','no');
                    }
                        redirect(base_url('ResumeView'));
                }
                else{
                     $data =  array('present_addr'=>$present,
                               'permanent_addr'=>$Permanent,
                               'd_id'=>$did,
                               'pic'=>$image,
                               'dob'=>$dob,
                               'marital'=>$Marital,
                               'nationality'=>$Nationality,
                               'career_obj'=>$career,
                               'course'=>$cource,
                               'university_board'=>$board,
                               'school_college'=>$college,
                               'pass_out_yr'=>$pass,
                               'skill_dvlpmnt_prgm'=>$skill,
                               'voc_train_prgm'=>$intern,
                               'ug_lvl_project'=>$ug,
                               'computer_proficiency'=>$cp, 
                               'area_of_interest'=>$Interest,
                               'awards_honours'=>$Awards, 
                               'training_certifications'=>$Certifications,
                               'language_known'=>$language,
                               'hobbies'=>$hobbies,
                               'references'=>$ref
                               );
                    if($ret=$this->UserModel->resume_form_submit_model($data)){
                        $this->session->set_flashdata('item','yes');
                    }else{

                        $this->session->set_flashdata('item','no');
                    }
                        redirect(base_url('ResumeView'));
                }
            }
            else {
             $did="";
            if($this->session->userdata('uid')){
                $did=$this->session->userdata('uid');
            }
           $enroll=$this->input->post('enroll');
           $name=$this->input->post('name');
           $email=$this->input->post('email');
           $present=$this->input->post('present');
           $Permanent=$this->input->post('parmanent');
           $mobile=$this->input->post('mobileNo');
           $career1=$this->input->post('1stcareer');
           $career2=$this->input->post('2ndcareer');
           $career3=$this->input->post('3rdcareer');
           $career4=$this->input->post('4thcareer');
           $Graduation=$this->input->post('Graduation');
           $Secondery=$this->input->post('Secondery');
           $Higher=$this->input->post('Higher');
           $University=$this->input->post('University');
           $Board12=$this->input->post('Board12');
           $Board10=$this->input->post('Board10');
           $college=$this->input->post('college');
           $school12=$this->input->post('school12');
           $school10=$this->input->post('school10');
           $passclg=$this->input->post('passclg');
           $pass12=$this->input->post('pass12');
           $pass10=$this->input->post('pass10');
           $sem1=$this->input->post('1st');
           $sem2=$this->input->post('2nd');
           $sem3=$this->input->post('3rd');
           $sem4=$this->input->post('4th');
           $sem5=$this->input->post('5th');
           $sem6=$this->input->post('6th');
           $sem7=$this->input->post('7th');
           $sem8=$this->input->post('8th');
           $percent12=$this->input->post('percentage12');
           $percent10=$this->input->post('percentage10');
           $skill1=$this->input->post('1stskill');
           $skill2=$this->input->post('2ndskill');
           $skill3=$this->input->post('3rdskill');
           $skill4=$this->input->post('4thskill');
           $intern1=$this->input->post('1stInternship');
           $intern2=$this->input->post('2ndInternship');
           $intern3=$this->input->post('3rdInternship');
           $ug1=$this->input->post('ug1');
           $ug2=$this->input->post('ug2');
           $ug3=$this->input->post('ug3');
           $ug4=$this->input->post('ug4');
           $cp1=$this->input->post('cp1');
           $cp2=$this->input->post('cp2');
           $Interest=$this->input->post('Interest');
           $Awards1=$this->input->post('Awards1');
           $Awards2=$this->input->post('Awards2');
           $Awards3=$this->input->post('Awards3');
           $Awards4=$this->input->post('Awards4');
           $Awards5=$this->input->post('Awards5');
           $Certifications1=$this->input->post('Certifications1');
           $Certifications2=$this->input->post('Certifications2');
		   $language=$this->input->post('language');           
		   $Hobbies1=$this->input->post('Hobbies1');
		   $Hobbies2=$this->input->post('Hobbies2');
		   $dob=$this->input->post('dob');
		   $gender=$this->input->post('gender');
		   $Marital=$this->input->post('Marital');
		   $Nationality=$this->input->post('Nationality');
		   $ref1=$this->input->post('ref1');
		   $ref2=$this->input->post('ref2');
            
           $config['upload_path']   = './uploads/ResumePics/';
		   $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif|JPG|PNG';
		   $config['file_name']     = $_FILES['file_name']['name'];
		   $config['width']     = 400;
		   $config['height']     = 400;
                if($config['file_name']){
                    
                    $this->load->library('upload',$config);						
                    $this->upload->initialize($config);
                    $this->upload->do_upload('file_name');
                    $uploadData = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image']  = $uploadData['full_path'];
                    $this->load->library('image_lib', $config); 
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();							
                    $image  = $config['upload_path'].$uploadData['file_name'];
                }
		   $rcareer=array($career1,$career2,$career3,$career4);
			$career=implode("|",$rcareer);

			

			$rcource=array($Graduation,$Secondery,$Higher);
			$cource=implode("|",$rcource);

			$runiversity=array($University,$Board12,$Board10);
			$board=implode("|",$runiversity);

			$rschool=array($college,$school12,$school10);
			$college=implode("|",$rschool);

			$rpass=array($passclg,$pass12,$pass10);
			$pass=implode("|",$rpass);

			$rpercent=array($percent12,$percent10,$sem1,$sem2,$sem3,$sem4,$sem5,$sem6,$sem7,$sem8);
			$percent=implode("|",$rpercent);

			$rskill=array($skill1,$skill2,$skill3,$skill4);
			$skill=implode("|",$rskill);

		   $rintern=array($intern1,$intern2,$intern3);
		   $intern=implode("|",$rintern);

			$rug=array($ug1,$ug2,$ug3,$ug4);
			$ug=implode("|",$rug);

			$rcp=array($cp1,$cp2);
			$cp=implode("|",$rcp);

		   $rAwards=array($Awards1,$Awards2,$Awards3,$Awards4,$Awards5);
		   $Awards=implode("|",$rAwards);

		   $rcertifications=array($Certifications1,$Certifications2);
		   $Certifications=implode("|",$rcertifications);

		   $rhobbies=array($Hobbies1,$Hobbies2);
		   $hobbies=implode("|", $rhobbies );

		   $rref=array($ref1,$ref2);
		   	$ref=implode("|",$rref); 

                if($get=$this->UserModel->user_check_for_login_model($enroll)){
                    foreach($get as $value){
                        $did=$value->d_id;
                    }
                    $data =  array('s_name'=>$name,
                           'd_id'=>$did,
                           'email_id'=>$email, 
                           'present_addr'=>$present,
                           'permanent_addr'=>$Permanent,
                           'mob_no'=>$mobile,
                           'pic'=>$image,
                           'dob'=>$dob,
                           'gender'=>$gender,
                           'marital'=>$Marital,
                           'nationality'=>$Nationality,
                           'career_obj'=>$career,
                           'course'=>$cource,
                           'university_board'=>$board,
                           'school_college'=>$college,
                           'pass_out_yr'=>$pass,
                           'percentage_cgpa'=>$percent,
                           'skill_dvlpmnt_prgm'=>$skill,
                           'voc_train_prgm'=>$intern,
                           'ug_lvl_project'=>$ug,
                           'computer_proficiency'=>$cp, 
                           'area_of_interest'=>$Interest,
                           'awards_honours'=>$Awards, 
                           'training_certifications'=>$Certifications,
                           'language_known'=>$language,
                           'hobbies'=>$hobbies,
                           'references'=>$ref
                           );
                    if($ret=$this->UserModel->resume_form_submit_model($data))
                    {
                        $this->session->set_flashdata('item','yes');
                        if($this->session->userdata('uid')){

                            redirect(base_url('ResumeView'));
                              //echo "insert hua";
                        }
                        else{

                            redirect(base_url('ResumeForm/Login'));
                              //echo "insert hua";
                        }
                    }
                    else{

                        $this->session->set_flashdata('item','no');
                        redirect(base_url('ResumeView'));
                    }
                }
                else{
                    $data =  array('s_name'=>$name,
                           'd_id'=>$did,
                           'email_id'=>$email, 
                           'present_addr'=>$present,
                           'permanent_addr'=>$Permanent,
                           'mob_no'=>$mobile,
                           'pic'=>$image,
                           'dob'=>$dob,
                           'gender'=>$gender,
                           'marital'=>$Marital,
                           'nationality'=>$Nationality,
                           'career_obj'=>$career,
                           'course'=>$cource,
                           'university_board'=>$board,
                           'school_college'=>$college,
                           'pass_out_yr'=>$pass,
                           'percentage_cgpa'=>$percent,
                           'skill_dvlpmnt_prgm'=>$skill,
                           'voc_train_prgm'=>$intern,
                           'ug_lvl_project'=>$ug,
                           'computer_proficiency'=>$cp, 
                           'area_of_interest'=>$Interest,
                           'awards_honours'=>$Awards, 
                           'training_certifications'=>$Certifications,
                           'language_known'=>$language,
                           'hobbies'=>$hobbies,
                           'references'=>$ref
                           );
                    if($ret=$this->UserModel->resume_form_submit_model($data))
                    {
                        $this->session->set_flashdata('item','yes');
                        if($this->session->userdata('uid')){

                            redirect(base_url('ResumeView'));
                              //echo "insert hua";
                        }
                        else{

                            redirect(base_url('ResumeForm/Login'));
                              //echo "insert hua";
                        }
                    }
                    else{

                        $this->session->set_flashdata('item','no');
                        redirect(base_url('ResumeView'));
                    }
                }
            }
                    
        }


}    
        

