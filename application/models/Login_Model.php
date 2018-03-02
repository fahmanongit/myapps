<?php
class Login_Model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
        
	function login($usr_email,$usr_passwd)
	{
		$this -> db->select(' * ');
		$this -> db->from('usr_mstr');
		$this -> db->where('usr_email', $usr_email);
		$this -> db->where('usr_passwd', $usr_passwd);
		$this -> db->limit(1);
		$query = $this->db-> get();
		return $query;
	}
}