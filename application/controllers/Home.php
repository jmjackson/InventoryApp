<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model(array('User_model'));
        
    }
    

    public function index()
    {
        if ($this->session->userdata("login")) {
        redirect(base_url()."Dashboard");
        }
        else{
        $this->load->view("home/auth");
        }
    }

    public function Login()
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');

        $data=$this->User_model->authentication($username,$password);
 
        if(!$data):
                $this->session->set_flashdata("error","El Correo o la Contraseña son incorrectos");
                redirect(site_url());
        else :
            $sess=array(
                'id'=>$data->id,
                'email'=>$data->email,
                'rol'=>$data->rol,
                'name'=>$data->name,
                'login'=>TRUE
            );

            $this->session->set_userdata($sess);
            redirect(site_url('Dashboard'));
        endif;
    }

    public function LogOff()
    {
        $this->session->sess_destroy();
        redirect(site_url());
    }

    
}

/* End of file Home.php */
