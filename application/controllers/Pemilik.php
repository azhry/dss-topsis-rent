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
			$assets_url = FCPATH . 'assets/';
			$uploaded_files = $this->POST('uploaded_files');

			$this->data['ruko'] = [
				'id_pengguna'					=> 1,
				'ruko'							=> $this->POST('ruko'),
				'biaya_sewa'					=> $this->POST('biaya_sewa'),
				'luas_bangunan'					=> $this->POST('luas_bangunan'),
				'akses_menuju_lokasi'			=> json_encode($this->POST('akses_menuju_lokasi')),
				'pusat_keramaian'				=> json_encode($this->POST('pusat_keramaian')),
				'zona_parkir'					=> $this->POST('zona_parkir'),
				'jumlah_pesaing_serupa'			=> $this->POST('jumlah_pesaing_serupa'),
				'tingkat_konsumtif_masyarakat'	=> $this->POST('tingkat_konsumtif_masyarakat'),
				'lingkungan_lokasi_ruko'		=> $this->POST('lingkungan_lokasi_ruko'),
				'latitude'						=> $this->POST('latitude'),
				'longitude'						=> $this->POST('longitude')
			];
			$this->ruko_m->insert($this->data['ruko']);

			$uploaded_dir = $assets_url . 'foto/ruko-' . $this->db->insert_id();
			mkdir($uploaded_dir);
			foreach ($uploaded_files as $file)
			{
				rename($assets_url . 'temp_files/' . $file, $uploaded_dir . '/' . $file);
			}
			$this->remove_directory($assets_url . 'temp_files/thumbnail');
			$this->remove_directory($assets_url . 'temp_files');

			$this->flashmsg('Data ruko berhasil disimpan');
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