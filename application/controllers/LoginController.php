<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller 
{
    
    public function developers()
    {
          $this->load->view('user/src/index');
    }
    
    
    

       
           
    public function login()
    {
       if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $s1=$this->input->post('n1');
            $s2=$this->input->post('n2');
            $ret=$this->db->query("SELECT * FROM register WHERE u_name='$s1' and u_pass='$s2'");
            if($ret->num_rows()>0)
            {
                   $data['user']=$ret->result();
                   // set the session
                   foreach ($data['user'] as $value) 
                       {
                            $mobile=$value->mobileno;
                            $uid=$value->u_id;
                            $this->session->set_userdata('sess_uid',$uid);
                            $this->session->set_userdata('sess_mobile',$mobile);
                            $this->session->set_userdata('sess_uname',$s1);
                            $this->session->set_userdata('logged_in',TRUE);
                            //$this->session->set_userdata('sess_mobile',$value->uname);
                            redirect(base_url('admin_khaali'));
                       }
            }
            else
            {
                echo "Invalid Login ID or Password";
            }
        }
//        
           $this->load->view('login');
    }
    
}
?>