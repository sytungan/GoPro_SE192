<?php
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/userDB.php";
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/header.php";
echo '<head>
<link rel="stylesheet" href="/GoPro_SE192/assets/css/profile.css" />
    </head>
';
echo '<br>';
echo '<br>';
echo '<br>';
$connect= new Database();
$data_user= $connect->getUserByID($_GET['user_id']);
if ($data_user['user_active'] == 0) {
        echo ' Người dùng này đang tạm thời bị khóa';
        if (isset($_SESSION['user_level']) && $_SESSION['user_level'] == 1) {
            if ($data_user['user_level']!=1) {
                echo '<form action="" method="post">';
                echo '<input type="Submit" name="unblock' . $data_user['user_id'] . '" value="Mở khóa người dùng này">';
                echo '</form>';
                if(array_key_exists('unblock' . $data_user['user_id'],$_POST)) {   
                    $unblock= $connect->unblockUser($data_user['user_id']);
                    if ($unblock == 1) {
                        echo ' Bạn đã mở khóa thành công người dùng này';
                    }    
                echo '<script> location.reload() </script>';
                }
        }
    }
}
else {
    $image = $connect->getImageByUserID($data_user['user_id']);
    if ($image == NULL)
    {
        // echo  '<div class="image-container">
        //  <img src="/GoPro_SE192/assets/image/icon.png" height="280" width="320">;
        //  </div>'
         echo '<div class="card-container">
         <div class="upper-container">
            <div class="image-container">
            <img src="/GoPro_SE192/assets/image/icon.png" alt="Ảnh đại diện"  height="280" width="320" >;
            </div>
         </div>';
    }
    else {
        foreach($image as $data_image) {
        echo '<div class="card-container">
        <div class="upper-container">
           <div class="image-container">
                <img src="/GoPro_SE192/assets/image/' . $data_image['file_name'] . '" alt="Ảnh đại diện"  height="280" width="320" >;
           </div>
        </div>';
        // echo '<img src="/GoPro_SE192/assets/image/' . $data_image['file_name'] . '" alt="Ảnh đại diện"  height="280" width="320" >';
        }
    }
    if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $data_user['user_id']) {
        echo '<form method="POST" action="" enctype="multipart/form-data">';
        echo ' <div class="lower-container">';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        // echo '<div id="uploadImg">';
        echo '<input type="file" name="uploadfile" value=""/>';
        echo '<button type="submit" name="upload" class="btn_">Thay đổi ảnh đại diện</button>';
        // echo '</div>';
        // If upload button is clicked ... 
        if (isset($_POST['upload'])) { 
            $msg = ""; 
            $filename = $_FILES["uploadfile"]["name"]; 
            $tempname = $_FILES["uploadfile"]["tmp_name"];
            $folder = $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/assets/image/".$filename; 
            $result=$connect->insertImage($filename,$_SESSION['user_id']);
            if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Ảnh đại diện của bạn đã được cập nhật"; 
            }
            else { 
            $msg = "Đã có lỗi xảy ra, xin vui lòng thử lại"; 
            } 
            echo $msg;
            // echo '<script>  window.location.href = window.location.href </script>';
        }
    }
    // echo ' <div class="lower-container">
    echo '<div>';
    echo '<br>';
    echo '<h3> Tên : ' . $data_user['user_nickname']. '</h3> <br>';
    echo 'ID người dùng: ' . $data_user['user_id']. '<br>';
    echo 'Tên đăng nhập: ' . $data_user['user_name']. '<br>';
    echo 'Email của người dùng: ' . $data_user['user_email']. '<br>';
    echo 'Người dùng là: ' . $data_user['user_role']. '<br>';
    echo '</div>
    </div>
    </div>';
    if (isset($_SESSION['user_level']) && $_SESSION['user_level'] == 1) {
        if ($data_user['user_level'] != 1) {
            echo '<form action="" method="post">';
            echo '<input type="Submit" name="delete' . $data_user['user_id'] . '" value="Khóa người dùng này">';
            echo '</form>';
            if(array_key_exists('delete' . $data_user['user_id'],$_POST)) {   
                $block= $connect->blockUser($data_user['user_id']);
                if ($block == 1) {
                    echo ' Bạn đã khóa thành công người dùng này';
                }
                echo '<script> location.reload() </script>';
            }
        }
    }
}
echo '<br>';
echo '<br>';
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/footer.php";
?>