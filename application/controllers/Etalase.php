<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Etalase extends MY_Controller
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
		$this->render('admin/displays/index');
	}
}