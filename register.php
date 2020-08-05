<link rel="stylesheet" href="/GoPro_SE192/assets/css/style.css" />
<?php
//signup.php
include 'userDB.php';
include 'header.php';

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
  
    echo '<form method="post" action="">
         <div class="joinOuterContainer">
         <div class="joinInnerContainer">
           <h1 class="heading">ĐĂNG KÍ</h1>
           <div>
             <input placeholder="Tên đăng nhập" class="joinInput" type="text" name="user_name" />
           </div>
           <div>
             <input placeholder="Mật khẩu" class="joinInput mt-20" type="password" name="user_pass"/>
           </div>
           <div>
             <input placeholder="Nhập lại mật khẩu" class="joinInput mt-20" type="password" name="user_pass_check"/>
           </div>
           <div>
             <input type="text" class="joinInput mt-20"  name="user_nickname" placeholder="Nickname"> <br>
           </div>
           <div> 
           <input type="email" class="joinInput mt-20" name="user_email" placeholder="Email@"> <br>
           </div>
           <div id="typeUser">
           <h5> Vui lòng chọn loại tài khoản:</h5> <br>
           <input type="radio" name="user_role" value="student"> Học sinh  <br>
           <input type="radio" name="user_role" value="teacher"> Giáo viên <br>
           </div>
           <input class="button mt-20" type="submit" value="Đăng kí">
         </div>
       </div>
       </form>';
}
else
{
    /* so, the form has been posted, we'll process the data in three steps:
        1.  Check the data
        2.  Let the user refill the wrong fields (if necessary)
        3.  Save the data 
    */
    $errors = array(); /* declare the array for later use */
     
    if (!$_POST['user_name']=='')
    {
        //the user name exists
        if(!ctype_alnum($_POST['user_name']))
        {
            $errors[] = 'Tên đăng nhập không được chứa kí tự đặc biệt.';
        }
        if(strlen($_POST['user_name']) > 30)
        {
            $errors[] = 'Tên đăng nhập phải ít hơn 30 kí tự.';
        }
    }
    else
    {
        $errors[] = 'Tên đăng nhập là bắt buộc.';
    }
     
     
    if (!$_POST['user_pass']=='')
    {
        if($_POST['user_pass'] != $_POST['user_pass_check'])
        {
            $errors[] = 'Mật khẩu nhập lại không khớp.';
        }
    }
    else 
    {
        $errors[] = 'Mật khẩu là bắt buộc.';
    }
    if (!$_POST['user_nickname']=='')
    {
        //the user name exists
        if(strlen($_POST['user_name']) > 30)
        {
            $errors[] = 'Nickname phải ít hơn 30 kí tự.';
        }
    }
    else
    {
        $errors[] = 'Nickname là bắt buộc.';
    }
    if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
    {
        echo '<h3 class="notice">Vui lòng điền đầy đủ thông tin sau:<br>';
        foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
        {
            echo "&emsp; - ".$value . "<br>"; /* this generates a nice error list */
        }
        echo '</h3>';
    }
    else
    {
        $connect= new Database();
        $result=$connect->insertAccount($_POST['user_name'],$_POST['user_pass'],$_POST['user_nickname'],$_POST['user_role'],$_POST['user_email']);
      if(!$result)
       {
           echo '<h3 class="notice">Tên đăng nhập đã được đăng kí, vui lòng chọn tên đăng nhập khác!</h3>';
       }
      else
       {
        echo '<h3 class="notice">Đăng kí thành công. Bạn có thể <a href="signin.php">Đăng nhập</a> ngay bây giờ </h3>';
       }
     }
}
 
include 'footer.php';
?>