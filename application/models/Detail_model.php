<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_model extends CI_Model
{
	public $table = 'detail_penjualan';
	public $id = 'detail_penjualan.id';
	public function __construct()
	{
		parent::__construct();
	}
	public function get()
	{
		$this->db->select('k.*,p.nama as nama, p.harga as harga');
		$this->db->from('keranjang k');
		$this->db->join('sepatu p', 'k.id_sepatu = p.id');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getById($id)
	{
		$this->db->select('d.*,r.nama as nama, b.nama as sepatu');
        $this->db->from('detail_penjualan d');
        $this->db->join('user r', 'd.id_user = r.id');
        $this->db->join('sepatu b', 'd.id_sepatu = b.id');
        $this->db->where('d.no_penjualan', $id);
		//$this->db->from($this->table);
		//$this->db->where('no_penjualan', $id);
		$query = $this->db->get();
		//return $query->row_array();
		return $query->result_array();
	}

	public function insert($data)
	{
		return $this->db->insert_batch($this->table, $data);
	}
	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}
	public function getByUser($id)

    {
        $idu = $this->session->userdata('id');
        $this->db->select('d.*,b.nama as nama_sepatu');
        $this->db->from('detail_penjualan d');
        $this->db->join('sepatu b', 'd.id_sepatu = b.id');
        $this->db->where('d.no_penjualan', $id, 'AND d.id_user=' . $idu);
        $this->db->where('d.id_user=' . $idu);
        $query = $this->db->get();
        return $query->result_array();
    }
	function charts()
	{
		$this->db->select('d.*, b.nama as sepatu, sum(d.jumlah) as jum');
		$this->db->from('detail_penjualan d');
		$this->db->join('sepatu b', 'd.id_sepatu = b.id');
		$this->db->group_by('d.id_sepatu');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
}
