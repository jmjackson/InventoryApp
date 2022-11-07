<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function getallusers()
    {
        $this->db->order_by('email', 'asc');
        return $this->db->get('users')->result();
    }

    public function update($id,$datos)
    {
        $this->db->where('id', $id);
        return $this->db->update('users', $datos);
    }
    
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }

    public function authentication($username,$password)
    {
        $this->db->where('email', $username);
        $user=$this->db->get('users')->row();
        
        if (password_verify($password,$user->password))
            : return $user;
        else
            :
            return false;
        endif;   
        
    }

    public function getuser($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('users')->row();
    }

    public function adduser($datos)
    {
        return $this->db->insert('users', $datos);
    }
    
}

/* End of file User_model.php */
