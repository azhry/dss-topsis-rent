<?php 

class Home extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'home';
	}

	public function index()
	{
		$this->load->model('ruko_m');
		$this->data['ruko']		= $this->ruko_m->get_by_order('id_ruko', 'DESC');
		$this->data['title']	= 'Home';
		$this->data['content']	= 'home';
		$this->template($this->data, $this->module);	
	}

	public function cari()
	{
		$this->load->library('Topsis/topsis');
		$this->load->model('ruko_m');
		
		$this->data['criteria']	= $this->topsis->criteria;
		$this->data['config']	= $this->data['criteria']->get_config();
		$this->data['ruko']		= json_decode(json_encode($this->ruko_m->get()), true);
		
		$matrix = $this->topsis->fit($this->data['ruko'], ['ruko', 'id_ruko', 'id_pengguna', 'latitude', 'longitude']);
		$weight = $this->topsis->weight();
		$distance = $this->topsis->solution_distance();
		$rank = $this->topsis->rank();
		$this->data['ruko']		= $rank;

		$this->data['title']	= 'Cari Ruko';
		$this->data['content']	= 'cari';
		$this->template($this->data, $this->module);
	}

	public function rank()
	{

	}
}