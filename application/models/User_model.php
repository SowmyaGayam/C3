<?php
/**
 * 
 */
class User_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database('default');
		parent::__construct();
	}

	public function get_users()
	{
		$this->load->database('default');
		$query = $this->db->get('users');
		return $query->result();
	}

	public function get_user($user_id)
	{
		$this->db->where('id',$user_id);
		$query = $this->db->get('users');
		return $query->result();
	}

	public function create_user($data)
	{
		$this->db->insert('users',$data);
	}

	public function update_user($data,$id)
	{
		$this->db->where(['id'=>$id]);
		$this->db->update('users',$data);
	} 
	
	public function delete_user($id)
	{
		$this->db->where(['id'=>$id]);
		$this->db->delete('users');
	}
}