<?php
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/searchPage"."/model/examDB.php";
class searchExamController {
    private $db;
    private $keyword;
    public function __construct($_keyword) {
        $this->db = new examDB();
        $this->keyword = $_keyword;
    }
    public function searchExam() {
        return $this->db->getListFilterExam($this->keyword);
    }
    public function changeToExamView() {
        
    }
}
?>