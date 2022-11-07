<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here

    }
    
    public function insert($datos)
    {
        return $this->db->insert('productos', $datos);
    }

    public function update($id,$datos)
    {
        $this->db->where('id', $id);
        return $this->db->update('productos', $datos);
    }

    public function delete(Type $var = null)
    {
        # code...
    }

    

}

/* End of file Product_model.php */
