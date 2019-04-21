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
    
    //function getImage() {
       // $this->db->select('*');
        //$this->db->from('img_promo');
        //$this->db->join('promo','promo.ID_PROMO=img_promo.ID_PROMO','Left');
        //$this->db->join('category','category.ID_CATEGORY=promo.ID_CATEGORY','Left');
        //$query = $this->db->get();
       // return $query->result();
   //}
}