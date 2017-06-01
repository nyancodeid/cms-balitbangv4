<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class Dashboard extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->config();
		$this->load->library('ion_auth');
	}

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('bb-admin/login');

			return false;
		}

		$this->blade->render('Admin/Dashboard/index', [
			"title" => "Dashboard",
			"config" => $this->bb_config
		]);
	}
}