<?php 

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'admin';


		$this->data['id_pengguna'] 	= $this->session->userdata('id_pengguna');
		$this->data['username'] 	= $this->session->userdata('username');
	    $this->data['id_role']		= $this->session->userdata('id_role');
		if (!isset($this->data['id_pengguna'], $this->data['username'], $this->data['id_role']))
		{
			$this->session->sess_destroy();
			$this->flashmsg('Anda harus login terlebih dahulu', 'danger');
			redirect('login');
		}

		if ($this->data['id_role'] != 2)
		{
			$this->session->sess_destroy();
			$this->flashmsg('Anda harus login sebagai admin', 'danger');
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->model('ruko_m');
		$this->data['ruko']		= $this->ruko_m->get();
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'dashboard';
		$this->template($this->data, $this->module);
	}

	public function daftar_ruko()
	{
		$this->load->model('ruko_m');

		$this->data['upload_dir'] 	= FCPATH . 'assets/foto/ruko-';
		$this->data['ruko']			= $this->ruko_m->get_by_order('id_ruko', 'DESC');
		$this->data['title']		= 'Daftar Ruko';
		$this->data['content']		= 'daftar_ruko';
		$this->template($this->data, $this->module);
	}

	public function detail_ruko()
	{
		$this->data['id_ruko']	= $this->uri->segment(3);
		$this->check_allowance(!isset($this->data['id_ruko']));

		$this->load->model('ruko_m');
		$this->data['ruko']			= $this->ruko_m->get_row(['id_ruko' => $this->data['id_ruko']]);
		$this->check_allowance(!isset($this->data['ruko']), ['Data ruko tidak ditemukan', 'danger']);

		$this->data['upload_dir'] 			= FCPATH . 'assets/foto/ruko-' . $this->data['ruko']->id_ruko;
		$this->data['files']				= array_values(array_diff(scandir($this->data['upload_dir']), ['.', '..']));
		$this->data['upload_path'] 			= base_url('assets/foto/ruko-' . $this->data['ruko']->id_ruko);
		$this->data['akses_menuju_lokasi']	= json_decode($this->data['ruko']->akses_menuju_lokasi);
		$this->data['pusat_keramaian']		= json_decode($this->data['ruko']->pusat_keramaian);
		$this->data['title']				= 'Detail Informasi Ruko';
		$this->data['content']				= 'detail_ruko';
		$this->template($this->data, $this->module);
	}

	public function verifikasi_ruko()
	{
		$response['status'] = 'failed';
		if ($this->POST('verify'))
		{
			$this->load->model('ruko_m');
			$ruko = $this->ruko_m->get_row(['id_ruko' => $this->POST('id_ruko')]);
			if (isset($ruko))
			{
				switch ($ruko->status)
				{
					case 'Verified':
						$this->ruko_m->update($this->POST('id_ruko'), ['status' => 'Pending']);
						$response['data'] = 'Pending';
						break;

					case 'Pending':
						$this->ruko_m->update($this->POST('id_ruko'), ['status' => 'Verified']);
						$response['data'] = 'Verified';
						break;
				}

				$response['status'] = 'success';
			}
		}

		echo json_encode($response);
	}

	public function tambah_kriteria()
	{
		if ($this->POST('submit'))
		{
			$this->load->model('kriteria_m');
			$type 		= $this->POST('type');
			$details 	= [];
			if ($type == 'range')
			{
				$range_label 	= $this->POST('range_label');
				$range_max 		= $this->POST('range_max');
				$range_min		= $this->POST('range_min');
				$range_value	= $this->POST('range_value');

				for ($i = 0; $i < count($range_label); $i++)
				{
					$details []= [
						'label'	=> $range_label[$i],
						'max'	=> $range_max[$i],
						'min'	=> $range_min[$i],
						'value'	=> $range_value[$i]
					];
				} 
			} 
			elseif ($type == 'option')
			{
				$option_label 	= $this->POST('option_label');
				$option_value	= $this->POST('option_value');

				for ($i = 0; $i < count($option_label); $i++)
				{
					$details []= [
						'label'	=> $option_label[$i],
						'value'	=> $option_value[$i]
					];
				} 
			}

			$this->kriteria_m->insert([
				'key'		=> $this->POST('key'),
				'type'		=> $type,
				'weight'	=> $this->POST('weight'),
				'label'		=> $this->POST('label'),
				'details'	=> json_encode($details)
			]);

			$this->flashmsg('Data kriteria berhasil disimpan');
			redirect('admin/tambah-kriteria');
		}

		$this->data['title']	= 'Form Penambahan Kriteria Baru';
		$this->data['content']	= 'form_tambah_kriteria';
		$this->template($this->data, $this->module);
	}
}