<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrinhPhatPlaylist_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function laythongtinplaylist($idplaylist)
	{
		$sql="Select * from playlist,nguoidung,casi 
		where playlist.idnguoidung=nguoidung.idnguoidung and playlist.idcasi=casi.idcasi
		and idplaylist='$idplaylist'";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;

	}

	public function laythongnguoitaoplaylist($idplaylist)
	{
		$sql="Select * from nguoidung where idnguoidung in (Select idnguoidung from playlist where idplaylist='$idplaylist')";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function laydanhsachbaihat($idplaylist)
	{
		$sql="Select * from playlist,baihat,chitietplaylist
		where playlist.idplaylist=chitietplaylist.idplaylist
		and baihat.idbaihat=chitietplaylist.idbaihat
		and playlist.idplaylist='$idplaylist'";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function laythongthongtincasi($idbaihat)
	{
		$sql="Select casi.idcasi,casi.tencasi from casi,baihat_casi where casi.idcasi=baihat_casi.idcasi and idbaihat=$idbaihat";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}
}

/* End of file TrinhPhatPlaylist_model.php */
/* Location: ./application/models/TrinhPhatPlaylist_model.php */