<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdata extends CI_Model {
	public function icon(){
		$sql = "SELECT * FROM icon ORDER BY nama";
		$querySQL = $this->db->query($sql);
		if($querySQL){return $querySQL->result();}
		else{return 0;}
	}

	public function jumlahsistem(){
		$sql = "SELECT COUNT(*) AS jumlah FROM sistem";
		$querySQL = $this->db->query($sql);
		if($querySQL){return $querySQL->result();}
		else{return 0;}
	}

	public function jumlahform(){
		$sql = "SELECT COUNT(*) AS jumlah FROM form";
		$querySQL = $this->db->query($sql);
		if($querySQL){return $querySQL->result();}
		else{return 0;}
	}

	public function jumlahakun(){
		$sql = "SELECT COUNT(*) AS jumlah FROM akses";
		$querySQL = $this->db->query($sql);
		if($querySQL){return $querySQL->result();}
		else{return 0;}
	}
}