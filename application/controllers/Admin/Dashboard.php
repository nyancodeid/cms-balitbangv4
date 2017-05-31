<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class Dashboard extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->config();
	}

	public function index()
	{
		$this->blade->render('Admin/Dashboard/index', [
			"title" => "Dashboard",
			"config" => $this->bb_config
		]);
	}
}