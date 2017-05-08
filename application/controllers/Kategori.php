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
		
		//ambil hanya id sub
		$input['parent_id'] = $this->categories_m->splitIdAndName($input['parent_id']);
		
		//cek keberadaan data
		if (!$this->categories_m->checkDataAvailabilityById($input['parent_id'])) {
			$this->message('Terjadi kesalahan pada sistem. Ikuti format pengisian sub-kategori dengan benar');
			$this->go('kategori/create');
		}

		//menentukan level kategori baru
		$input['level'] = $this->categories_m->defineLevelCategoryByParentId($input['parent_id']);
		
		//TODO upload icon kategori

		$input['slug'] = $this->slug->create_uri($input);

		//insert ke db
		$query = $this->categories_m
		->from_form(NULL, array(
			'parent_id' => $input['parent_id'],
			'slug' => $input['slug'],
			'level' => $input['level']
		))
		->insert();
		if ($query === FALSE) {
			$this->message('Kategori gagal ditambahkan.', 'warning');
		}else{
			$this->message('Kategori berhasil ditambahkan.', 'success');
		}

		$this->go('kategori');
	}
}