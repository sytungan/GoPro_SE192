<?php
include "../../config.php";
class SchedDB {
    protected $conn;
    public function __construct() {
        $this->conn = new config();
    }
    // public function getListPenExam($_subject) {
    //     return $this->conn->traverse("SELECT * FROM pendingExamDB WHERE subject='$_subject'");
    // }    
    // public function getExamByID($_id) {
    //     return $this->conn->traverse("SELECT * FROM pendingExamDB WHERE id='$_id'");
    // }
    // public function removeExamByID($_id) {
    //     return $this->conn->traverseFunc("DELETE FROM pendingExamDB WHERE id='$_id'");
    // }
    // public function moveToTestExamByID($_id) {
    //     $result = $this->conn->traverseFunc("INSERT INTO examDB(id, name, subject, author, question) 
    //     SELECT id, name, subject, author, question FROM pendingExamDB WHERE id='$_id'");
    //     $this->removeExamByID($_id);
    //     return $result;
    // }

    // public function getSchedDB(){
    //     $result = $this->conn->traverse("SELECT * FROM tkb");
    //     return $result;
    // }

    public function getSchedDB($user_id) {
        $result= $this->conn->traverse("SELECT COUNT(*) AS 'exist' FROM `tkb` WHERE tkb_by='$user_id' ");
        foreach ($result as $p) {
            if ($p['exist'] == 0) return NULL;
        }
        return $this->conn->traverse("SELECT 
                 subject21, subject22, subject23, subject24, subject25,
                 subject31, subject32, subject33, subject34, subject35,
                 subject41, subject42, subject43, subject44, subject45,
                 subject51, subject52, subject53, subject54, subject55,
                 subject61, subject62, subject63, subject64, subject65,
                 subject71, subject72, subject73, subject74, subject75,
                 subject81, subject82, subject83, subject84, subject85,
         tkb_by FROM tkb WHERE tkb_by='$user_id' ");
        
    }

    public function getUserByID($user_id) {
        $result=$this->conn->traverse("SELECT * FROM `userdb` WHERE user_id='$user_id' ");
        foreach($result as $p) {
            return $p;
        }
    }

    public function getTotal(){
        $sql= "SELECT COUNT(*) as 'total' FROM tkb";
        $result = $this->conn->traverse($sql);
        foreach ($result as $row) {
          //echo $row['total'];
          $total = $row['total'];
          break;
        }
        return $total;
    }
    // public function insertTkb(
    // $subject21,$subject22,$subject23,$subject24,$subject25,
    // $subject31,$subject32,$subject33,$subject34,$subject35,
    // $subject41,$subject42,$subject43,$subject44,$subject45,
    // $subject51,$subject52,$subject53,$subject54,$subject55,
    // $subject61,$subject62,$subject63,$subject64,$subject65,
    // $subject71,$subject72,$subject73,$subject74,$subject75,
    // $subject81,$subject82,$subject83,$subject84,$subject85){
    //     $sql = "INSERT INTO tkb ( 
    //         subject21, subject22, subject23, subject24, subject25,
    //         subject31, subject32, subject33, subject34, subject35,
    //         subject41, subject42, subject43, subject44, subject45,
    //         subject51, subject52, subject53, subject54, subject55,
    //         subject61, subject62, subject63, subject64, subject65,
    //         subject71, subject72, subject73, subject74, subject75,
    //         subject81, subject82, subject83, subject84, subject85
    //       )
    //         VALUES (
    //         '$subject21','$subject22','$subject23','$subject24','$subject25',
    //         '$subject31','$subject32','$subject33','$subject34','$subject35',
    //         '$subject41','$subject42','$subject43','$subject44','$subject45',
    //         '$subject51','$subject52','$subject53','$subject54','$subject55',
    //         '$subject61','$subject62','$subject63','$subject64','$subject65',
    //         '$subject71','$subject72','$subject73','$subject74','$subject75',
    //         '$subject81','$subject82','$subject83','$subject84','$subject85'
    //         )";
    //     $this->conn->traverseFunc($sql);
    // }

    public function insertTkb(
    $subject21,$subject22,$subject23,$subject24,$subject25,
    $subject31,$subject32,$subject33,$subject34,$subject35,
    $subject41,$subject42,$subject43,$subject44,$subject45,
    $subject51,$subject52,$subject53,$subject54,$subject55,
    $subject61,$subject62,$subject63,$subject64,$subject65,
    $subject71,$subject72,$subject73,$subject74,$subject75,
    $subject81,$subject82,$subject83,$subject84,$subject85,
    $tkb_by,$subject_) {
        $result= $this->conn->traverse("SELECT COUNT(*) AS 'exist' FROM `tkb` WHERE tkb_by='$tkb_by' ");
        foreach ($result as $p) {
            if ($p['exist'] != 0) {
                if (is_array($subject_) || is_object($subject_)) {
                    foreach($subject_ as $key=>$value){
                        //echo $key.'=>'.$value;
            
                        $sql = "UPDATE tkb SET $key = '$value' WHERE tkb_by='$tkb_by'";
                        //echo $sql;
                        $this->conn->traverseFunc($sql);
                      }
                    }

            //    $this->conn->traverseFunc("UPDATE `tkb` SET `file_name`='$file_name' WHERE file_by='$tkb_by' ");
               return 1;
            }
        }
        $this->conn->traverseFunc("INSERT INTO tkb (
                 subject21, subject22, subject23, subject24, subject25,
                 subject31, subject32, subject33, subject34, subject35,
                 subject41, subject42, subject43, subject44, subject45,
                 subject51, subject52, subject53, subject54, subject55,
                 subject61, subject62, subject63, subject64, subject65,
                 subject71, subject72, subject73, subject74, subject75,
                 subject81, subject82, subject83, subject84, subject85, tkb_by) VALUES (
            '$subject21','$subject22','$subject23','$subject24','$subject25',
            '$subject31','$subject32','$subject33','$subject34','$subject35',
            '$subject41','$subject42','$subject43','$subject44','$subject45',
            '$subject51','$subject52','$subject53','$subject54','$subject55',
            '$subject61','$subject62','$subject63','$subject64','$subject65',
            '$subject71','$subject72','$subject73','$subject74','$subject75',
            '$subject81','$subject82','$subject83','$subject84','$subject85','$tkb_by')");
        return 1;
    }

    // public function updateTkb($subject_){
    //     if (is_array($subject_) || is_object($subject_)) {
    //     foreach($subject_ as $key=>$value){
    //         //echo $key.'=>'.$value;

    //         $sql = "UPDATE tkb SET $key = '$value'";
    //         //echo $sql;
    //         $this->conn->traverseFunc($sql);
    //       }
    //     }
    // }
}
?>