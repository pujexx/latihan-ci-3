<?php
class M_berita extends CI_Model{
    function  __construct() {
        parent::__construct();
    }

    function save($data){
        $this->db->insert("berita",$data);
    }
    function tampil(){

        $result = $this->db->get("berita");
        if($result->num_rows() >0){
            return $result->result_array();
        }
    }
}
?>
