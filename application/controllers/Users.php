<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users  extends MY_Controller {
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
		//$this->load->model('post_model');	
		$this->load->library('form_validation');
        $this->load->database();
        $this->load->helper(array('form', 'url','file'));
        $this->load->helper('text'); 
	}
	public function index() {

   
       if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
       	   redirect('/users/login');
       }
       else{
       	 	$this->load->view('pages/users');
       	    
       }
       	
	}
	
     public function register(){
        // create the data object
        $data = new stdClass();     
        // load form helper and validation library
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[3]|is_unique[users.username]', array('is_unique' =>'Votre identifiant est déjà utilisé, veuillez choisir un autre svp.'));
	    $this->form_validation->set_rules('email', 'mail', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('confirmer-password', 'confirm password', 'trim|required|min_length[6]|matches[password]');
		if ($this->form_validation->run() === false) {
			$this->load->view('pages/users', $data);
			
		} else {
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			if ($this->user_model->create_user($username, $email, $password)) {	
				// user creation ok
				$this->load->view('user/register/register_success', $data);	
			} else {
				$data->error ="verifier vos données svp" ;
				$this->load->view('pages/users', $data);	
			}
			
		}
    }

    /**
	 * login function.
	 * 
	 * @access public
	 * @return void
	 */
	public function login() {
		
		// create the data object
		$data = new stdClass();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		if ($this->form_validation->run() == false) {
            if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
                if($this->user_model->resolve_user_login($_COOKIE['username'], $_COOKIE['password']))
                {
					$this->session($_COOKIE['username']);
					$user_id = $this->user_model->get_user_id_from_username($_COOKIE['username']);
				    $user    = $this->user_model->get_user($user_id);
					$this->page_d_acceuil($user);
                }
            }
            else{
                    $this->load->view('pages/users');
            }
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
            $remember = $this->input->post('remember');
			
			if ($this->user_model->resolve_user_login($username, $password)) {	
				$user_id = $this->user_model->get_user_id_from_username($username);
				$user    = $this->user_model->get_user($user_id);
				// set session user datas
				
                if($remember != NULL){
                     setcookie('username', $username, time() + (86400 * 60), "/");
                     setcookie('password', $password, time() + (86400 * 60), "/");
				}
				$this->session($username);
				$data=$user;
				//$this->session->set_flashdata('in',$workpa)
				$this->page_d_acceuil($data);
				
			} else {

				$data->error = "veuillez verifier votre mot de passe svp.";
                $this->load->view('pages/users',$data);
				
			}
			
		}
		
	}
    /**
	 * page_d_acceuil
	 * 
	 * @access public
	 * @return void
	 */

	public function page_d_acceuil($data){
         $this->load->view('templates/headerlogin',$data);
         $this->load->view('user/profile', $data);
		 $this->load->view('templates/footerlogin', $data);
	}
	
   /**
	 * profile function.
	 * 
	 * @access public
	 * 
	 */
     function profile(){
		$this->checksession();
     	$user_id = $this->user_model->get_user_id_from_username($_SESSION['user_id']);
        $members = $this->user_model->get_user($user_id);
     	$this->load->view('templates/headerlogin');
        $this->load->view('user/profile_users', $members);
        $this->load->view('templates/footerlogin');
	}
	
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout() {
		$data = new stdClass();
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			$this->cookiedestroy();
			redirect('/');
		} else {
            $this->cookiedestroy();
			redirect('/');
		}
	}
	/**
	 * create a session
	 * session()
	 */
	private function session($username){
       $user_id = $this->user_model->get_user_id_from_username($username);
       $user    = $this->user_model->get_user($user_id);
       $_SESSION['user_id']  = (int)$user->id;
       $_SESSION['logged_in'] = (bool)true;
	}
	/**
	 * checksession
	 * @access private
	 * check if user connect
	 */
	private function checksession(){
		if($this->session->userdata('logged_in')!=true){ redirect('users'); }
	}
    /**checksession()
	 * Cookiedestroy
	 * @access private
	 * 
	 */
	private function cookiedestroy(){
		if(isset($_COOKIE['password']) && isset($_COOKIE['username']) ){
            setcookie("username", "", 0, "/");
            setcookie("password", "", 0, "/");
		}
		
	}

}