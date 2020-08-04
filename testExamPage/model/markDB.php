<?php
if (!class_exists('config')) include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/config.php";
class markDB {
    private $conn;
    public function __construct() {
        $this->conn = new config();
    }
    public function insertMark($_mark, $userID, $_userName, $_userNickname, $examID, $examSubject) {
        if ($this->checkFlag($userID, $examID) == true) return null;
        $this->conn->traverse("INSERT INTO `markdb`(`user_id`, `user_name`, `user_nickname`, `mark`, `mark_date`, `exam_week`, `exam_id`, `exam_subject`) VALUES ('$userID', '$_userName', '$_userNickname', '$_mark', NOW(), WEEK(NOW()) + 1, '$examID', '$examSubject')");
        return 1;
    }
    public function checkFlag($userID, $examID) {
        $result = $this->conn->traverse("SELECT COUNT(*) as 'count' FROM markDB WHERE user_id = '$userID' AND exam_id = '$examID'");
        foreach ($result as $p) {
            if ($p['count'] > 0) return true;
            else return false;
        }
    }
    public function getRanking($subject, $top, $week) {
        return $this->conn->traverse("SELECT * FROM markdb WHERE exam_subject = '$subject' AND exam_week = '$week' ORDER BY mark DESC LIMIT $top");
    }
}
?>