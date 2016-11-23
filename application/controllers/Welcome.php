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
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function belajar()
	{
		$nama = 'Choilur';
		$data['nama_gw'] =$nama;
		$this->load->view('belajar',$data);
	}
	public function form_tambah()
	{
		$this->load->view('form_tambah');

	}

	public function aksi_simpan()
	{
		$a = $this->input->post();
		if ($a['nama'] == 'bedes'){
			redirect('welcome/form_tambah');
		}else{
			echo "<pre>";
			print_r($a);
			echo "</pre>";
		}
	}

}
