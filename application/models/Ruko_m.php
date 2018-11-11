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
}