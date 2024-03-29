<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BaiHat_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}


	public function Get_Danhsachbaihat($currentpage,$limit,$keyword)
	{
		$start=($currentpage-1)*$limit;
		if($keyword==="")
		{
			$sql="Select * from baihat order by luotnghe desc limit $start, $limit";
		}
		else
		{
			$sql="Select * from baihat where tenbaihat like '%$keyword%' limit $start,$limit";
		}
		$danhsachbaihat=$this->db->query($sql);
		$danhsachbaihat=$danhsachbaihat->result_array();
		$listbaihat=array();
		foreach ($danhsachbaihat as $key => $value) {
			$danhsachcasi=$this->GetCaSi($value['idbaihat']);
			$baihat =array(
				"idbaihat"=>$value['idbaihat'],
				"tenbaihat"=>$value['tenbaihat'],
				"luotnghe"=>$value['luotnghe'],
				"casi"=>$danhsachcasi
			);
			array_push($listbaihat,$baihat);
		}

		foreach($listbaihat as $row)
		{
			echo '<tr class="item-baihat">';
			echo '<td>';										
			echo '<div class="content-baihat">';											
			echo '<a href="baihat/trinhphatnhac/'.$row['idbaihat'].'" class="item-baihat-tenbaihat">'.$row['tenbaihat'].'</a>-';

			foreach ($row['casi'] as $key => $value) {
				echo '<a href='.base_url().'ThongTinCaSi/casi/'.$value['idcasi'].' class="item-baihat-tencasi">'.$value['tencasi'].'</a>';	
				if($value !== end($row['casi']))
					echo ",";
			}		

			echo '</div>';											
			echo '</td>';												
			echo '<td>';									
			echo '</td>';
			echo '<td>';
			echo '<div class="item-baihat-luotnghe">'.$row['luotnghe'].'<span class="item-baihat-icon"><i class="fa fa-headphones " aria-hidden="true"></i></span></div>';
			echo '</td>';
			echo '<td>';
			echo '<a class="item-baihat-icon" href="'.base_url().'BaiHat/TrinhPhatNhac/'.$row['idbaihat'].'"><i class="fa fa-play" aria-hidden="true"></i></a>';
			echo '<span class="item-baihat-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>';
			echo '<span class="item-baihat-icon"><i class="fa fa-download" aria-hidden="true"></i></span>';
			echo '</td>';										
			echo '</tr>';	
		}
	}

	public function get_TotalRecord($keyword)
	{
		if($keyword===""){
			$sql="Select * from baihat";
		}
		else{
			$sql="Select * from baihat where baihat.tenbaihat like '%$keyword%'";
		}
		$dulieu=$this->db->query($sql);
		$rowcount = $dulieu->num_rows();
		return $rowcount;
	}

	public function show_Danhsachbaihat_keyword($keyword,$limit)
	{
		if($keyword===""){
			$sql="Select * from baihat order by luotnghe desc limit 0, $limit";
		}
		else{
			$sql="Select * from baihat where baihat.tenbaihat like '%$keyword%' limit 0, $limit";
		}
		$result=$this->db->query($sql);
		return $result->result_array();
	}

	public function Get_theLoai($khuvuc)
	{
		$this->db->select('tentheloai,idtheloai');
		$this->db->where('khuvuc', $khuvuc);
		$dulieu=$this->db->get('theloai');
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function Get_danhsach_hot()
	{
		$sql="Select distinct(idcasi),tencasi,duongdananhcasi from casi where idcasi in (select idcasi from baihat bh, baihat_casi ct where bh.idbaihat=ct.idbaihat order by luotnghe desc) and tencasi not in ('Various Artist') limit 6";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function GetCasi($idbaihat)
	{
		$sql="Select casi.idcasi,casi.tencasi from casi,baihat_casi where casi.idcasi=baihat_casi.idcasi and idbaihat=$idbaihat";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}


	public function Get_Danhsachbaihat_Theloai($idtheloai)
	{
		$sql="Select * from baihat where idtheloai='1' order by luotnghe desc ";
		$dulieu=$this->db->query($sql);
		$num_row=$dulieu->num_rows();
		$dulieu=$dulieu->result_array();
		return array('dulieu'=>$dulieu,'num_row'=>$num_row);
	}



}

/* End of file BaiHat_model.php */
/* Location: ./application/models/BaiHat_model.php */
