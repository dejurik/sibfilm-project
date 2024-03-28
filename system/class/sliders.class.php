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



/*
    public function ViewAll($filter = array()) {
      $status_filter = '';
      if(isset($filter['visible'])) {
        $status_filter = "AND s.visible = '".$filter['visible']."'";
      }
      $SQL = "SELECT s.* FROM ".PREF."sliders s WHERE 1 $status_filter ORDER BY s.position DESC";
      return $this->db->getAll($SQL);
	}

	//админка
	public function ViewAllCat() {
		$SQL = "SELECT sc.* FROM ".PREF."sliders_cat AS sc ORDER BY sc.id_item DESC";
		return $this->db->getAll($SQL);
   	}

	public function ViewPhotoCatImages($id) {
		$SQL = "SELECT i.id_item, i.cat_id, i.title, i.image, i.text, i.position, i.visible FROM ".PREF."sliders AS i WHERE i.cat_id in(".$id.") ORDER BY i.position";
		return $this->db->getAll($SQL);
   	}

	public function ViewCat($id) {
		if (is_array($id)) {
			$ids = $id['id_category'];
		} else {
			$ids = $id;
		}
		$SQL = "SELECT sc.id_item, sc.title FROM ".PREF."sliders_cat sc WHERE sc.id_item in(".$ids.")";
		if (is_array($id)) {
			return $this->db->getAll($SQL);
		} else {
			return $this->db->getRow($SQL);
		}
   	}
	
	public function UpdateCatSliders($id, $data) {
		$this->db->AutoExecute(PREF."sliders_cat", $data, 'UPDATE', 'id_item='.$id);
   	}
	
	public function AddCatSliders($data) {
		$this->db->AutoExecute(PREF."sliders_cat", $data, 'INSERT');
		$lastId = $this->db->insert_Id();
		return $lastId;		
   	}

	public function DeletePhoto($id) {
		$SQL = "SELECT image FROM ".PREF."sliders WHERE id_item = ".$id;
		$rs = $this->db->Execute($SQL);
		$num = $rs->RecordCount();
		if ($num > 0) {
			unlink("uploads/sliders/".$rs->fields['image']);
		}
		$SQL = "DELETE FROM ".PREF."sliders WHERE id_item = ".$id;
		$rs = $this->db->Execute($SQL);		
		return $rs;
   }

	public function DeleteCat($id) {
		$SQL = "DELETE FROM ".PREF."sliders_cat WHERE id_item = ".$id;
		$rs = $this->db->Execute($SQL);		
   }
   
   public function AddPhoto($data) {
		$this->db->AutoExecute(PREF."sliders", $data, 'INSERT');
		$lastId = $this->db->insert_Id();
		$datas['position'] = $lastId;
		$this->db->AutoExecute(PREF."sliders", $datas, 'UPDATE', 'id_item='.$lastId);
		return $lastId;		
   	}

	public function ViewOnePhoto($id) {
		$SQL = "SELECT * FROM ".PREF."sliders WHERE id_item = ".$id;
		return $this->db->getRow($SQL);
   	}
	
	public function EditPhoto($id, $data) {
		if(isset($data['image'])){
			$SQL = "SELECT image FROM ".PREF."sliders WHERE id_item = ".$id;
			$rs = $this->db->Execute($SQL);
			$num = $rs->RecordCount();
			if ($num > 0) {
				unlink("uploads/sliders/".$rs->fields['image']);
			}			
		}
		$this->db->AutoExecute(PREF."sliders", $data, 'UPDATE', 'id_item='.$id);
   	}*/

}

?>