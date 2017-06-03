<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Layouting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->lang->load('auth');
	}

	public function index()
	{
		$bb = $this->config->item('balitbang.config');
		$themePath = APPPATH."views/Templates/".$bb['apperance']['theme'];
		$defaultPath = $themePath."/".$bb['apperance']['theme'].".json";

		if (file_exists($defaultPath))
		{
			$themeConfig = json_decode(file_get_contents($defaultPath), true);

			$this->blade->render('Admin/Dashboard/Components/layouting', array(
				"theme" => $themeConfig
			));
		}
	}

}