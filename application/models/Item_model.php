<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Item_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}
	public function item_insert($data){
		$query = $this->db->insert('stock_monitoring', $data);
			if($query){
				RETURN TRUE;
		}else{
			$this->db->error();
		}
	}
	public function clinic_record()
	{
		$query = $this->db->get('stock_monitoring');
		return $query->result();
	}
	public function update_item($id,$data){
		$this->db->where('item_no', $id);
		$this->db->update('stock_monitoring', $data);
	}
	public function check_item($item_name){
		$this->db->select('item_name');
		$this->db->where('item_name', $item_name);
		$this->db->from('stock_monitoring');
		$query = $this->db->get();
		if($query->num_rows()>0){
		return TRUE;
		}else{
			return FALSE;
		}
	}
	public function delete_item($id){
		$this->db->where('item_no', $id);
		$this->db->delete('stock_monitoring');
	}
	public function less_than_ten(){
		$this->db->select('*');
		$this->db->where('item_quantity <= 10');
		$query = $this->db->get('stock_monitoring');
		return $query->result();
	}
}