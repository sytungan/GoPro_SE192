<?php
class topic_database {
    private $conn;
    public function __construct() {
        $this->conn=new config();
    }
    public function insertTopic($topic_subject,$topic_cat,$user_id,$topic_content) {
        $this->conn->traverseFunc("INSERT INTO `topicdb`(`topic_subject`, `topic_date`, `topic_cat`, `topic_by`,`topic_content`) VALUES ('$topic_subject', NOW(), '$topic_cat', '$user_id','$topic_content')");
        return 1;
    }
    public function getTopic() {
        return $this->conn->traverse("SELECT `topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`, `topic_content` FROM `topicdb` WHERE 1");
    }
    public function getTopicByCat($topic_cat) {
        $result= $this->conn->traverse("SELECT COUNT(*) AS 'exist' FROM `topicdb` WHERE topic_cat='$topic_cat' ");
        foreach ($result as $p) {
            if ($p['exist'] == 0) return NULL;
        }
        return $this->conn->traverse("SELECT `topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`, `topic_content` FROM `topicdb` WHERE topic_cat='$topic_cat' ");
    }
    public function countTopicByCat($topic_cat) {
        $result= $this->conn->traverse("SELECT COUNT(*) AS 'exist' FROM `topicdb` WHERE topic_cat='$topic_cat' ");
        foreach ($result as $p) {
            return $p['exist'];
        }
    }
    public function getTopicByCatPage($topic_cat,$start_from,$limit) {
        $result= $this->conn->traverse("SELECT COUNT(*) AS 'exist' FROM `topicdb` WHERE topic_cat='$topic_cat' ");
        foreach ($result as $p) {
            if ($p['exist'] == 0) return NULL;
        }
        return $this->conn->traverse("SELECT `topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`, `topic_content` FROM `topicdb` WHERE topic_cat='$topic_cat' LIMIT '$start_from','$limit' ");
    }
    public function getTopicByID($topic_id) {
         $result=$this->conn->traverse("SELECT `topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`, `topic_content` FROM `topicdb` WHERE topic_id='$topic_id' ");
         foreach ($result as $p) {
             return $p;
         }
    }
    public function deleteTopic($topic_id) {
        $this->conn->traverseFunc("DELETE FROM `topicdb` WHERE topic_id='$topic_id' ");
        return 1;
    }
}
?>