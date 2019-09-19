<?php

    class ProductModel extends CI_Model{
        public function getAllProduct(){
            $query = $this->db->get('product');
            return $query->result_array();
        }

        public function getDataCart($where, $table){
            $query = $this->db->get_where($table, $where);
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

        public function deleteProducts($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function editProducts($where, $table){
            return $this->db->get_where($table, $where);
        }

        public function updateProducts($where, $data, $table){
            $this->db->where($where);
		    $this->db->update($table,$data);
        }


    }

?>