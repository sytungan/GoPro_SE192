<?php
include "../../config.php";
class FileDB {
    protected $conn;
    public function __construct() {
        $this->conn = new config();
    }
    public function getFileDB(){
        $result = $this->conn->traverse("SELECT * FROM file");
        return $result;
    }
    public function uploadFile($file,$url,$date) {
      $sql = "INSERT INTO file (file,url,date)
      VALUES ('$file','$url','$date')";
	  
      if ($this->conn->traverseFunc($sql) === TRUE) {
        echo ("Thêm dữ liệu thành công");
    }
    }
    public function deleteFile($url) {
        $sql = "DELETE FROM file WHERE url = '$url'";
	    $this->conn->traverseFunc($sql);
	    //$result = $connect->query($sql);
	    //}
	    //Đóng database
	    //$connect->close();
	    $message = "Xóa thành công";
	    echo "<script type='text/javascript'>alert('$message'); close(); </script>";
    }
}
?>