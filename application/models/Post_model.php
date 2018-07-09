<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class User_model extends CI_Model {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('cookie', 'url'));
		
	}
	
	/**
	 * create_post function.
	 * 
	 * @access public
	 * @param mixed $text
	 * @param mixed $subjet
	 * @return bool true on success, false on failure
	 */
	public function create_post($data) {
		
		$data = array(
			'text'   => $data['text'],
			'subjet' => $data['subjet'],
			'date' => date('Y-m-j H:i:s')
		);
		
		return $this->db->insert('post', $data);
		
	}
		
}
