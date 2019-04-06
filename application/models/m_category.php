<?php
class M_category extends CI_Model{
    protected $table='category', $img= 'img_promo', $data;
        
    function getByParent($id=0){
        $this->db->where('ID_PARENT',$id);
        return $this->db->get($this->table)->result_array();
    } 
    
    function getImg($data){
        $this->db->where('ID_IMG_PROMO', $data);
        return $this->db->get($this->img)->result_array();
    }
}