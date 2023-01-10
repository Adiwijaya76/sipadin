<?php
defined('Basepath') OR exit ('No direct script access allowed');
class Mlogin extends CI_Model{
    public function cek_login(){
        if($this->session->userdata(sesi)){
            $a= dekripsi($this->encryption->decrypt(base64_decode($this->session->userdata(sesi))));
            $b=explode("|", $a);
            $id=$b[0];
            $pas=$b[1];
            $dx = $this->login($id,$pas);
            if(is_array($dx)){
				if(count($dx)>0){
					foreach($dx as $t){$idlevel = $t->id_level;}
				}else{$idlevel = "";}
			}else{$idlevel = "";}
			if($idlevel == ""){
				return 0;
                }else{
                    if($idlevel == "00"){
                        $sql = "SELECT a.id, a.nama, a.username, a.id_level, a.status, b.id AS id_sistem, (SELECT nama FROM level WHERE id = a.id_level) AS level, b.nama AS sistem, b.icon, b.deskripsi FROM akses AS a, sistem AS b WHERE a.id = '$id' AND a.password = '$pas' AND a.status = 'Y' GROUP BY a.id, a.username, b.id";
                    }else{
                        $sql = "SELECT a.id, a.nama, a.username, a.id_level, a.status, c.id_sistem, d.nama AS level, e.nama AS sistem, e.icon, e.deskripsi FROM akses AS a LEFT JOIN form_level AS b ON a.id_level = b.id_level LEFT JOIN form AS c ON b.id_form = c.id LEFT JOIN level AS d ON a.id_level = d.id LEFT JOIN sistem AS e ON c.id_sistem = e.id WHERE a.id = '$id' AND a.password = '$pas' AND a.status = 'Y' GROUP BY a.id, a.username, c.id_sistem";
                    }
                    $querySQL = $this->db->query($sql);
                    return $querySQL->result();
                }
        }else{return 0;}
    }
    public function login($u, $p){
		$sql = "SELECT * FROM akses WHERE (id = '$u' OR username = '$u') AND password = '$p' AND status = 'Y'";
		$querySQL = $this->db->query($sql);
		if($querySQL){
			return $querySQL->result();
		}else{return 0;}
	}
        
}