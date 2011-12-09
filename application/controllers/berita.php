<?php

class Berita extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("m_berita");
        $this->load->library("form_validation");
    }

    function index() {
        $this->form_validation->set_rules("judul","judul","required");
        $this->form_validation->set_rules("isi", "isi", "required");
        if($this->form_validation->run() ==true){
        $save = array(
            "judul"=>$this->input->post('judul'),
            "isi" =>$this->input->post('isi'),
             "tanggal" => date('Y-m-d')
            );
        $this->m_berita->save($save);
        }
        $this->load->view("form_berita");
    }
    function tampil(){
        $data["berita"] = $this->m_berita->tampil();
        $this->load->view("tampil_berita",$data);
        
    }

}
?>
