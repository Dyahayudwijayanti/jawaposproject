<?php

class M_promo extends CI_Model {
    protected $table="promo";
    
    function getAll(){
    	
        $this->db->select('*');
        $this->db->join('img_promo', 'promo.ID_PROMO= img_promo.ID_PROMO');
        
        return $this->db->get($this->table)->result_array();
           }
    }