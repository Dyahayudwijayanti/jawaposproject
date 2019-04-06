<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchant extends CI_Controller {

	public function __construct(){ 
        parent::__construct();
        $this->load->helper('url');
        $this->load ->model('m_merchant');
    }
    
	public function index()
	{
        $this->load->view('merchant_detail');
	}
    public function detail($id){
        $data['detail'] = $this->m_merchant->getMerchant($id);
        $this->load->view('merchant_detail', $data);
    }
}
