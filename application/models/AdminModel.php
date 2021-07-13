<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {
   
    public function admin_login_check_model($uname,$pass)
    {
        $get = $this->db->get_where('admin',array('a_user'=>$uname,'a_pass'=>$pass));
        return $get->row();
    }
    
    public function newtnp_team_model($name,$branch,$mob,$role,$image)
    {
        $data = array('name'=>$name,'branch'=>$branch,'mobileno'=>$mob,'role'=>$role,'image'=>$image);
        return $this->db->insert('tnpteam',$data);
    
    } 
    
    public function slider_form_submit_model($data)
    {
        return $this->db->insert('slider',$data);
    
    } 
    
     public function cpf_list_ret_model()
    {
        
         $data = $this->db->get('cpf');
        return $data->result();
    }
    
    public function total_registered_student_fetch_model()
    {
        return $this->db->get('srf')->result();       
    }
    
    
    public function total_placed_std_fetch_model()
    {
        return $this->db->get('placedstudents')->result();       
    }
    
    
    public function total_company_fetch_model()
    {
        return $this->db->get_where('crf',array('status'=>'1'))->result();       
    }
    
    
    public function total_student_fetch_model()
    {
        return $this->db->get('dbf')->result();       
    }
    
    public function dbf_list_ret_model()
    {
        
         $data = $this->db->get('dbf');
        return $data->result();
    }
    
    public function fetch_slider_list()
    {
        
         $data = $this->db->get('slider');
        return $data->result();
    }
    
    public function slider_delete_model($id)
    {
        $this->db->where('id',$id);
        $r=$this->db->delete('slider');
        return $r;
    }
    
    public function std_dbf_ret_model($did)
    {
        
         $data = $this->db->query("select * from dbf where d_id='$did'");
        return $data->result();
    }
    
    public function saf_list_ret_model()
    {
        
         $data = $this->db->get('saf');
        return $data->result();
    }
    
    public function resume_list_ret_model($did)
    {
        
         $data = $this->db->query("select * from resume where d_id='$did'");
        return $data->result();
    }
    
    
    public function std_database_model()
    {
        $get="SELECT * FROM dbf ";
        $r=$this->db->query($get);
        return $r->result();
    }
    
    public function std_db_delete_model($d_id)
    {
        $this->db->where('d_id',$d_id);
        $r=$this->db->delete('dbf');
        return $r;
    }
    
    public function std_db_submit_model($data)
    {
        $r=$this->db->insert('dbf',$data);
        return $r;
    }
    
     
    public function fetch_tnp_list()
    {
        $get="SELECT * FROM tnpteam ";
        $r=$this->db->query($get);
        return $r->result();
    }
    
    
    public function tnp_team_delete_model($id)
    {
        $this->db->where('id',$id);
        $r=$this->db->delete('tnpteam');
        return $r;
    }
   
    public function campus_list_model()
    {
        $get="SELECT * FROM crf ";
        $r=$this->db->query($get);
        return $r->result();
    } 
    
    
    public function campus_accepted_model($id,$data)
    {
       $this->db->where('c_id',$id);
        $r=$this->db->update('crf',$data);
        return $r;
    } 
    
     public function policylist_model()
    {
        $get="SELECT * FROM placementpolicy ";
        $r=$this->db->query($get);
        return $r->result();
    } 
    public function policyupdate_model($id)
    {
        $get="SELECT * FROM placementpolicy WHERE id='$id' ";
        $r=$this->db->query($get);
        return $r->result();
    } 
    public function pupdate_model($id,$data)
    {
       $this->db->where('id',$id);
        $r=$this->db->update('placementpolicy',$data);
        return $r;
    } 
    public function chemical_model()
    {
         return $this->db->query("SELECT * FROM dbf where branch='CHEM'")->result();
    }
     public function cse_model()
    {
         return $this->db->query("SELECT * FROM dbf where branch='CSE'")->result();
    }
    public function EtT_model()
    {
         return $this->db->query("SELECT * FROM dbf where branch='ET&T'")->result();
    }
     public function Bio_model()
    {
         return $this->db->query("SELECT * FROM dbf where branch='BIOTECH'")->result();
    }
    public function mech_model()
    {
         return $this->db->query("SELECT * FROM dbf where branch='MECH'")->result();
    }
     public function civil_model()
    {
         return $this->db->query("SELECT * FROM dbf where branch='CIVIL'")->result();
    }
}