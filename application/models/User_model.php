<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	
	public function getdata()
	{
		
		$this->db->select('*');
		$this->db->from('test');
		$query = $this->db->get()->result();
		$responsedata = array('id'=>1,'name'=>'santosh');
		//$this->load->view('welcome_message');
		return $query;
	}
    //Active Records or Query Builder
	public function runquery()
	{
		//insert multiple data
		 /*
		 $this->db->insert_batch('users', $data);
		 $this->db->insert('users', $data);

		 $data = [
			array(
				 'name' => 'test',
		   'email'=> 'test@gmail.com',
		   'phone'=> 8012727495
			),
			array(
		   'name' => 'test2',
		   'email'=> 'test2@gmail.com',
		   'phone'=> 8012357565
			),
		 ];*/
		 //insert single data
		  /*$data = [
			
		   'name' => 'test',
		   'email'=> 'test@gmail.com',
		   'phone'=> 8012727495
			
		 ];*/

		 //Update
		/* $data = [
			
		   'name' => 'updated',
		   'email'=> 'updated@gmail.com',
		   'phone'=> '8012727495'
			
		 ];
		//echo $this->db->last_query(); die();  
	   $this->db->where('id', 2);
	   $this->db->update('users', $data);*/

	   //Delete
	    /*$this->db->where('id', 2);
	   $this->db->delete('users');*/

	   //SELECT
	  $arrayid = Array(1,2,3,4);
	   $this->db->select('*');
	   $this->db->from('users');
	   //$this->db->join('subject', 'subject.stu_id = student.id', 'LEFT');
	    //$this->db->where('id', 3);
		//$this->db->or_where('id!=', 3);
		//$this->db->where_in('id', 3);
		//$this->db->or_where_in('id', 3);
		//$this->db->where_not_in('id', 3);
	   //result as objects
	   //$query = $this->db->get()->Result();
	   //result as array
	   //echo $this->db->last_query(); die(); 


	   //Like
	   //$this->db->like('name','shubham');
	   //$this->db->or_like('name','shubham');
	   //$this->db->not_like('name','shubham');
	    //$this->db->or_not_like('name','shubham');

		 //Group By
		 //$this->db->group_by('id');
		// $this->db->group_by(array('id','name'));

		//OrderBy
		//$this->db->order_by('id','DESC');
		//$this->db->order_by('name','DESC');


		//Limt
		//$this->db->limit(10,1);

		//multiple wheres
		/*$this->db->select('*')->from('user')
		    ->$group_start()
			    ->where('name','')
				->or_group_start()
				   ->where('id',2)
				   ->where('id',3)
				 ->end_group()
			->end_group()
			->where('email','abc')
			->get();	*/   
			       
	   $query = $this->db->get()->result_array();

	   echo "<pre>";
	   print_r($query);

	   
	}
}
