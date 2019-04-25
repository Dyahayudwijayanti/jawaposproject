<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promodetail extends CI_Controller {
	public function __construct(){ // wajib ada disetiap controller
        parent::__construct();
        $this->load->helper('url');
        $this->load ->model('m_promo'); //memanggil model disini aja
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($id){

		$data['detail'] = $this->m_promo->getPromodetail($id);
        $this->load->view('promo_detail', $data);
	}
}
