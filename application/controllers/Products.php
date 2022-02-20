<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    }

    public function index($page=''){
        // if(!file_exists(APPPATH.'views/products/'.$page.'.php')){
        //     show_404();
        // }
       
        $data['title'] = 'Products';
        $data['page'] = strtoupper($page);

        $data['product'] = $this->Product_model->get_all_product();

        $this->load->view('templates/header');
        $this->load->view('products/productPage', $data);
        $this->load->view('templates/footer');
    }
}
