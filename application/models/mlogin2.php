<?php 
 
class Mlogin2 extends CI_Model{
    
     //mengambil tabel users
    public $table = 'user';
    
    
    function cek_akun($username, $password){		
		//cari username lalu lakukan validasi
      $this->db->where('EMAIL', $username);
      $query = $this->db->get($this->table)->row();

      //jika bernilai 1 maka user tidak ditemukan
      if (!$query) return 1;

      //jika bernilai 3 maka password salah
      $hash = $query->EMAIL;
      if ($password != $hash) return 3;

      return $query;
  }
  
  function input_data($data,$table){
		$this->db->insert($table,$data);
	}
  }
?>