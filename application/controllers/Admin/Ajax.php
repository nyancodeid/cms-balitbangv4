<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

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
		if ($this->input->is_ajax_request())
		{
			$identity = $this->input->post('identity', true);
			$password = $this->input->post('password', true);
			$remember = $this->input->post('remember_me');

			$doLogin = $this->ion_auth->login($identity, $password, $remember);

			if ($doLogin)
			{
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				$this->response([
					"status" => true,
					"message" => "Login successfuly"
				]);
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				$this->response([
					"status" => false,
					"message" => "Error Login",
					"errors" => $this->ion_auth->errors()
				]);
			}
		}
		else
		{
			$this->response([
				"status" => false,
				"message" => "not allowed method"
			]);
		}
	}

	public function logout()
	{
		if ($this->input->is_ajax_request())
		{
			$logout = $this->ion_auth->logout();

			$this->session->set_flashdata('message', $this->ion_auth->messages());

			$this->response([
				"status" => true,
				"message" => "Logout successfuly"
			]);
		}
	}

	private function response($data)
	{
		$res = json_encode($data);

		print_r($res);
	}
}