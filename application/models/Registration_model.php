<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_model extends CI_Model {

	//insert data
	public function addRecord($data)
	{
		/*echo "<pre>";
		print_r($data);*/
		$this->db->insert('users',$data);
		return $this->db->insert_id();
	}
	//display data
		public function showdata($limit,$start)
	{
		/*echo "<pre>";
		print_r($data);*/
		$this->db->select('*');
		$this->db->from('users');
		$this->db->limit($limit,$start);
		$query = $this->db->get()->result();
		//echo $this->db->last_query(); die(); 
		//print_r($query);die;
		return $query;

    }
	//Update data
		public function updateRecord($data)
	{
		//echo "update Data";die;
		//echo "<pre>";
		//print_r($data);
		//echo $data['id'];die;
		$this->db->where('id',$data['id']);
		$this->db->update('users',$data);
		//echo $this->db->last_query(); die;
		return true;
	}
	//Update data
		public function deleteRecord($id)
	{
		//echo "Delete".$id;die;
		//echo "<pre>";
		//print_r($data);
		
		$this->db->where('id',$id);
		$this->db->delete('users');
		return true;
	}
		//get total records
		public function getTotalRow()
	{

		return $this->db->count_all("users");
	}
	
	
}