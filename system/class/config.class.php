<?
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2015 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Config extends Alatis {

    public function __construct($db) {
      parent::__construct($db);
   	}

    public function View() {
        $SQL = "SELECT * FROM ".PREF."config LIMIT 1";
        $rs = $this->db->execute($SQL);
        return $rs->fields;
   	}

    public function Update($id, $data) {
        $this->db->AutoExecute(PREF."config", $data, 'UPDATE', 'id='.$id);
    }

    public function viewDir($dir) {
        if($handle = opendir(A_PATH.$dir)) {
            while(false !== ($file = readdir($handle))) {
                if ($file != "." && $file != "..") {
                    $arr[] = array(
                        "file" => $file
                    );
                }
            }
            closedir($handle);
            return $arr;
        }
    }

    public function saveBase64ToImage($base64DataString, $path) {
        list($dataType, $imageData) = explode(';', $base64DataString);
        $imageExtension = explode('/', $dataType)[1];
        list(, $encodedImageData) = explode(',', $imageData);
        $decodedImageData = base64_decode($encodedImageData);
        $filename = uniqid();
        file_put_contents(A_PATH.$path.$filename.".{$imageExtension}", $decodedImageData);
        return $path.$filename.".{$imageExtension}";
    }

    public function isFileTypeAllowed($fileType) {
        $allowedFileTypes = array('jpg', 'jpeg', 'png', 'gif', 'pdf');
        return in_array($fileType, $allowedFileTypes);
    }

}

?>
