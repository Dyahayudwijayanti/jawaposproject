<?php
class M_category extends CI_Model{
    protected $table='category', $img= 'img_promo', $data='promo';
    
    function _construct(){
        parent::__construct();
        $this->load->database(); //wajib ada kalau mau connect db
    }
        
    function getByParent($id=0){
        $this->db->where('ID_PARENT',$id);
        return $this->db->get($this->table)->result_array();
    }
    
    function makanan($id)       {
        $this->db->where('ID_CATEGORY',$id);
        return $this->db->get($this->table)->row_array();
    }
    
    function kategori()
    {
        $this->db->select('*');
        return $this->db->get($this->table)->row_array();
    }
    
   // function getAll($id){
       // $this->db->select('*');
        //$this->db->join('category','category.ID_CATEGORY=promo.ID_CATEGORY','Left');
    //    $this->db->join('img_promo','promo.ID_PROMO=img_promo.ID_PROMO','Left');
      //  $query = $this->db->get($this->data);
        //return $query->result();
     //   $this->db->select('*');
       // $this->db->join('img_promo','promo.ID_PROMO=img_promo.ID_PROMO','Left');
       // $this->db->where('promo.ID_CATEGORY',$id);
        //$this->db->order_by('img_promo.IMAGE1','asc'); 
        //$query = $this->db->get($this->table);
        //return $query->result();
        
        
}
