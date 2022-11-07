<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model(array('Product_model'));
        
    }

    // List all your items
    public function index( )
    {
        $this->load->view('layouts/head');
        $this->load->view('products/index');
        $this->load->view('layouts/footer');
        
    }

    public function ingresos()
    {
        $this->load->view('layouts/head');
        $this->load->view('products/ingresos');
        $this->load->view('layouts/footer');
    }

    // Add a new item
    public function add()
    {

    }

    //Update one item
    public function update( $id = NULL )
    {

    }

    //Delete one item
    public function delete( $id = NULL )
    {

    }
}

/* End of file Products.php */

