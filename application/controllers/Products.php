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
        
        $datos = array('products' =>$this->Product_model->getproducts() , );
        $this->load->view('layouts/head');
        $this->load->view('products/index',$datos);
        $this->load->view('layouts/footer');
        
    }

    public function ingresos()
    {
        $datos = array('products' =>$this->Product_model->getproducts() , );
        $this->load->view('layouts/head');
        $this->load->view('products/ingresos',$datos);
        $this->load->view('layouts/footer');
    }

    // Add a new item
    public function add()
    {
        $datos = array(
            'sku' =>$this->input->post('SKU'),
            'descripcion'=>$this->input->post('Descripcion'),
            'precio_cliente'=>$this->input->post('PrecioNormal'),
            'stock'=>$this->input->post('Stock'),
            'medida'=>$this->input->post('Medida'),
            'cantidad'=>$this->input->post('Cantidad'),
            'precio_compra'=> $this->input->post('Compra'),
            'lote'=>$this->input->post('Lote'),
             );

        if ($this->Product_model->insert($datos)) {
            redirect(base_url('Products/index'));
        }
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

