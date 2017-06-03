<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}

	public function login()
	{
		$this->data['title'] = "Admin Login";
		$this->data['config'] = $this->config->item('balitbang.config');
		$this->data['logged_in'] = $this->ion_auth->logged_in();

		$this->blade->render('Admin/Auth/login', $this->data);
	}
}
