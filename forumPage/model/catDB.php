<?php
class cat_database {
    private $conn;
    public function __construct() {
        $this->conn=new config();
    }
    public function getCat() { 
        $result= $this->conn->traverse("SELECT COUNT(*) AS 'exist' FROM `catdb` WHERE 1");
        foreach ($result as $p) {
            if ($p['exist'] == 0) return NULL;
        }
        return $this->conn->traverse("SELECT `cat_id`, `cat_name`, `cat_description` FROM `catdb` WHERE 1");
    }
    public function getCatbyID($cat_id) {
        $result= $this->conn->traverse("SELECT * FROM `catdb` WHERE cat_id='$cat_id' ");
        foreach ($result as $p) {
            return $p;
        }
    }
}