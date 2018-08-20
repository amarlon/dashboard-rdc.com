<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home  extends MY_Controller {
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
    }
     public function mail(){
       $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules("fullname", "fullname");
        $this->form_validation->set_rules("email", "email");
        $this->form_validation->set_rules("message", "message");
         // $this->form_validation->set_rules("sujet", "Sujet");
        if($this->form_validation->run()===false){
            $data['message']="il y a une erreur, veuillez vérifier patienter";
            $this->load->view('pages/mail', $data);
            //|xss_clean juste pour effacer c est juste pour ne pas oublier
        }
        else{
             $config = Array(
            'protocol'=>'smtp',
            'smtp_host'=>'ssl://smtp.googlemail.com',
            'smtp_port'=>465,
            'smtp_user'=>'marlonluzayamo@hotmail.fr',
            'smtp_pass'=>'010590lu',
            'mailtype'=>'html',
            'charset'=>'iso-8859-1',
            'wordwrap'=>TRUE);
            $data["message"]="Votre message nous a été envoyé, nous allons vous repondre bientot ";
            $this->load->library("email", $config);
            $this->email->set_newline("\r\n");
            $this->email->from(set_value("email"), set_value("fullname"));
            $this->email->to("jonathanmcm92@gmail.com");
            $this->email->subject(set_value("sujet"));
            $this->email->message(set_value("message"));
            $this->email->send();
            
    echo $this->email->print_debugger();
         
        }

     


     }

	public function index($page='Home')
    {

    	if ( !file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                show_404();
                
        }
        if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){
                     $user_id = $this->user_model->get_user_id_from_username($_COOKIE['username']);
                     $user    = $this->user_model->get_user($user_id);
                     if($user!=''){
                                // set session user datas
                         $_SESSION['user_id']  = (int)$user->id;
                         $_SESSION['username']  = (string)$user->username;
                         $_SESSION['avatar']  = (string)$user->avatar;
                       

                         $_SESSION['logged_in'] = (bool)true;
                                ///$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
                         $_SESSION['is_admin']  = (bool)$user->is_admin;
                        $this->load->view('templates/header');
                        $this->load->view('pages/'.$page);
                        $this->load->view('templates/footer');
                     }else{
                        redirect('users/logout');
                     }
               

        }
        else{
           $this->load->view('templates/header');
        $this->load->view('pages/'.$page);
        $this->load->view('templates/footer');   
        }
        
                  
    }

}