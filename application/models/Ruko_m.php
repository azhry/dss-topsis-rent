<?php 

class Ruko_m extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']	= 'ruko';
		$this->data['primary_key']	= 'id_ruko';
	}

	public function get_ruko_row($cond)
	{
		$this->db->select('*')
			->from($this->data['table_name'])
			->join('pengguna', 'pengguna.id_pengguna = ' . $this->data['table_name'] . '.id_pengguna')
			->where($cond);

		$query = $this->db->get();
		return $query->row();
	}

	public function get_range()
	{
		$min_values = $this->get_min_values();
		$max_values = $this->get_max_values();

		$min_biaya_sewa 	= $min_values->biaya_sewa;
		$max_biaya_sewa 	= $max_values->biaya_sewa;
		$min_luas_bangunan 	= $min_values->luas_bangunan;
		$max_luas_bangunan 	= $max_values->luas_bangunan;
		$min_zona_parkir 	= $min_values->zona_parkir;
		$max_zona_parkir 	= $max_values->zona_parkir;

		return [
			'biaya_sewa'	=> $this->calculate_range($min_biaya_sewa, $max_biaya_sewa, 5),
			'luas_bangunan'	=> $this->calculate_range($min_luas_bangunan, $max_luas_bangunan, 5),
			'zona_parkir'	=> $this->calculate_range($min_zona_parkir, $max_zona_parkir, 5)
		];
	}

	private function calculate_range($min, $max, $n)
	{
		$range = ($min + $max) / $n;
		$range_set = [];
		for ($i = 0; $i < $n; $i++)
		{
			if ($i > 0) $min += 0.1;

			$range_set []= [
				'min'	=> $min,
				'max'	=> $min + $range
			];

			$min += $range;
		}

		return $range_set;
	}

	private function get_min_values()
	{
		$this->db->select([
			'MIN(biaya_sewa) AS biaya_sewa',
			'MIN(luas_bangunan) AS luas_bangunan',
			'MIN(zona_parkir) AS zona_parkir',
			'MIN(jumlah_pesaing_serupa) AS jumlah_pesaing_serupa'
		])->from($this->data['table_name'])
		  ->where(['status' => 'Verified']);

		$query = $this->db->get();
		return $query->row();
	}

	private function get_max_values()
	{
		$this->db->select([
			'MAX(biaya_sewa) AS biaya_sewa',
			'MAX(luas_bangunan) AS luas_bangunan',
			'MAX(zona_parkir) AS zona_parkir',
			'MAX(jumlah_pesaing_serupa) AS jumlah_pesaing_serupa'
		])->from($this->data['table_name']);

		$query = $this->db->get();
		return $query->row();
	}
}