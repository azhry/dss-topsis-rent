<?php 

class Pemilik extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'pemilik';
	}

	public function index()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'dashboard';
		$this->template($this->data, $this->module);
	}

	public function daftar_ruko()
	{
		$this->data['title']	= 'Daftar Ruko';
		$this->data['content']	= 'daftar_ruko';
		$this->template($this->data, $this->module);
	}

	public function tambah_ruko()
	{
		$this->data['title']	= 'Form Penambahan Ruko Baru';
		$this->data['content']	= 'form_tambah_ruko';
		$this->template($this->data, $this->module);
	}
}