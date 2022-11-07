<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model(array('User_model'));
        
    }
    

    public function index()
    {
        $datos = array('usuarios' =>$this->User_model->getallusers() , );
        $this->load->view('layouts/head');
        $this->load->view('users/index',$datos);
        $this->load->view('layouts/footer');
    }

    public function add()
    {
        $password=$this->input->post('Password');
        
        $pass=password_hash($password,PASSWORD_BCRYPT);
        $datos = array(
            'name' =>$this->input->post('Name'),
            'email'=>$this->input->post('Email'),
            'rol'=>$this->input->post('Rol'),
            'password'=>$pass,
         );

         if($this->User_model->adduser($datos)){
            redirect(site_url('Users/index'));
         }
    }
    
    public function getuser()
    {
        $id=$this->input->post('id');
        $user=$this->User_model->getuser($id);

        echo json_encode($user);
    }
    public function updateuser()
    {
        $id=$this->input->post('UserId');
        $datos = array(
            'name' =>$this->input->post('Name'),
            'email'=>$this->input->post('Email'),
            'rol'=>$this->input->post('Rol'),
         );
        if ($this->User_model->update($id,$datos)) {
            redirect(site_url('Users/index'));
        }
    }

    public function updatepassword()
    {
        $id=$this->input->post('UserId');
        $password=$this->input->post('Password');
        $pass=password_hash($password,PASSWORD_BCRYPT);
        $datos = array('password' =>$pass , );

        if ($this->User_model->update($id,$datos)) {
            redirect(site_url('Users/index'));
        }
    }
    public function Delete()
    {
        # code...
    }

    public function Update()
    {
        # code...
    }

    


}

/* End of file Users.php */
