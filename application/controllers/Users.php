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
			// validation not ok, send validation errors to the view
			//$this->load->view('header');
			$this->load->view('pages/users', $data);
			//$this->load->view('footer');
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			if ($this->user_model->create_user($username, $email, $password)) {	
				// user creation ok
				$this->load->view('user/register/register_success', $data);
				//$this->load->view('footer');
				
			} else {
				
				// user creation failed, this should never happen
				$data->error ="verifier vos données svp" ;
				
				// send error to the view
				//$this->load->view('header');
				$this->load->view('pages/users', $data);
				//$this->load->view('footer');
				
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
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		// set validation rules
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		if ($this->form_validation->run() == false) {
			// validation not ok, send validation errors to the view
			//$this->load->view('header');
			//$this->load->view('footer');
            //j'ai ajouter ceci
            if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
                if($this->user_model->resolve_user_login($_COOKIE['username'], $_COOKIE['password']))
                {
                    redirect('/users/page_d_acceuil');
                }
            }
            else{
                    $this->load->view('pages/users');
            }
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
            $remember = $this->input->post('remember');
			
			if ($this->user_model->resolve_user_login($username, $password)) {	
				$user_id = $this->user_model->get_user_id_from_username($username);
				$user    = $this->user_model->get_user($user_id);
				// set session user datas
				$_SESSION['user_id']      = (int)$user->id;
				$_SESSION['username']     = (string)$user->username;
				$_SESSION['avatar']  = (string)$user->avatar;
				$_SESSION['logged_in']    = (bool)true;

				///$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
				$_SESSION['is_admin']     = (bool)$user->is_admin;
				// user login ok
				//$this->load->view('header');
                //et ca aussi
                if($remember != NULL){
                     setcookie('username', $username, time() + (86400 * 60), "/");
                     setcookie('password', $password, time() + (86400 * 60), "/");
                }
				    redirect('/users/page_d_acceuil');
				//$this->load->view('footer');
                //$this->load->view('user/login/sign', $data);
				
			} else {
				
				// login failed
				$data->error = "veuillez verifier votre mot de passe svp.";
				
				// send error to the view
				//$this->load->view('header');
				//$this->load->view('user/login/login', $data);
				//$this->load->view('footer');
                $this->load->view('pages/users',$data);
				
			}
			
		}
		
	}
    /**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */

	public function page_d_acceuil(){
                 //connexion automatique a partir de cookie
		    if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){
		    	     $user_id = $this->user_model->get_user_id_from_username($_COOKIE['username']);
                     $user    = $this->user_model->get_user($user_id);
                // set session user datas
                     $_SESSION['user_id']  = (int)$user->id;
                     $_SESSION['username']  = (string)$user->username;
                     $_SESSION['avatar']  = (string)$user->avatar;
                      $_SESSION['tache']  = (string)$user->tache;

                     $_SESSION['logged_in'] = (bool)true;
                ///$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
                     $_SESSION['is_admin']  = (bool)$user->is_admin;
                    $this->load->view('templates/headerlogin');
                    $this->load->view('user/profile');
                    $this->load->view('templates/footerlogin');
                    $data = new stdClass();     
        // load form helper and validation library
                    



		    }
		    else{
		    	redirect('/users');
             
               }
	}
	
	
	/**
	 * create_post function.
	 * 
	 * @access public
	 * @return void
	 */
     
     public function create_post(){
       //$this->user_model->create_post($data);
     	$insert_data = array(
     		'text' => $this->input->post('text'),
     		'subjet' => $this->input->post('subjet'),
     		'user_id ' => $this->input->post('user_id'),
     		'photo' => $this->upload_image()
     	);
     	$this->user_model->insert_data($insert_data);
     	echo 'Data Inserted';

        //Either you can print value or you can send value to database
        
      }
      /**
	 * upload_image function.
	 * 
	 * @access public
	 * @return void
	 */
    function upload_image(){
		if(isset($_FILES["my-file"]))
		{
			 $extension =explode('.', $_FILES['my-file']['name']);
			 $new_name=rand().'.'.$extension[1];
			 $destination ="./asset/upload".$new_name;
			 move_uploaded_file($_FILES['my-file']['tmp_name'], $destination);
			 return $new_name;
		}
	}
     
   /**
	 * profile function.
	 * 
	 * @access public
	 * @return void
	 */
     function profile(){
     	$user_id = $this->user_model->get_user_id_from_username($_COOKIE['username']);
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
		
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

            setcookie("username", "", 0, "/");
            setcookie("password", "", 0, "/");
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			//remove session cookie

			// user logout ok
			//$this->load->view('header');
			redirect('/');
			//$this->load->view('footer');
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
		}
		
	}


}