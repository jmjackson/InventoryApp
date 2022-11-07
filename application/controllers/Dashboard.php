<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        if(!$this->session->userdata("login")){
            redirect(base_url());
        }
    }
    
    public function index()
    {
        $this->load->view('layouts/head');
        $this->load->view('dashboard/index');
        $this->load->view('layouts/footer');
        
    }

}

/* End of file Dashboard.php */
