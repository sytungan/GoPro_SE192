<?php 
include 'config.php';
class Database {
    private $conn;
    public function __construct() {
        $this->conn=new config();
    }
    public function insertAccount($user_name, $user_pass,$user_nickname,$user_role,$user_email) {
        if ($this->checkUsername($user_name)>0) return 0;
        else {
            $user_pass=sha1($user_pass);
            $this->conn->traverseFunc("INSERT INTO `userdb`(`user_name`, `user_pass`,`user_nickname`, `user_role`, `user_active`, `user_email`) VALUES ('$user_name','$user_pass','$user_nickname','$user_role',1,'$user_email') ");
            return 1;
            }
    }
    public function checkUsername($user_name) {
        $result = $this->conn->traverse("SELECT COUNT(*) as 'exist' FROM `userdb` WHERE user_name='$user_name'");
        foreach ($result as $p) {
            return $p['exist'];
        }
    }
    public function checkAccount($user_name,$user_pass) {
        $result= $this->conn->traverse("SELECT COUNT(*) as 'exist' FROM `userdb` WHERE user_name='$user_name'AND user_pass=sha1('$user_pass') ");
        foreach($result as $p) {
            return $p['exist'];
        }
    }
    public function getUserByName($user_name) {
        $result=$this->conn->traverse("SELECT * FROM `userdb` WHERE user_name='$user_name' ");
        foreach($result as $p) {
            return $p;
        }
    }
    public function getUserByID($user_id) {
        $result=$this->conn->traverse("SELECT * FROM `userdb` WHERE user_id='$user_id' ");
        foreach($result as $p) {
            return $p;
        }
    }
    public function blockUser($user_id) {
        $result=$this->conn->traverseFunc("UPDATE `userdb` SET `user_active`=0 WHERE user_id='$user_id' ");
        return 1;
    }
    public function unblockUser($user_id) {
        $result=$this->conn->traverseFunc("UPDATE `userdb` SET `user_active`=1 WHERE user_id='$user_id' ");
        return 1;
    }
    public function getCat() { 
        $result= $this->conn->traverse("SELECT COUNT(*) AS 'exist' FROM `catdb` WHERE 1");
        foreach ($result as $p) {
            if ($p['exist'] == 0) return NULL;
        }
        return $this->conn->traverse("SELECT `cat_id`, `cat_name`, `cat_description` FROM `catdb` WHERE 1");
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
    public function deleteTopic($topic_id) {
        $this->conn->traverseFunc("DELETE FROM `topicdb` WHERE topic_id='$topic_id' ");
        return 1;
    }
    public function insertImage($file_name,$file_by) {
        $result= $this->conn->traverse("SELECT COUNT(*) AS 'exist' FROM `imagedb` WHERE file_by='$file_by' ");
        foreach ($result as $p) {
            if ($p['exist'] != 0) {
               $this->conn->traverseFunc("UPDATE `imagedb` SET `file_name`='$file_name' WHERE file_by='$file_by' ");
               return 1;
            }
        }
        $this->conn->traverseFunc("INSERT INTO `imagedb`(`file_name`,`file_by`) VALUES ('$file_name','$file_by')");
        return 1;
    }
    public function getImageByUserID($user_id) {
        $result= $this->conn->traverse("SELECT COUNT(*) AS 'exist' FROM `imagedb` WHERE file_by='$user_id' ");
        foreach ($result as $p) {
            if ($p['exist'] == 0) return NULL;
        }
        return $this->conn->traverse("SELECT `image_id`, `file_name`, `file_by` FROM `imagedb` WHERE file_by='$user_id' ");
        
    }
}
?>