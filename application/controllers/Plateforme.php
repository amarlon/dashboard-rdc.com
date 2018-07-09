<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plateforme extends MY_Controller {
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
    public function index() {

   
       if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
           //redirect('/users/login');
       }
       else{
          //  $this->load->view('pages/users');
            
       }
        
    }
    public function apropos(){
       $data['title']="Connaitre plus sur nous...";
         $this->load->view('templates/header-all', $data);
         $this->load->view('pages/apropos');
         $this->load->view('templates/footer-all');
    }
      public function realisation(){
       $data['title']="Connaitre nos réalisations...";
         $this->load->view('templates/header-all', $data);
         $this->load->view('pages/realisation');
         $this->load->view('templates/footer-all');
    }
}