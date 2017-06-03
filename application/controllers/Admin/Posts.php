<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class Posts extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->config();
		$this->load->library('ion_auth');
	}

	public function index()
	{
		$this->blade->render('Admin/Dashboard/posts', [
			"title" => "Pos",
			"config" => $this->bb_config,
			"users" => $this->ion_auth->user()->row()
		]);
	}

	public function filterBy($filter)
	{
		switch ($filter) {
			case 'value':
				# code...
				break;
			
			default:
				# code...
				break;
		}
	}

}