<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    

    public function index()
    {
        $this->load->view('layouts/head');
        $this->load->view('layouts/footer');
    }

    public function dia()
    {
        $this->load->view('layouts/head');
        $this->load->view('layouts/footer');
    }

    public function semana()
    {
        $this->load->view('layouts/head');
        $this->load->view('layouts/footer');
    }

    public function mes()
    {
        $this->load->view('layouts/head');
        $this->load->view('layouts/footer');
    }
}

/* End of file Reportes.php */
