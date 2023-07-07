<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamades extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{

		$this->load->view('Tamades');
		$this->load->view('templates/templates');
	}

	public function proses()
	{
		$nominal = $this->input->post('Nominal'); 
  		$j = $this->input->post('Jangka_waktu');
  		$hadiah = $this->input->post('Hadiah');

  		$sk_percent = $this->input->post('Suku_bunga');
        $sk_no_percent = preg_replace("/[^0-9]/", "", $sk_percent);

  		$sk_bunga = $sk_no_percent/100;
  		$e5 = $j*30;
  		$f5 = 12/$j;
  		$coba3 = $nominal/6;

  		$aa = (($nominal*$sk_bunga)/360)*$e5;
  		$aaa = $hadiah*$f5;
  		$aaaa = (($aa+$aaa)/$nominal);

  		$data['e'] = $nominal*1;
  		$data['f'] = $j*1;
  		$data['g'] = $hadiah*1;
  		$data['h'] = $sk_bunga*1;

  		$data['a'] = (($nominal*$sk_bunga)/360)*$e5;	
  		$data['b'] = $hadiah*$f5;
  		$data['c'] = $aa+$aaa;
  		$data['d'] = $aaaa;


		 
		    $this->load->view('tamades_hasil',$data);
			$this->load->view('templates/templates');
		} 

}
