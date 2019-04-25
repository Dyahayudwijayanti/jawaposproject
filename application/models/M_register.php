<?php 
 
class M_register extends CI_Model{
    var $table = 'user';
    
    public function __construct(){
		parent::__construct();
		$this->load->database();
    }
    
    public function m_register(){
    /$this->db->insert($table,$data);
    //public function m_register(){
        //$sql=sprintf("insert into user values('','%s','','','%s','%s','','','','')",$this->nama,$this->email,$this->password);
       //$this->db->query($sql);        
    }
}
