<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller 
{
    
    public function slider()
    {
        $response=array();
        $resp=array();
          $data = $this->db->get('slider');
          if($data->num_rows()>0)
         {
             $res=$data->result();
             foreach($res as $value){
                 $response['name']=$value->Text;
                 $response['descr']=$value->description;
                 $response['image']=$value->image;
                 $response['success']="Yes";
                 $response['error']=FALSE;
                 
                 array_push($resp,$response);
                 
             }
             
         }
         else{
             
                 $response['success']="No";
                 $response['error']=TRUE;
         }
         echo json_encode($resp);
    }    
    
    public function register()
    {
        $response=array();
        $name=$this->input->post('name');
        $pass=$this->input->post('pwd');
        //$name='hemant';
        //$pass='123';    
        $set=array('name'=>$name,'pass'=>$pass);
        $data = $this->db->insert('app',$set);
          if($data>0)
         {
                 $response['success']="Yes";
                 $response['error']=FALSE;
                 
             
             
         }
         else{
             
                 $response['success']="No";
                 $response['error']=TRUE;
         }
         echo json_encode($response);
    }
    
    
    public function apk_image()
	{
        $name =  $this->input->post('text');
        //$name = "xyz";

                   $config['upload_path']   = './uploads/image/';
                   $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
                   $config['file_name']     = $_FILES['image']['name'];
            
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
        else {
             $image="l";
        }
		//echo $image;
				
		$data=array('name'=>$name,'image'=>$image);
        $ret=  $this->db->insert('images',$data);
		if($ret){
            $response['sccess']= 'yes';
            $response['error']= FALSE;
		}else{
            $response['sccess']= 'no';
            $response['error']= TRUE;
		}
			
        echo json_encode($response);		
           
	}


       
           
    public function login()
    {
       
            $response = array();
            $s1=$this->input->post('name');
            $s2=$this->input->post('pwd');
            // $s1="hemant";
            // $s2="123";
            $ret=$this->db->query("SELECT * FROM app WHERE name='$s1' and pass='$s2'");
            if($ret->num_rows()>0)
            {
                   $data=$ret->result();
                   // set the session
                   foreach ($data as $value) 
                       {
                            $response['name']=$value->name;
                            $response['mobile']=$value->mobile;
                            $response['error']=FALSE;
                            $response['success']="Yes";
                            

                       }
            }
            else
            {
                            $response['error']=TRUE;
                            $response['success']="NO";
            }
            
            echo json_encode($response);
        
//        
    }
    
}
?>