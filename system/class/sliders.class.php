<?
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Sliders extends Alatis {

	public function __construct($db) {
		parent::__construct($db);
	}

		public function ViewRandSlider() {
				$SQL = "SELECT * FROM ".PREF."sliders";
				return $this->db->getRandRow($SQL);
		}

		public function ViewAll($filter = array()) {
			$status_filter = '';
			if(isset($filter['visible'])) {
				$status_filter = "AND s.visible = '".$filter['visible']."'";
			}
			$SQL = "SELECT s.* FROM ".PREF."sliders s WHERE 1 $status_filter ORDER BY s.position DESC";
			return $this->db->getAll($SQL);
		}

		public function View($id) {
			$SQL = "SELECT * FROM ".PREF."sliders WHERE id_item = ".$id;
			return $this->db->getRow($SQL);
		}

		public function UpdateSlideId($id, $data) {
			$this->db->AutoExecute(PREF."sliders", $data, 'UPDATE', 'id_item='.$id);
		}

		public function AddSlide($data) {
			$this->db->AutoExecute(PREF."sliders", $data, 'INSERT');
			$lastId = $this->db->insert_Id();
			$pos['position'] = $lastId;
			$this->db->AutoExecute(PREF."sliders", $pos, 'UPDATE', 'id_item='.$lastId);
			return $lastId;
		}

		public function DeleteSlideId($id) {
			$SQL = "SELECT * FROM ".PREF."sliders WHERE id_item = ".$id;
			$rs = $this->db->getRow($SQL);
			if ($rs['image'] != '') {
				unlink(A_PATH.$rs['image']);
			}
			if ($rs['videofile'] != '') {
				unlink(A_PATH.$rs['videofile']);
			}
			$SQL = "DELETE FROM ".PREF."sliders WHERE id_item IN (".$id.")";
			$this->db->execute($SQL);
	}

}

?>