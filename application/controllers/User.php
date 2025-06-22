<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
	{ 
		$this->load->model('user_model');
		$records = $this->user_model->getdata();
		

		$data = array();
		$data['title'] = "Show Users";
		$data['list'] = array('ram','sham','abhi');
		$data['user_info'] = $records;
		//echo "user controller";
		$this->load->view('user_view', $data);
	}
 
   
		public function setdata()
	{
		//echo "User seeion";die;
		$this->load->view('set_data');
		
	}
	 //set session in CI-3
		public function setsession()
	{
		//echo "User session";die;
		$username = $this->input->post('username');
		$value = array('USER_NAME'=>$username);
		$this->session->set_userdata($value);
		redirect('/user/userwelcome');
		
	}
		public function userwelcome()
	{
		$this->load->view('userwelcome');
		
	}
    //session Out selected keys
	 public function sessionout()
	{
		$this->session->unset_userdata('USER_NAME');
		redirect('/user/userwelcome');
		//echo "In Out";	
	}
 
	//kill entire session
	 public function killsession()
	{
		$this->session->sess_destroy();
		redirect('/user/userwelcome');
		//echo "In Out";	
	}

	public function add()
	{
		//echo "add Users";
		$this->load->view('user');
	}
	public function query()
	{
		//echo "add Users";
		$this->load->model('user_model');
		$this->user_model->runquery();

	}
}
