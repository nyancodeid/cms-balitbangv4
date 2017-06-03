<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('template');
	}

	public function index()
	{
		$bb_config = $this->config->item('balitbang.config');

		$this->template->load($bb_config['apperance']['theme'], 'index', ["title" => "How Ho"]);
	}

}