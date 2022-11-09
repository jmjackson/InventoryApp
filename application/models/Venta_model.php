<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Venta_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

    public function insert($datos)
    {
        return $this->db->insert('ventas', $datos);
    }
}

/* End of file Venta_model.php */
