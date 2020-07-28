<?php
    // include "../config.php";
    // $connect = new config();

  if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }

  $subject21 = "";
	$subject22 = "";
	$subject23 = "";
	$subject24 = "";
	$subject25 = "";
	
	$subject31 = "";
	$subject32 = "";
	$subject33 = "";
	$subject34 = "";
	$subject35 = "";
	
	$subject41 = "";
	$subject42 = "";
	$subject43 = "";
	$subject44 = "";
	$subject45 = "";
	
	$subject51 = "";
	$subject52 = "";
	$subject53 = "";
	$subject54 = "";
	$subject55 = "";
	
	$subject61 = "";
	$subject62 = "";
	$subject63 = "";
	$subject64 = "";
	$subject65 = "";
	
	$subject71 = "";
	$subject72 = "";
	$subject73 = "";
	$subject74 = "";
	$subject75 = "";
	
	$subject81 = "";
	$subject82 = "";
	$subject83 = "";
	$subject84 = "";
  $subject85 = "";
  
  $subject_ = '';
	
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["subject21"])) { $subject21 = $_POST['subject21']; }
	  if(isset($_POST["subject22"])) { $subject22 = $_POST['subject22']; }
	  if(isset($_POST["subject23"])) { $subject23 = $_POST['subject23']; }
	  if(isset($_POST["subject24"])) { $subject24 = $_POST['subject24']; }
	  if(isset($_POST["subject25"])) { $subject25 = $_POST['subject25']; }
	  
	  if(isset($_POST["subject31"])) { $subject31 = $_POST['subject31']; }
	  if(isset($_POST["subject32"])) { $subject32 = $_POST['subject32']; }
	  if(isset($_POST["subject33"])) { $subject33 = $_POST['subject33']; }
	  if(isset($_POST["subject34"])) { $subject34 = $_POST['subject34']; }
	  if(isset($_POST["subject35"])) { $subject35 = $_POST['subject35']; }
	  
	  if(isset($_POST["subject41"])) { $subject41 = $_POST['subject41']; }
	  if(isset($_POST["subject42"])) { $subject42 = $_POST['subject42']; }
	  if(isset($_POST["subject43"])) { $subject43 = $_POST['subject43']; }
	  if(isset($_POST["subject44"])) { $subject44 = $_POST['subject44']; }
	  if(isset($_POST["subject45"])) { $subject45 = $_POST['subject45']; }
	  
	  if(isset($_POST["subject51"])) { $subject51 = $_POST['subject51']; }
	  if(isset($_POST["subject52"])) { $subject52 = $_POST['subject52']; }
	  if(isset($_POST["subject53"])) { $subject53 = $_POST['subject53']; }
	  if(isset($_POST["subject54"])) { $subject54 = $_POST['subject54']; }
	  if(isset($_POST["subject55"])) { $subject55 = $_POST['subject55']; }
	  
	  if(isset($_POST["subject61"])) { $subject61 = $_POST['subject61']; }
	  if(isset($_POST["subject62"])) { $subject62 = $_POST['subject62']; }
	  if(isset($_POST["subject63"])) { $subject63 = $_POST['subject63']; }
	  if(isset($_POST["subject64"])) { $subject64 = $_POST['subject64']; }
	  if(isset($_POST["subject65"])) { $subject65 = $_POST['subject65']; }
	  
	  if(isset($_POST["subject71"])) { $subject71 = $_POST['subject71']; }
	  if(isset($_POST["subject72"])) { $subject72 = $_POST['subject72']; }
	  if(isset($_POST["subject73"])) { $subject73 = $_POST['subject73']; }
	  if(isset($_POST["subject74"])) { $subject74 = $_POST['subject74']; }
	  if(isset($_POST["subject75"])) { $subject75 = $_POST['subject75']; }
	  
	  if(isset($_POST["subject81"])) { $subject81 = $_POST['subject81']; }
	  if(isset($_POST["subject82"])) { $subject82 = $_POST['subject82']; }
	  if(isset($_POST["subject83"])) { $subject83 = $_POST['subject83']; }
	  if(isset($_POST["subject84"])) { $subject84 = $_POST['subject84']; }
	  if(isset($_POST["subject85"])) { $subject85 = $_POST['subject85']; }

      $subject_ = array (
        'subject21' => $subject21,
        'subject22' => $subject22,
        'subject23' => $subject23,
        'subject24' => $subject24,
        'subject25' => $subject25,

        'subject31' => $subject31,
        'subject32' => $subject32,
        'subject33' => $subject33,
        'subject34' => $subject34,
        'subject35' => $subject35,

        'subject41' => $subject41,
        'subject42' => $subject42,
        'subject43' => $subject43,
        'subject44' => $subject44,
        'subject45' => $subject45,

        'subject51' => $subject51,
        'subject52' => $subject52,
        'subject53' => $subject53,
        'subject54' => $subject54,
        'subject55' => $subject55,

        'subject61' => $subject61,
        'subject62' => $subject62,
        'subject63' => $subject63,
        'subject64' => $subject64,
        'subject65' => $subject65,

        'subject71' => $subject71,
        'subject72' => $subject72,
        'subject73' => $subject73,
        'subject74' => $subject74,
        'subject75' => $subject75,

        'subject81' => $subject81,
        'subject82' => $subject82,
        'subject83' => $subject83,
        'subject84' => $subject84,
        'subject85' => $subject85
      );
  }
  

  
  include "../model/tkbDB.php";
    class Sched {
      private $db;
      //private $subject;
      public function __construct() {
        $this->db = new SchedDB();
        //$this->subject = $subject_;
      }
        public function getSched($user_id) {
          return $this->db->getSchedDB($user_id);
        }

        public function getUserByID($user_id){
          return $this->db->getUserByID($user_id);
        }

        public function getTotal(){
          return $this->db->getTotal();
        }
        public function insertTkb($subject21,$subject22,$subject23,$subject24,$subject25,
        $subject31,$subject32,$subject33,$subject34,$subject35,
        $subject41,$subject42,$subject43,$subject44,$subject45,
        $subject51,$subject52,$subject53,$subject54,$subject55,
        $subject61,$subject62,$subject63,$subject64,$subject65,
        $subject71,$subject72,$subject73,$subject74,$subject75,
        $subject81,$subject82,$subject83,$subject84,$subject85,$tkb_by,$subject_){
          $this->db->insertTkb($subject21,$subject22,$subject23,$subject24,$subject25,
          $subject31,$subject32,$subject33,$subject34,$subject35,
          $subject41,$subject42,$subject43,$subject44,$subject45,
          $subject51,$subject52,$subject53,$subject54,$subject55,
          $subject61,$subject62,$subject63,$subject64,$subject65,
          $subject71,$subject72,$subject73,$subject74,$subject75,
          $subject81,$subject82,$subject83,$subject84,$subject85,$tkb_by,$subject_);
        }
        public function updateTkb($subject_){
          $this->db->updateTkb($subject_);
        }
      }


  
//   $sql= "SELECT COUNT(*) as 'total' FROM tkb";
//   $result = $connect->traverse($sql);
//   foreach ($result as $row) {
//     //echo $row['total'];
//     $total = $row['total'];
//     break;
//   }

//   if ($total == 0){
//     $sql = "INSERT INTO tkb ( 
//       subject21, subject22, subject23, subject24, subject25,
//       subject31, subject32, subject33, subject34, subject35,
//       subject41, subject42, subject43, subject44, subject45,
//       subject51, subject52, subject53, subject54, subject55,
//       subject61, subject62, subject63, subject64, subject65,
//       subject71, subject72, subject73, subject74, subject75,
//       subject81, subject82, subject83, subject84, subject85
//     )
//       VALUES (
//       '$subject21','$subject22','$subject23','$subject24','$subject25',
//       '$subject31','$subject32','$subject33','$subject34','$subject35',
//       '$subject41','$subject42','$subject43','$subject44','$subject45',
//       '$subject51','$subject52','$subject53','$subject54','$subject55',
//       '$subject61','$subject62','$subject63','$subject64','$subject65',
//       '$subject71','$subject72','$subject73','$subject74','$subject75',
//       '$subject81','$subject82','$subject83','$subject84','$subject85'
//       )";
//       $connect->traverseFunc($sql);
//       $message = "Đã thêm TKB mới";
//       echo "<script type='text/javascript'>alert('$message'); close(); </script>";
//   }

//   else {
//   foreach($subject_ as $key=>$value){
//     //echo $key.'=>'.$value;
//     $sql = "UPDATE tkb SET $key = '$value'";
//     //echo $sql;
//     $connect->traverseFunc($sql);
//   }
//   $message = "Đã lưu TKB";
//   echo "<script type='text/javascript'>alert('$message'); close(); </script>";
// }

//echo $subject_;
// $ctrl = new Sched();
// $total = $ctrl->getTotal();
// if ($total == 0){
//   $ctrl->insertTkb($subject21,$subject22,$subject23,$subject24,$subject25,
//   $subject31,$subject32,$subject33,$subject34,$subject35,
//   $subject41,$subject42,$subject43,$subject44,$subject45,
//   $subject51,$subject52,$subject53,$subject54,$subject55,
//   $subject61,$subject62,$subject63,$subject64,$subject65,
//   $subject71,$subject72,$subject73,$subject74,$subject75,
//   $subject81,$subject82,$subject83,$subject84,$subject85);
//   $message = "Đã thêm TKB mới";
//   echo "<script type='text/javascript'>alert('$message'); close(); </script>";
// }
// else {
//   $ctrl->updateTkb($subject_);
//   $message = "Đã lưu TKB";
//   //echo "<script type='text/javascript'>alert('$message'); close(); </script>";
// }

$ctrl = new Sched();
// $data_user= $ctrl->getUserByID($_GET['user_id'])$_SESSION['user_id'];
$ctrl->insertTkb($subject21,$subject22,$subject23,$subject24,$subject25,
  $subject31,$subject32,$subject33,$subject34,$subject35,
  $subject41,$subject42,$subject43,$subject44,$subject45,
  $subject51,$subject52,$subject53,$subject54,$subject55,
  $subject61,$subject62,$subject63,$subject64,$subject65,
  $subject71,$subject72,$subject73,$subject74,$subject75,
  $subject81,$subject82,$subject83,$subject84,$subject85,$_SESSION['user_id'],$subject_);
?>

