<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();				
        if($this->session->usr_email == "")
        {
            redirect('login');
        }
        $this->load->model('Login_Model','Login_Model');
    }    
    
    public function index()
    {
        $this->load->view('dashboard_page');
    }
}
