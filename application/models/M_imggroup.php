<?php

class M_imggroup extends CI_Model {
    protected $table="img_group";
    
    function getByGroup(){
        $this->db->limit(3);
        return $this->db->get($this->table)->result_array();
    }
} 