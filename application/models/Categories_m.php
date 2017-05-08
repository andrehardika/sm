<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Categories_m extends MY_Model
{
	public $table = 'categories';
	public $primary_key = 'id';
	public $protected = array('id');

	public $rules = array(
		'insert' => array(
			'name' => array(
				'field' => 'name',
				'label' => 'Nama Produk',
				'rules' => 'trim|required|max_length[255]'),
			'description' => array(
				'field' => 'description',
				'label' => 'Deskripsi Produk',
				'rules' => 'trim')
			),
		'update' => array(
			'name' => array(
				'field' => 'name',
				'label' => 'Nama Produk',
				'rules' => 'trim|required|max_length[255]'),
			'description' => array(
				'field' => 'description',
				'label' => 'Deskripsi Produk',
				'rules' => 'trim')
			)
		);

	public function __construct()
	{
		// $this->has_one['organisasi'] = array('Organisasi_m', 'id', 'id_organisasi');
		$this->soft_deletes = TRUE;
		parent::__construct();
	}

	public function splitIdAndName($value)
	{
		return str_replace(' ', '', substr($value, 0, strpos($value, '|')));
	}

	public function checkDataAvailabilityById($id)
	{
		$query = $this->fields('id')->get($id);
		if ($query === FALSE) {
			return FALSE;
		}else{
			return TRUE;
		}
	}

	public function defineLevelCategoryByParentId($category_id)
	{
		if (is_null($category_id) || empty($category_id)) {
			return $sub_category_level = 0;
		}else{
			$sub_category_level= $this->fields('level')->get($category_id)->level;
			return $sub_category_level+1;
		}
	}
}