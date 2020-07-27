<?php
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/config.php";
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/forumPage/model/catDB.php";
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/forumPage/model/replyDB.php";
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/forumPage/model/topicDB.php";
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/forumPage/model/userDB.php";
class topicConTroller{
    private $user_database, $reply_database, $topic_database, $cat_database;
    public function __construct() {
        $this->user_database = new user_database();
        $this->reply_database = new reply_database();
        $this->topic_database = new topic_database();
        $this->cat_database = new cat_database();
    }
    // Function involving Category
    public function getCat() { 
        return $this->cat_database->getCat();
    }
    // Function involving Topic
    // Insert Topic into Database
    public function insertTopic($topic_subject,$topic_cat,$user_id,$topic_content) {
        return $this->topic_database->insertTopic($topic_subject,$topic_cat,$user_id,$topic_content);
    }
    // Get all Topic from Database
    public function getTopic() {
        return $this->topic_database->getTopic();
    }
    // Get Topic by Category from Database
    public function getTopicByCat($topic_cat) {
        return $this->topic_database->getTopicByCat($topic_cat);
    }
    // Get Topic by ID from Database
    public function getTopicByID($topic_id) {
        return $this->topic_database->getTopicByID($topic_id);
    }
    // Delete Topic from Database
    public function deleteTopic($topic_id) {
        return $this->topic_database->deleteTopic($topic_id);
    }
    // Function involving Reply
    // Get all reply of a topic
     public function getReply($reply_topic) {
        return $this->reply_database->getReply($reply_topic);
    }
    // Insert reply from a topic to Database
     public function insertReply($reply_content,$reply_topic,$reply_by) {
        return $this->reply_database->insertReply($reply_content,$reply_topic,$reply_by);
    }
      public function deleteReply($reply_id) {
        $this->reply_database->deleteReply($reply_id);
        return 1;
    }
    // Function involving user
    // Insert new Account to Database
     public function insertAccount($user_name, $user_pass, $user_role,$user_email) {
        return $this->user_database->insertAccount($user_name, $user_pass, $user_role,$user_email);
    }
    // Check if username exists
    public function checkUsername($user_name) {
        return $this->user_database->checkUsername($user_name);
    }
    // Check if Account exists and user name, password is correct
    public function checkAccount($user_name,$user_pass) {
        return $this->user_database->checkAccount($user_name,$user_pass);
    }
    // Get User by name from Database
    public function getUserByName($user_name) {
        return $this->user_database->getUserByName($user_name);
    }
    // Get User by ID from Database
    public function getUserByID($user_id) {
       return $this->user_database->getUserByID($user_id);
    }
}
?>