<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    public function __construct(){ // wajib ada disetiap controller
        parent::__construct();
        $this->load->helper('url');
        $this->load ->model('m_category'); //memanggil model disini aja
        $this->load->model('m_imgpromo');
    }
	public function index(){
        $data['promo'] = $this->m_category->getImg();
        $this->load->view('promo', $data);
	}
    public function imgpromo(){
        $data['promo'] = $this->m_imgpromo->getAll();
        $this->load->view('promo', $data);
    }
}
