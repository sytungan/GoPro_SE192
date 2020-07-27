<?php
class reply_database {
    private $conn;
    public function __construct() {
        $this->conn=new config();
    }
    public function getReply($reply_topic) {
        return $this->conn->traverse("SELECT `reply_id`, `reply_content`, `reply_date`, `reply_topic`, `reply_by` FROM `replydb` WHERE reply_topic='$reply_topic' ");
    }
     public function insertReply($reply_content,$reply_topic,$reply_by) {
        $this->conn->traverseFunc("INSERT INTO `replydb`(`reply_content`, `reply_date`, `reply_topic`, `reply_by`) VALUES ('$reply_content',NOW(),'$reply_topic','$reply_by') ");
        return 1;
    }
    public function deleteReply($reply_id) {
        $this->conn->traverseFunc("DELETE FROM `replydb` WHERE reply_id='$reply_id' ");
        return 1;
    }
}
?>