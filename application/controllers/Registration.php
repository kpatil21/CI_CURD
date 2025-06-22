<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Registration_model');
		$this->load->library('pagination');
	}


	public function index()
	{

	echo 'call Registration Function';die;
		
	}

    public function email()
	{
		 echo 'In email';
		/*$this->load->library('email');

        $this->email->from('your@example.com', 'Your Name');
        $this->email->to('someone@example.com');
        $this->email->cc('another@another-example.com');
        $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();*/
	}

	public function add()
	{
		if($this->input->post())
		{
			//echo "In"; die();
			$this->form_validation->set_error_delimiters('<div class="error">','</div>');
			$this->form_validation->set_rules('username','USERNAME','required|callback_checkname');
			$this->form_validation->set_rules('email','EMAIL','required|valid_email');
			$this->form_validation->set_rules('phone','PHONE','required');
			//$this->form_validation->set_message('required','{field} must be filled!');
			$this->form_validation->set_message('valid_email','Please Enter valid Email!');

			    // Run validation
        if ($this->form_validation->run() !== FALSE) {
             // Validation failed, reload form with errors
			 //echo validation_errors();
                //echo "Error";
				$records['name'] = $this->input->post('username');
				$records['email'] = $this->input->post('email');
				$records['phone'] = $this->input->post('phone');
				
				
				$response = $this->Registration_model->addRecord($records);
				//echo $response;die;
				if($response)
				{
					$this->session->set_flashdata('success_message', 'Record added successfully!');
					//$message["AlertMessage"] = "Operation completed successfully!";
					
                     redirect('Registration/table/');
				}else{
					
				}	
            } else {
                  // Validation passed, process form
                echo "Error";
              // Proceed with processing (e.g., authentication)
            }
		}
		$this->load->view('assets/header');
		$this->load->view('reg_form');
		$this->load->view('assets/footer');
	}
  //display Data
  public function table()
  {
  
	//code for pagination
	$param = array();
	$start = ($this->uri->segment(3)) ? ($this->uri->segment(3) -1) : 0;
	$limit = 10;
	$config['base_url'] = base_url('Registration/table/');
	$config['total_rows'] = $this->Registration_model->getTotalRow();
	//echo $config['total_rows'];die;
	$config['per_page'] = $limit;
	$config['uri_segment'] = 3;

	// Bootstrap 4 compatible pagination
$config['full_tag_open'] = '<nav><ul class="pagination justify-content-left">';
$config['full_tag_close'] = '</ul></nav>';

$config['first_link'] = 'First';
$config['first_tag_open'] = '<li class="page-item">';
$config['first_tag_close'] = '</li>';

$config['last_link'] = 'Last';
$config['last_tag_open'] = '<li class="page-item">';
$config['last_tag_close'] = '</li>';

$config['next_link'] = '&raquo;';
$config['next_tag_open'] = '<li class="page-item">';
$config['next_tag_close'] = '</li>';

$config['prev_link'] = '&laquo;';
$config['prev_tag_open'] = '<li class="page-item">';
$config['prev_tag_close'] = '</li>';

$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
$config['cur_tag_close'] = '</a></li>';

$config['num_tag_open'] = '<li class="page-item">';
$config['num_tag_close'] = '</li>';

$config['attributes'] = array('class' => 'page-link');

	$this->pagination->initialize($config);

     

	$param['userList'] = $this->Registration_model->showdata($limit,$start);
	$param['links'] = $this->pagination->create_links();
	//echo "<pre>";
	//print_r($data);die;
	$this->load->view('assets/header');
	$this->load->view('reg_table',$param);
	$this->load->view('assets/footer');
  }

  //Edit data
  public function edit()
  {
	//echo "Edit";
	            $records['id'] = $this->input->post('uid');
		        $records['name'] = $this->input->post('username');
				$records['email'] = $this->input->post('email');
				$records['phone'] = $this->input->post('phone');
	$response = $this->Registration_model->updateRecord($records);
	//print_r($response);die;
     if($response)
	 {
         redirect('Registration/table/');
	 }else
	 {
		echo "something went Wrong";die;
	 }
	
  }
    //delete data
  public function delete()
  {
	   $id = $this->input->post('id');
	  //echo "delete";die;
	  $response = $this->Registration_model->deleteRecord($id);
	redirect('Registration/table/');
  }

	//User defined Validation Functions
	public function checkname($str)
	{
       if($str == 'test')
	   {
		  $this->form_validation->set_message('checkname','The {field} field can not contain word "test"');
           return FALSE;
	   }else
	   {
		 return TRUE;
	   }
	}
}
