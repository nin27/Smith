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

        $data['products'] = $this->Product_model->get_all_product();

        $this->load->view('templates/header');
        $this->load->view('products/all_products', $data);
        $this->load->view('templates/footer');
    }


    public function viewItem($item){
        $data['item'] = $this->Product_model->get_item($item);


        $data['title'] = 'Products';

        $this->load->view('templates/header');
        $this->load->view('products/view_product',$data);
        $this->load->view('templates/footer');

    }
}
