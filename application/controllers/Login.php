<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();	
        $this->load->model('Login_Model','Login_Model');
    }    
	
	public function index()
	{

		if(!empty($_POST))
        {
            $usr_email = $this->input->post('usr_email');
            $usr_passwd = $this->input->post('usr_passwd');
            $result = $this->Login_Model->login($usr_email,$usr_passwd);
            if($result -> num_rows() > 0)
            {
                foreach ($result->result() as $row)
                {
                    $this->session->usr_id = $row->usr_id;
                    $this->session->usr_email =  $row->usr_email;
                    $this->session->usr_admin =  $row->usr_admin;

                    redirect('dashboard'); /*dashboard controller*/
                }
            }
            else
            {
                $data['usr_email'] = $usr_email;
                $data['usr_passwd'] = $usr_passwd;
                $this->session->set_flashdata('SUCCESSMSG','Email and Password is Wrong');
                $this->load->view('login_user',$data);
            }
        }
		else
		{
			$this->load->view('login_user');
		}
	}

    public function add_user()
    {

    }
	
	public function logout_user()
    {
        $this->session->sess_destroy();
        redirect('login'); /*login controller*/
    }
}
