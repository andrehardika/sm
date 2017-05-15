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
		$this->load->model(array('products_m', 'categories_m', 'producers_m'));
	}

	public function index()
	{
		$data['products'] = $this->products_m
		->with_category('fields:name')
		->with_category('order_by:name,asc')
		->with_producer('fields:name')
		->get_all();
		$this->render('admin/products/index', $data);
	}

	public function tambah()
	{
		$data['categories'] = $this->categories_m
		->fields('id,name')
		->get_all();

		$data['producers'] = $this->producers_m
		->fields('id,name')
		->get_all();

		$this->generateCsrf();
		$this->render('admin/products/create', $data);
	}

	public function simpan()
	{
		$input = $this->input->post();

		//jika id kategori ada isinya
		if (!is_null($input['category_id']) || !empty($input['category_id'])) {
			//ambil hanya id kategori
			$input['category_id'] = $this->categories_m->splitIdAndName($input['category_id']);
			//cek keberadaan kategori
			if (!$this->categories_m->checkDataAvailabilityById($input['category_id'])) {
				$this->message('Terjadi kesalahan pada sistem. Ikuti format pengisian kategori produk dengan benar');
				$this->go('produk/tambah');
			}
		}

		//jika id produsen ada isinya
		if (!is_null($input['producer_id']) || !empty($input['producer_id']))  {
			//ambil hanya id produsen
			$input['producer_id'] = $this->producers_m->splitIdAndName($input['producer_id']);
			//cek keberadaan produsen
			if (!$this->producers_m->checkDataAvailabilityById($input['producer_id'])) {
				$this->message('Terjadi kesalahan pada sistem. Ikuti format pengisian produsen produk dengan benar');
				$this->go('produk/tambah');
			}
		}

		if (!isset($input['tax'])) {
			$input['tax'] = NULL;
		}

		$input['code'] = $this->products_m->get_last_id();

		//insert ke db
		$query = $this->products_m
		->from_form(NULL, array(
			'category_id' => $input['category_id'],
			'producer_id' => $input['producer_id'],
			'code' => $input['code'],
			'tax' => $input['tax']
			))
		->insert();
		if ($query === FALSE) {
			$this->message('Produk gagal ditambahkan.', 'warning');
		}else{
			$this->message('Produk berhasil ditambahkan.', 'success');
		}

		$this->go('produk');
	}
}