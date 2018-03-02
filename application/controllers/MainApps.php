<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainApps extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();				
        
        if($this->session->usr_email == "")
        {
            redirect('login');
        }
        /*
        $this->load->model('Apps_Model','Apps_Model');
        */
    }   

    public function dashboard2()
    {
        $this->load->view('dashboard2');
    }

    public function dashboard3()
    {
        $this->load->view('dashboard3');
    }

    public function general_form()
    {
        $this->load->view('general_form');
    }

    public function advanced_comp()
    {
        $this->load->view('advanced_comp');
    }

    public function form_validation()
    {
        $this->load->view('form_validation');
    }

    public function form_wizard()
    {
        $this->load->view('form_wizard');
    }
}
	
	