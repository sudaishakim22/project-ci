<?php

    class ProductModel extends CI_Model{
        public function getAllProduct(){
            $query = $this->db->get('product');
            return $query->result_array();
        }

        public function addProducts($image){

            $data = [
                "productName" => $this->input->post('product-name'), 
                "productPrice" => $this->input->post('product-price'),
                "stock" => $this->input->post('product-stock'),
                "image" => $image
            ];
            $this->db->insert('product', $data);
        }


    }

?>