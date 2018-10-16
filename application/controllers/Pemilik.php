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
		if ($this->POST('submit'))
		{
			$this->load->model('ruko_m');
			
			$uploaded_files = $this->POST('uploaded_files');
			redirect('pemilik/tambah-ruko');
		}

		$this->data['title']	= 'Form Penambahan Ruko Baru';
		$this->data['content']	= 'form_tambah_ruko';
		$this->template($this->data, $this->module);
	}

	public function upload_handler()
	{
		require_once(FCPATH . '/assets/jQuery-File-Upload-9.23.0/server/php/index.php');
	}
}