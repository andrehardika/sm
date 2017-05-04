<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Homepage extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->_accessable = TRUE;
		$this->load->helper(array('dump', 'potong_teks', 'cek_file'));
		// $this->load->model(array(''));
	}

	public function index()
	{
		dump('ini beranda');
	}
}