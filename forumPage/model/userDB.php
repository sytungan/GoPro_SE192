<?php 
class user_database {
    private $conn;
    public function __construct() {
        $this->conn=new config();
    }
    public function insertAccount($user_name, $user_pass, $user_role,$user_email) {
        if ($this->checkUsername($user_name)>0) return 0;
        else {
            $user_pass=sha1($user_pass);
            $this->conn->traverseFunc("INSERT INTO `userdb`(`user_name`, `user_pass`, `user_role`, `user_active`, `user_email`) VALUES ('$user_name','$user_pass','$user_role',1,'$user_email') ");
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
}
?>