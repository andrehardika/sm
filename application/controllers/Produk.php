<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Produk extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('dump', 'potong_teks', 'cek_file'));
		$this->load->model(array('products_m'));

		$this->slug_config($this->products_m->table, 'name');
	}

	public function index()
	{
		$data['products'] = $this->products_m->get_all();
		$this->render('admin/products/index', $data);
	}
}