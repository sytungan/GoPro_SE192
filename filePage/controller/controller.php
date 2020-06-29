<?php
 include "../model/fileDB.php";
 class File {
   private $db;
   //private $subject;
   public function __construct() {
     $this->db = new FileDB();
     //$this->subject = $subject_;
   }
     public function getFile() {
       return $this->db->getFileDB();
     }
     public function uploadFile($file,$url,$date) {
        $this->db->uploadFile($file,$url,$date);
     }
     public function deleteFile($url) {
        $this->db->deleteFile($url);
    }
}
?>