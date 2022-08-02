<?php

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');

	}
	public function index()
	{
		//echo 'Hi';
		
		$data['result'] = $this->User_model->get_users();
		//var_dump($data);
		$this->load->view('user_view',$data);
		//$this->load->view('layouts/main',$data);
	}

	public function getUser()
	{
		$data['result'] = $this->User_model->get_user(2);
		$this->load->view('user_view',$data);
	}

	public function insert()
	{
		$username = 'Karthi';
		$password = 'secret123';
		$this->User_model->create_user([
			'Username' => $username,
			'Password' => $password
		]);
	}

	public function update()
	{
		$id = 2;
		$username = 'William';
		$password = 'nosecret';

		$this->User_model->update_user([
			'Username' => $username,
			'Password' => $password
		],$id);
	}

	public function delete()
	{
		$id = 3;
		$this->User_model->delete_user($id);
	}

	public function login()
	{
		$this->form_validation->set_rules('username','Usernmae','trim|required|min_length[3]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');

		if($this->form_validation->run() == FALSE)
		{
			$data = array(
				'errors' => validation_errors()
			);
			$this->session->set_flashdata($data);
			redirect('home');
		}
	}
}
