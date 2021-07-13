<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class AdminController extends CI_Controller 
    {
            
        public function admin_login()
        {
            if($this->session->userdata('id')){
                
                redirect(base_url('Dashboard'));
                
            }else{
                
                $data['page'] = $this->uri->segment(1);
                $this->load->view('admin/login',$data);
            }
        } 
        
        public function indexs()
        {
            
                
            $data['page'] = $this->uri->segment(1);
            $this->load->view('admins/index',$data);
            
        }
        
        public function admin_login_check()
        {

            $uname=$this->input->post('uname');
            $pass=$this->input->post('pass');
            $ret=  $this->AdminModel->admin_login_check_model($uname,$pass);
            if($ret){
                $this->session->set_userdata('id',$ret->a_id);
                $this->session->set_userdata('admin_name',$ret->a_name);
                $this->session->set_flashdata('msg','Welcome To The Destiny Basket...!');
                redirect(base_url('Dashboard'));
            }else{
                $this->session->set_flashdata('msg','Email Or Password Is Invalid...! Please Login With Valid Details');
                redirect(base_url('AdminLogin'));
            }
        }
        
        public function admin_logout()
        {
            $this->session->unset_userdata('id');
            $this->session->sess_destroy();
            $this->session->set_flashdata('success','yes');
            redirect(base_url('AdminLogin'));
        
        }
        public function dashboard()
        {

            if(!$this->session->userdata('id')){
                
                $this->session->set_flashdata('msg','Please Login First With Valid Details');
                redirect(base_url('AdminLogin'));
                
            }else{
                $data['company']=  $this->AdminModel->total_company_fetch_model();
                $data['student']=  $this->AdminModel->total_student_fetch_model();
                $data['placed']=  $this->AdminModel->total_placed_std_fetch_model();
                $data['campus']=  $this->AdminModel->total_registered_student_fetch_model();
                $data['page'] = $this->uri->segment(1);
                $this->load->view('admin/dashboard',$data);
            }
        }
        
            
         public function cpf_list()
         {
             if($this->session->userdata('id')){
                
                 $data['dbf']=$this->AdminModel->dbf_list_ret_model();
                 $data['cpf']=$this->AdminModel->cpf_list_ret_model();
                 $data['page'] = $this->uri->segment(1);
                 
                 $this->load->view('admin/cpf_list',$data);
                
             }else{
                
                 redirect(base_url('AdminLogin'));
             }
         }
            
         public function std_resume_view()
         {
             if($this->session->userdata('id')){
                 $did = $this->uri->segment(2);
                 $data['dbf']=$this->AdminModel->std_dbf_ret_model($did);
                 $data['resume']=$this->AdminModel->resume_list_ret_model($did);
                 $data['page'] = $this->uri->segment(1);
//                 echo $did;
//                 print_r($data['resume']);
                 $this->load->view('admin/resume',$data);
                
             }else{
                
                 redirect(base_url('AdminLogin'));
             }
         }
        
            
        public function std_db_entry()
        {
            if($this->session->userdata('id')){
                
                $data['page'] = $this->uri->segment(1);
                $this->load->view('admin/std_db_entry',$data);
                
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
            
        public function saf_list()
        {
            if($this->session->userdata('id')){
                
                 $data['dbf']=$this->AdminModel->dbf_list_ret_model();
                 $data['saf']=$this->AdminModel->saf_list_ret_model();
                 $data['page'] = $this->uri->segment(1);
                 $this->load->view('admin/saf_list',$data);
                
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
            
        public function add_new_notice()
        {
            if($this->session->userdata('id')){
                
                $data['page'] = $this->uri->segment(1);
                $this->load->view('admin/add_notice',$data);
                
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
            
        public function campus_list()
        {
            if($this->session->userdata('id')){
                
                $res['page'] = $this->uri->segment(1);
                $res['data']=$this->AdminModel-> campus_list_model();
                $this->load->view('admin/campus_list',$res);
                 
                
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
         
        
        public function campus_accepted()
        {
            if($this->session->userdata('id')){


                $id=$this->uri->segment(2);
                $data=array('status'=>'1');
                $query=$this->AdminModel->campus_accepted_model($id,$data);
                if($query>0)
                {
                    $this->session->set_flashdata("item","yes");
                 }
                 else
                 {
                    $this->session->set_flashdata("item","no");
                 }
                redirect(base_url('CampusList'));
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
        
        public function campus_rejected()
        {
            if($this->session->userdata('id')){


                $id=$this->uri->segment(2);
                $data=array('status'=>'2');
                $query=$this->AdminModel->campus_accepted_model($id,$data);
                if($query>0)
                {
                    $this->session->set_flashdata("item","yes");
                 }
                 else
                 {
                    $this->session->set_flashdata("item","no");
                 }
                redirect(base_url('CampusList'));
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
        
            
        public function placement_policy()
        {
            if($this->session->userdata('id')){
                $res['policy']=$this->AdminModel->policylist_model();
                $res['page'] = $this->uri->segment(1);
                $this->load->view('admin/policies',$res);
                  
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
        public function policy_update()
        {
            if($this->session->userdata('id')){


                $id=$this->uri->segment(2);
                    // echo "Student ID".$d_id;
                $res['policy']=$this->AdminModel->policyupdate_model($id);
                $res['page'] = $this->uri->segment(1);
                $this->load->view('admin/placement_policy',$res);
                      
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
         
        
        public function p_update()
        {
            if($this->session->userdata('id')){


                $id=$this->input->post('id');
                $policy=$this->input->post('policy');
                // echo "Student ID".$d_id;
                $data=array('policy'=>$policy);
                $query=$this->AdminModel->pupdate_model($id,$data);
                if($query>0)
                {
                    $this->session->set_flashdata("item","yes");
                 }
                 else
                 {
                    $this->session->set_flashdata("item","no");
                 }
                redirect(base_url('PlacementPolicy'));
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
            
        public function std_database()
        {
            if($this->session->userdata('id')){
                
                 $res['data']=$this->AdminModel->std_database_model();
                 $res['page'] = $this->uri->segment(1);
                 $this->load->view('admin/std_database',$res);
                   
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
        
        
        public function slider_delete()
        {
            if($this->session->userdata('id')){
                
                $id=$this->uri->segment(2);
                // echo "Student ID".$d_id;
                $query=$this->AdminModel->slider_delete_model($id);
                if($query>0)
                {
                    $this->session->set_flashdata("item","yes");
                      redirect(base_url('SliderList'));
                }
                else
                {  
                    $this->session->set_flashdata("item","no");
                      redirect(base_url('SliderList'));
                }
            }
                
        }
        
        
        public function std_db_delete()
        {
            if($this->session->userdata('id')){
                
                $d_id=$this->uri->segment(2);
                // echo "Student ID".$d_id;
                $query=$this->AdminModel->std_db_delete_model($d_id);
                if($query>0)
                {
                    $this->session->set_flashdata("item","yes");
                      redirect(base_url('StdDatabase'));
                }
                else
                {  
                    $this->session->set_flashdata("item","no");
                      redirect(base_url('StdDatabase'));
                }
            }
                
        }
        
        
        public function std_db_submit()
        {
            if($this->session->userdata('id')){
                $name = $this->input->post('name');
                $enroll = $this->input->post('enroll');
                $roll = $this->input->post('roll');
                // echo "Student ID".$d_id;
                $data=array('d_name'=>$name,'enroll_no'=>$enroll,'roll_no'=>$roll);
                $query=$this->AdminModel->std_db_submit_model($data);
                if($query>0)
                {
                    $this->session->set_flashdata("item","yes");
                      redirect(base_url('StdDatabaseEntry'));
                }
                else
                {  
                    $this->session->set_flashdata("item","no");
                      redirect(base_url('StdDatabaseEntry'));
                }
            }
                
        }
        
        
            
        public function add_slider()
        {
            if($this->session->userdata('id')){
                
                $res['page'] = $this->uri->segment(1);
                $this->load->view('admin/add_slider',$res);
                
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
         
            
        public function slider_list()
        {
            if($this->session->userdata('id')){
                
                $res['data']=$this->AdminModel->fetch_slider_list();
                $res['page'] = $this->uri->segment(1);
                $this->load->view('admin/slider_list',$res);
                
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
         
            
        public function tnpteam()
        {
            if($this->session->userdata('id')){
                
                $res['page'] = $this->uri->segment(1);
                $this->load->view('admin/tnpteam',$res);
                
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
        
        public function addnewtnp_team()
        {
//             if($this->session->userdata('id')){
                 
                 $n1=$this->input->post('name');
                 $n2=$this->input->post('branch');
                 $n3=$this->input->post('phone');
                 $n4=$this->input->post('role');

                   $config['upload_path']   = './uploads/TnpMembers/';
                   $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
                   $config['file_name']     = $_FILES['file_name']['name'];
            
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
            
                 $res=$this->AdminModel->newtnp_team_model($n1,$n2,$n3,$n4,$image);
                 if($res>0)
                 {
                    $this->session->set_flashdata("item","yes");
                 }
                 else
                 {
                    $this->session->set_flashdata("item","no");
                 }
                redirect(base_url('TnpTeamUpdate'));
        }
         
            
        public function tnp_team_list()
        {
            if($this->session->userdata('id')){
                $res['data']=$this->AdminModel->fetch_tnp_list();
                $res['page'] = $this->uri->segment(1);
                $this->load->view('admin/tnp_team_detail',$res);
                
            }else{
                
                redirect(base_url('AdminLogin'));
            }
        }
        
        
        public function tnp_team_delete()
        {
            if($this->session->userdata('id')){
                
                $id=$this->uri->segment(2);
                // echo "Student ID".$d_id;
                $query=$this->AdminModel->tnp_team_delete_model($id);
                if($query>0)
                {
                    $this->session->set_flashdata("item","yes");
                      redirect(base_url('TnpTeamList'));
                }
                else
                {  
                    $this->session->set_flashdata("item","no");
                      redirect(base_url('TnpTeamList'));
                }
            }
                
        }


        public function slider_form_submit()
        {
            $name=$this->input->post('name');
            $descr=$this->input->post('description');

               $config['upload_path']   = './uploads/Slider/';
               $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
               $config['file_name']     = $_FILES['file_name']['name'];
            
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
            $data = array('Text'=>$name,'description'=>$descr,'image'=>$image);
            
            if($ret=$this->AdminModel->slider_form_submit_model($data)){
                
                $this->session->set_flashdata("msg","Slider Is SuccessFully Inserted In Database!");
                redirect(base_url('AddSlider'));
            }
            else{
                $this->session->set_flashdata("msg","oops Something Went Wrong Please Try Again...!");
                redirect(base_url('AddSlider'));
            }
        }

         public function chemical()
        {
            
                $data['branch']=$this->AdminModel->chemical_model();
                $data['page'] = $this->uri->segment(1);
                $data['branch_name'] = 'CHEMICAL';
                $this->load->view('admin/cse',$data);
                
            
        }
         public function cse()
        {
            
                $data['branch']=$this->AdminModel->cse_model();
                $data['page'] = $this->uri->segment(1);
                $data['branch_name'] = 'COMPUTER SCIENCE ENGINEERING';
                $this->load->view('admin/cse',$data);
                
            
        }
          public function EtT()
        {
            
                $data['branch']=$this->AdminModel->EtT_model();
                $data['page'] = $this->uri->segment(1);
                $data['branch_name'] = 'ELECTRONICS & TELECOMMUNICATION';
                $this->load->view('admin/cse',$data);
                
            
        }
         public function Bio()
        {
            
                $data['branch']=$this->AdminModel->Bio_model();
                $data['page'] = $this->uri->segment(1);
                $data['branch_name'] = 'BIO TECHOLOGY';
                $this->load->view('admin/cse',$data);
                
            
        }
         public function mech()
        {
            
                $data['branch']=$this->AdminModel->mech_model();
                $data['page'] = $this->uri->segment(1);
                $data['branch_name'] = 'MECHANICAL';
                $this->load->view('admin/cse',$data);
                
            
        } 
        public function civil()
        {
            
                $data['branch']=$this->AdminModel->civil_model();
                $data['page'] = $this->uri->segment(1);
                $data['branch_name'] = 'CIVIL';
                $this->load->view('admin/cse',$data);
                
            
        }      	
}
