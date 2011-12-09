<?php
class M_berita extends CI_Model{
    function  __construct() {
        parent::__construct();
    }

    function save($data){
        $this->db->insert("berita",$data);
    }
}
?>
