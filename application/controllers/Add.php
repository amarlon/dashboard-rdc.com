<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add  extends MY_Controller {
    /**
     * __construct function.
     * 
     * @access public
     * @return void
     */

    public function __construct() {
        
        parent::__construct();
        //$this->load->library(array('session'));
        //$this->load->helper(array('url'));
         $this->load->model('user_model');  
         $this->load->helper(array('form', 'url', 'assets','file')); 
         $this->load->library('form_validation');
             $this->load->library('session');
    }
    public function post(){
        if($this->input->post('text')!='' or !empty( $this->input->post('subjet')!='')){
            if (!empty($_POST)) {
                 $lkn= $this->user_model->generateRandomString(24);
                 $data = array(    
                   'text' => $this->input->post('text'),
                   'ref_users' =>$this->input->post('users'),
                   'sujet' =>$this->input->post('subjet'),
                   'link' => $lkn
                 );
                $this->user_model->save_post_news($data);
                $id_ref['id_ref']= $this->user_model->get_last_id_news();
                if(!empty($_FILES['file_upload']['name'])){
                     $number_of_files= sizeof($_FILES['file_upload']['tmp_name']);
                     $files = $_FILES['file_upload'];
                     for ($i =0; $i< $number_of_files; $i++){
                         if($_FILES['file_upload']['error'][$i]!=0){
                               redirect('users/login');
                           
                         }
                     }
                     $config['upload_path']=FCPATH.'assets/news/'; 
                     $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|GIF';
                     $config['encrypt_name']= TRUE; 
                     for($i =0; $i<$number_of_files; $i++){
                         $_FILES['file_upload']['name']= $files['name'][$i];
                         $_FILES['file_upload']['type']= $files['type'][$i];
                         $_FILES['file_upload']['tmp_name']= $files['tmp_name'][$i];
                         $_FILES['file_upload']['size']= $files['size'][$i];
                         $this->load->library('upload',$config);
                         $this->upload->initialize($config);
                         if($this->upload->do_upload('file_upload')){
                             $data= $this->upload->data();
                             $insert[$i]['img'] =$data['file_name'];
                             $insert[$i]['id_ref']=$id_ref['id_ref'];
                             $insert[$i]['data']=date('Y-m-j H:i:s');
                         }
                    }
                    if(isset($insert)){
                        $this->db->insert_batch('img_news', $insert);
                    }
                    redirect('users/login');
                }else{

                }
            }
             
        }
    }
    
    public function ins_news(){
         if (!empty($_POST['tn'])){
             $data = array(
               'text' => $_POST['tn'],
               'date' => date('Y-m-j H:i:s'),
               'id_ref_n' =>$_POST['vd'],
               'av_users' =>$_POST['us'],
               'users' => $_POST['cd']
             );
          
             $this->db->insert('news_com', $data);
                redirect('users/login');
        
         }else{
               redirect('users/login');
         }
        
    }
    public function update_resume(){
         if (!empty($_POST['email'])){
             $data = array(
               'email' => $_POST['email'],
               'fullname' => $_POST['fullname'],
               'profession' =>$_POST['profession'],
               'phone' =>$_POST['phone'],
               'website' => $_POST['website'],
               'country' => $_POST['country']
             );

             $this->db->where('id', $_POST['user_id']);
             $this->db->update('users', $data);
              redirect('users/profile'.$this->input->post('username'));
               
        
         }else{
             
               redirect('users/login');
         }
    }

}