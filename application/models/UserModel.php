<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{
    
    
    public function StdReg_Submit_model($eroll,$rollno,$name,$id)
    {
        $data =  array('eroll' => $eroll,'rollno'=> $rollno,'d_id'=> $id,'name'=>$name);
       
        return $this->db->insert('srf',$data);           
    
     }
        
      public function StdReg_Sub_model($data)
    {
            $r= $this->db->insert('srf',$data);
            return $r;
    
     }  
    public function dbf_ret_model($id)
    {
        $data = $this->db->get_where('dbf',array('d_id'=>$id));
        return $data->result();
    } 
    
    public function resume_ret_model($id)
    {
        if($this->session->userdata('sid')){
              
            $data = $this->db->get_where('resume',array('s_id'=>$id));
        }
        else{
              
            $data = $this->db->get_where('resume',array('d_id'=>$id));
        }
            return $data->result();
    } 
    
    public function ret_resume_model($id)
    {
              
            $data = $this->db->get_where('resume',array('d_id'=>$id))->result();

    } 
    public function saf_ret_model($id)
    {
        $data = $this->db->get_where('saf',array('d_id'=>$id));
        return $data->result();
    }
     public function cpf_ret_model($id)
    {
        $data = $this->db->get_where('cpf',array('d_id'=>$id));
        return $data->result();
    }
    
    public function dbf_upd_model($id,$data)
    {
        $this->db->where('d_id',$id);
        return $this->db->update('dbf',$data);
    }
    
    public function resume_form_update_model($data,$id)
    {
        $this->db->where('d_id',$id);
        return $this->db->update('resume',$data);
    }
    
    public function resume_form_update_models($data,$id)
    {
        $this->db->where('s_id',$id);
        return $this->db->update('resume',$data);
    }
    public function slider_ret_model()

	{
        $data = $this->db->get('slider');
        return $data->result();

    }
    public function students_ret_model()
    {
        $data = $this->db->get('placedstudents');
        return $data->result();
    }
    
    public function company_model()
    {
        $data = $this->db->get_where('crf',array('status'=>'1'));
        return $data->result();
    }
    public function gallery_ret_model()
    {
        $data = $this->db->get('gallery');
        return $data->result();
    }
    public function tnp_team_model()
    {
        $data = $this->db->get('tnpteam');
        return $data->result();
    }
    public function policy_model()
    {
        $data = $this->db->get('placementpolicy');
        return $data->result();
    }
    public function notice_model()
    {
        $data = $this->db->get('notice');
        return $data->result();
    }
    public function news_model()
    {
       $data= $this->db->get('news');
       return $data->result();

    }
    
    public function dbf_model()
    {
       $data= $this->db->get('dbf');
       return $data->result();

    }

    public function login_model($enroll,$roll)
    {
       $s3= $this->db->get_where('dbf',array('enroll_no'=>$enroll,'roll_no'=>$roll));
             return $s3->result();

    }
    
    public function user_check_for_login_model($enroll){
        $s3 = $this->db->get_where('dbf', array('enroll_no' => $enroll));
        return $s3->result();
    }

    public function else_login_model($enroll,$pass)
    {
       $s3= $this->db->get_where('dbf',array('enroll_no'=>$enroll,'password'=>$pass));
             return $s3->result();

    }
    
    public function pass_edit_model($roll)
    {
       return $this->db->get_where('dbf',array('roll_no'=>$roll))->result();
    }
    
    public function student_model($id)
    {
       return $this->db->get_where('dbf',array('d_id'=>$id))->result();
    }
    
    public function resume_fetch_model()
    {
       return $this->db->get('resume')->result();
    }
    
    public function edit_submit_model($id,$pass)
    {
        $this->db->where('d_id',$id);
        return $this->db->update('dbf',array('password'=>$pass));
           
    }
    
     public function crf_submit_model($data)
    {
         $r= $this->db->insert('crf',$data);
            return $r;

    }
     public function saf_fetch_model($did)
    {
         $r= $this->db->get_where('saf',array('d_id'=>$did));
            return $r->result();

    }
     
    public function saf_form_update_model($data,$id)        
    {
        $this->db->where('d_id',$id);
        return $this->db->update('saf',$data);
        
    }
    
    public function saf_form_submit_model($data)        
    {
        return $this->db->insert('saf',$data);
        
        
    }
    
     public function cpf_fetch_model($did)
    {
         $r= $this->db->get_where('cpf',array('d_id'=>$did));
            return $r->result();

    }
    
     public function srf_fetch_model($id)
    {
         $r= $this->db->get_where('srf',array('d_id'=>$id));
            return $r->result();

    }
     
    public function cpf_form_update_model($data,$id)        
    {
        $this->db->where('d_id',$id);
        return $this->db->update('cpf',$data);
        
    }
    
    public function cpf_form_submit_model($data)        
    {
        return $this->db->insert('cpf',$data);
        
        
    }
    
    public function resume_login_submit_model($data)       
    {
        return $this->db->get_where('resume',$data)->result();
        
        
    }
    
    public function resume_form_submit_model($data)        
    {
        return $this->db->insert('resume',$data);
        
        
    }
    
     
     

 }    