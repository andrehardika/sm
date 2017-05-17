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

	public function selengkapnya($code = NULL)
	{
		if (is_null($code) || empty($code)) {
			$this->message('Produk tidak ditemukan', 'warning');
			$this->go('produk');
		}else{
			$data['product'] = $this->products_m
			->with_category('fields:name')
			->with_producer('fields:name')
			->get(array('code' => $code));

			$this->render('admin/products/show', $data);
		}
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

	public function sunting($code = NULL)
	{
		if (is_null($code) || empty($code)) {
			$this->message('Produk tidak ditemukan', 'warning');
			$this->go('produk');
		}else{
			$data['product'] = $this->products_m
			->with_category('fields:name')
			->with_producer('fields:name')
			->get(array('code' => $code));

			$data['categories'] = $this->categories_m
			->fields('id,name')
			->get_all();

			$data['producers'] = $this->producers_m
			->fields('id,name')
			->get_all();

			$this->generateCsrf();
			$this->render('admin/products/edit', $data);
		}
	}

	public function ubah($id= NULL)
	{
		if (is_null($id) || empty($id)) {
			$this->message('Produk tidak ditemukan', 'warning');
		}else{
			$input = $this->input->post();

			//jika id kategori ada isinya
			if (!is_null($input['category_id']) || !empty($input['category_id'])) {
			//ambil hanya id kategori
				$input['category_id'] = $this->categories_m->splitIdAndName($input['category_id']);
			//cek keberadaan kategori
				if (!$this->categories_m->checkDataAvailabilityById($input['category_id'])) {
					$this->message('Terjadi kesalahan pada sistem. Ikuti format pengisian kategori produk dengan benar');
					$this->go('produk/sunting');
				}
			}

			//jika id produsen ada isinya
			if (!is_null($input['producer_id']) || !empty($input['producer_id']))  {
			//ambil hanya id produsen
				$input['producer_id'] = $this->producers_m->splitIdAndName($input['producer_id']);
			//cek keberadaan produsen
				if (!$this->producers_m->checkDataAvailabilityById($input['producer_id'])) {
					$this->message('Terjadi kesalahan pada sistem. Ikuti format pengisian produsen produk dengan benar');
					$this->go('produk/sunting');
				}
			}

			if (!isset($input['tax'])) {
				$input['tax'] = NULL;
			}

			//update ke db
			$query = $this->products_m
			->from_form(NULL, array(
				'category_id' => $input['category_id'],
				'producer_id' => $input['producer_id'],
				'tax' => $input['tax']
				), array('id' => $id))
			->update();
			if ($query === FALSE) {
				$this->message('Produk gagal disunting.', 'warning');
			}else{
				$this->message('Produk berhasil disunting.', 'success');
			}
		}
		$this->go('produk');
	}

	public function hapus($code = NULL)
	{
		if (is_null($code) || empty($code)) {
			$this->message('Produk tidak ditemukan.', 'warning');
		}else{
			//TODO
			//cek semua transaksi yang berhubungan dengan produk yang akan dihapus

			//hapus produk
			$query = $this->products_m->delete(array('code' => $code));
			if ($query === FALSE) {
				$this->message('Terjadi kesalahan sistem saat menghapus produk! Coba lagi nanti.', 'danger');
			}else{
				$this->message('Produk berhasil dihapus', 'success');
			}
		}
		$this->go('produk');
	}
}