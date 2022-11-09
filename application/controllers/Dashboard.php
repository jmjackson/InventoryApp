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

        $this->load->model(array('Product_model','Venta_model'));
        
    }
    
    public function index()
    {
        $datos= array(
            'products' =>$this->Product_model->getstock()  );
        $this->load->view('layouts/head');
        $this->load->view('dashboard/index',$datos);
        $this->load->view('layouts/footer');
        
    }

    public function getproducts()
    {
        $id=$this->input->post('id');
        
        $product=$this->Product_model->getproductbyid($id);
        echo json_encode($product);
    }
    public function Ventas()
    {
        $product_id=$this->input->post('ProductId');
        $cantidad=$this->input->post('Cantidad');
        if ($cantidad>0) {
            $product=$this->Product_model->getproductbyid($product_id);
            $stock=$product->stock-$cantidad;
            $datos = array('stock' =>$stock , );
            if ($this->Product_model->update($product_id,$datos)) {
                
                $evento = array(
                    'product_id' =>$product_id ,
                    'cantidad' =>$cantidad,
                    'fecha'=>date('Y-m-d')
                );
                if ($this->Venta_model->insert($evento)) {
                    $this->session->set_flashdata("msg","Su producto se ha descontado existosamente");
                    redirect(base_url('Dashboard/index'));
                    
                }
            }
        }
        
        
    }

}

/* End of file Dashboard.php */
