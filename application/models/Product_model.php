<?php

    class Product_model extends CI_Model{
        public function get_all_product(){
            $this->load->database();
            $query = $this->db->query("SELECT * FROM `swords`");
            return $query->result_array();
        }

        public function get_item($item){

            $this->load->database();
            $query = $this->db->query("SELECT * FROM `swords` WHERE product_id = $item");
            return $query->result_array();
        }
    }