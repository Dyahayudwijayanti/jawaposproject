<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
    
    function __construct(){
        parent::__construct();
        $this->load->model('M_merchant');
        $this->load->model('M_imggroup');
        $this->load->model('M_imgpromo');
        $this->load->model('M_promo');
    }
    
	public function index()
	{
        $data['merchant']=$this->M_merchant->getAll();
        $data['imggroup']=$this->M_imggroup->getByGroup();
        $data['imgpromo']=$this->M_imgpromo->getAll();
        $data['promo']=$this->M_promo->getAll();
        
        $this->load->view('home',$data);
	} 
}
