<?php

    class ProductController extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ProductModel');
            $this->load->library('form_validation');
            $this->load->helper('form');
        }

        public function index(){

            $data['title'] = "Product";
            $data['product'] = $this->ProductModel->getAllProduct();
            $this->load->view("templates/header", $data);
            $this->load->view("product/index", $data);
            $this->load->view("templates/footer");

        }

        public function addProduct(){

            $data["title"] = "Add Product";

            // valadation
            $this->form_validation->set_rules('product-name', 'Product Name', 'required');
            $this->form_validation->set_rules('product-price', 'Product Price', 'required');
            $this->form_validation->set_rules('product-stock', 'Product Stock', 'required|numeric');

          


            if($this->form_validation->run() == FALSE){

                $this->load->view("templates/header", $data);
                $this->load->view("product/addProductForm");
                $this->load->view("templates/footer");

            }else {
            //upload gambar
            $config['upload_path']          = './assets/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);

            if(!$this->upload->do_upload()){
                $errors = array('error' => $this->upload->display_errors());
                // This image is uploaded by deafult if the selected image in not uploaded
                $image = 'no_image.png';    
               }else {
                    $data = array('upload_data' => $this->upload->data());
                    $image = $_FILES['image-file']['name'];  //name must be userfile
               }
                $this->ProductModel->addProducts($image);
                redirect('ProductController');
            }

        }


        public function deleteProduct($id){
            $where = array('id' => $id);
            $this->ProductModel->deleteProducts($where, 'product');
            redirect('ProductController');
        }

        public function editProduct($id){
            $where =  array('id' => $id);
            $data['title'] = "Update Product";
            $data['product'] = $this->ProductModel->editProducts($where, 'product')->result();
            $this->load->view("templates/header", $data);
            $this->load->view('product/updateProduct', $data);
            $this->load->view("templates/footer");

        }

        public function updateProduct(){
            $id = $this->input->post('id');
            $productName =  $this->input->post('product-name');
            $productPrice = $this->input->post('product-price');
            $stock = $this->input->post('product-stock');

            $data = array(
                "productName" => $productName,
                "productPrice" => $productPrice,
                "stock" => $stock
            );

            $where = array(
                'id' => $id
            );

            $this->ProductModel->updateProducts($where, $data, 'product');
            redirect('ProductController');
        }
    }

?>  