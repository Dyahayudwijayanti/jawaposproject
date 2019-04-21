<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    public function __construct(){ // wajib ada disetiap controller
        parent::__construct();
        $this->load->helper('url');
        $this->load ->model('m_promo'); //memanggil model disini aja
        $this->load->model('m_imgpromo');
    }
	public function index($id=0){
        $makanan = $this->m_promo->getPromo1($id);
        
        $data['promo'] = $this->m_promo->getPromo1($id);
        $this->load->view('promo', $data);
	}
    public function imgpromo(){
        $data['IMAGE1'] = $this->m_imgpromo->getImage();
        $this->load->view('promo', $data);
    }
}
