<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Kategori extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('dump', 'potong_teks', 'cek_file'));
		$this->load->model(array('categories_m'));

		$this->slug_config($this->categories_m->table, 'name');
	}

	public function index()
	{
		$data['categories'] = $this->categories_m->with_trashed()->get_all();

		$this->render('admin/categories/index', $data);
	}

	public function tambah()
	{
		//ambil data kategori untuk keperluan datalist
		$data['categories'] = $this->categories_m->fields('id,name')->get_all();

		$this->generateCsrf();
		$this->render('admin/categories/create', $data);
	}

	public function simpan()
	{
		//TODO SIMPAN
		$input = $this->input->post();
		dump($input);
	}
}