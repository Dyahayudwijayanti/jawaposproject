<?php

class M_merchant extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    protected $table="merchant";
    
    function getAll(){
        return $this->db->get($this->table)->result(); // result() untuk mengambil banyak row/baris data. memanggilnya dari view nanti pakai $var->nama_field
    }
    function getMerchant($id){
        $this->db->where('ID_MERCHANT',$id);
        return $this->db->get($this->table)->row(); //ROW() untuk ngambil 1 row saja
    }
}