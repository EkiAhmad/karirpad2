<?php
class EmpModel extends CI_Model{
	function employeeList(){
		$hasil=$this->db->get('master_barang');
		return $hasil->result();
	}
	function saveEmp(){
		$harga = $this->input->post('harga');
		if ($harga >= 40000) {
			$diskon = $harga*0.1;
		} else if ($harga >= 20000 && $harga < 40000) {
			$diskon = $harga*0.05;
		} else {
			$diskon = 0;
		}
		$data = array(				
				'nama' 			=> $this->input->post('nama'), 
				'kategori' 			=> $this->input->post('kategori'), 
				'harga' 	=> $harga, 
				'diskon' 	=> $diskon, 
			);
		$result=$this->db->insert('master_barang',$data);
		return $result;
	}
	function updateEmp(){
		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$kategori=$this->input->post('kategori');
		$harga=$this->input->post('harga');
		// $diskon=0;
		
		// if ($harga >= 40000) {
		// 	$diskon = $harga*0.1;
		// } else if ($harga >= 20000 && $harga < 40000) {
		// 	$diskon = $harga*0.05;
		// } else {
		// 	$diskon = 0;
		// }

		$this->db->set('nama', $nama);
		$this->db->set('kategori', $kategori);
		$this->db->set('harga', $harga);
		// $this->db->set('diskon', $diskon);
		$this->db->where('id', $id);
		$result=$this->db->update('master_barang');
		return $result;	
	}
	function deleteEmp(){
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->delete('master_barang');
		return $result;
	}
	// function saveUpload($image){
 //        $data = array(
 //                'gambar' => $image
 //            );  
 //        $result= $this->db->insert('master_barang',$data);
 //        return $result;
 //    }	
}