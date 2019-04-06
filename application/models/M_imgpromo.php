<?php

class M_imgpromo extends CI_Model {
    
    protected $table="img_promo";
    function _construct(){
        parent::__construct();
        $this->load->database(); //wajib ada kalau mau connect db
    }
    
    function getAll(){
        $this->db->limit(8);
        return $this->db->get($this->table)->result();
    }
    
    //function getCategory() {
        //$data = $this->db->where('ID_PARENT',$id);
        //return $this->db->$data->result_array();
    //}
}