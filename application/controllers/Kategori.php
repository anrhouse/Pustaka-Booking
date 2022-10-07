<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public $template 	= 'template/';
	public $folder 		= 'modkategori/';
	public $menu 		= 'Kategori';

	public function __construct(){
		parent::__construct();

		//Autentikasi Login
		IsAdmin();
		
		//Load Model
		$this->load->model('M_kategori');
	}

	public function index(){

		$data = [
			'title' 	=> $this->menu,
			'subtitle'	=> 'Lihat',
			'data'		=> $this->M_kategori->get()
		];

		$this->load->view($this->template .'head', $data);
		$this->load->view($this->template .'sidebar', $data);
		$this->load->view($this->template .'header', $data);

		$this->load->view($this->folder .'view', $data);
		
		$this->load->view($this->template .'footer', $data);
	
	}

	public function add(){
		
		$data = [
			'title'		=> $this->menu,
			'subtitle'	=> 'Tambah Data',
			'data' 		=> ''
		];

		$this->load->view($this->template .'head', $data);
		$this->load->view($this->template .'sidebar', $data);
		$this->load->view($this->template .'header', $data);

		$this->load->view($this->folder .'add', $data);
		
		$this->load->view($this->template .'footer', $data);

	}

	public function save(){
		
		$data = [
				'nama_kategori'	=> $_POST['nama_kategori']
			];

		$this->M_kategori->save($data);

		redirect($this->menu, 'refresh');
	}

	public function delete(){
		
		$id = $this->uri->segment(3);

		$this->M_kategori->delete($id);

		redirect($this->menu, 'refresh');
	}

	public function edit(){

		$id = $this->uri->segment(3);
		
		$data = [
			'title'		=> $this->menu,
			'subtitle'	=> 'Edit',
			'data' 		=> $this->M_kategori->edit($id)
		];

		$this->load->view($this->template .'head', $data);
		$this->load->view($this->template .'sidebar', $data);
		$this->load->view($this->template .'header', $data);

		$this->load->view($this->folder .'edit', $data);
		
		$this->load->view($this->template .'footer', $data);

	}

	public function update(){

		$id = $this->uri->segment(3);
		
		$data = [
				'nama_kategori'	=> $_POST['nama_kategori']
			];

		$this->M_kategori->update($id, $data);

		redirect($this->menu, 'refresh');
	}

	public function detail(){

		$id = $this->uri->segment(3);
		
		$data = [
			'title'		=> $this->menu,
			'subtitle'	=> 'Detail',
			'data' 		=> $this->M_kategori->edit($id)
		];

		$this->load->view($this->template .'head', $data);
		$this->load->view($this->template .'sidebar', $data);
		$this->load->view($this->template .'header', $data);

		$this->load->view($this->folder .'detail', $data);
		
		$this->load->view($this->template .'footer', $data);

	}

}

/* End of file kategori.php */
/* Location: ./application/controllers/kategori.php */