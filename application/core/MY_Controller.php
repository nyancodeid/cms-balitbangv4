<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

}

Class Admin_Controller extends MY_Controller
{	
	function __construct()
	{
		parent::__construct();
	}

	public $bb_config;

	public function config()
	{
		$this->bb_config = $this->config->item('balitbang.config');
	}

}

Class Public_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}
}