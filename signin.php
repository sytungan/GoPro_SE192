<link rel="stylesheet" href="/GoPro_SE192/assets/css/style.css" />
<?php
include 'userDB.php';
include 'header.php';
 
//first, check if the user is already signed in. If that is the case, there is no need to display this page
if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
    echo '<p>Bạn đã đăng nhập rồi, bạn có thể <a href="signout.php">đăng xuất</a> nếu muốn.</p>';
}
else
{
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {
        /*the form hasn't been posted yet, display it
          note that the action="" will cause the form to post to the same page it is on */
        // echo '<form method="post" action="">
        //     Username: <input type="text" name="user_name" />
        //     Password: <input type="password" name="user_pass">
        //     <input type="submit" value="Sign in" />
        //  </form>';

         echo '<form method="post" action="">
         <div class="joinOuterContainer">
         <div class="joinInnerContainer">
           <h1 class="heading">SIGN IN</h1>
           <div>
             <input placeholder="Username" class="joinInput" type="text" name="user_name" />
           </div>
           <div>
             <input placeholder="Password" class="joinInput mt-20" type="password" name="user_pass"/>
           </div>
           <input class="button mt-20" type="submit" value="Sign in"></input>
         </div>
       </div>
       </form>';
    }
    else
    {
        /* so, the form has been posted, we'll process the data in three steps:
            1.  Check the data
            2.  Let the user refill the wrong fields (if necessary)
            3.  Varify if the data is correct and return the correct response
        */
        $errors = array(); /* declare the array for later use */
         
        if(($_POST['user_name'])=='')
        {
            $errors[] = 'Không được để trống tên tài khoản';
        }
         
        if(($_POST['user_pass'])=='')
        {
            $errors[] = 'Không được để trống mật khẩu';
        }
         
        if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
        {
            echo 'Có một số lỗi đã xảy ra. Bạn vui lòng kiểm tra lại';
            echo '<ul>';
            foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
            {
                echo '<li>' . $value . '</li>'; /* this generates a nice error list */
            }
            echo '</ul>';
        }
        else
        {   $connect= new Database();
            $result=$connect->checkAccount($_POST['user_name'],$_POST['user_pass']);
           
            if($result<0)
            {
                //something went wrong, display the error
                echo 'Có lỗi xảy ra khi đăng nhập, xin vui lòng thử lại sau';
            }
            else
            {
                //the query was successfully executed, there are 2 possibilities
                //1. the query returned data, the user can be signed in
                //2. the query returned an empty result set, the credentials were wrong
                if($result==0)
                {
                    echo 'Tài khoản hoặc mật khẩu không đúng. Xin vui lòng thử lại!';
                }
                else
                {   $data=$connect->getUserByName($_POST['user_name']);
                    if ($data['user_active'] !=1) {
                    echo 'Tài khoản của bạn đã bị khóa.';
                    }
                    else
                    {
                        //set the $_SESSION['signed_in'] variable to TRUE
                        $_SESSION['signed_in'] = true;
                        //we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages
                        {
                            $_SESSION['user_id']    = $data['user_id'];
                            $_SESSION['user_name']  = $data['user_name'];
                            $_SESSION['user_nickname'] = $data['user_nickname'];
                            $_SESSION['user_role'] = $data['user_role'];
                            $_SESSION['user_email'] = $data['user_email'];
                            $_SESSION['user_level'] = $data['user_level'];
                            echo '<script> location.reload() </script>';
                        } 
                     echo 'Welcome, ' . $_SESSION['user_nickname'] . '. <a href="index.php">Proceed to the forum overview</a>.';
                    }
                }
            }
         }
    }
}
include 'footer.php';
?>
