<?php

class M_promo extends CI_Model {
    protected $table="promo";
    
    function getAll(){
    	
        $this->db->select('*');
        $this->db->join('img_promo', 'promo.ID_PROMO= img_promo.ID_PROMO', 'Left');
        $this->db->group_by('promo.ID_PROMO');
        
        return $this->db->get($this->table)->result_array();
        
    }
    
    function getPromo($id){
    	
        $this->db->select('*');
        $this->db->join('img_promo', 'promo.ID_PROMO= img_promo.ID_PROMO', 'Left');
        $this->db->where('promo.ID_CATEGORY',$id);
        $this->db->group_by('promo.ID_PROMO');
        //print_r($this->db->last_query());
        //die();
        return $this->db->get($this->table)->result_array();

           }
    
    /* function getPromo1(){
       $this->db->select('*');
       $this->db->join('img_promo', 'promo.ID_PROMO=img_promo.ID_PROMO','Left');
       $this->db->group_by('promo.ID_PROMO');
       
       return $this->db->get($this->table)->result_array();
     }*/

     function getPromodetail($id){
      $this->db->where('ID_PROMO',$id);

        return $this->db->get($this->table)->row(); //ROW() untuk ngambil 1 row saja
    }
      //function getImgpromodetail(){
        //$this->db->select('IMAGE1');
        //$this->db->join('img_promo',)
        //$this->db->where('img_promo.ID_PROMO');
   //}
      }

 