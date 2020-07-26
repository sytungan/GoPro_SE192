<?php session_start() ?>
<?php
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/forumPage/controller/listTopic.php";
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/header.php";
echo '<h3>Sign in</h3>';
 
//first, check if the user is already signed in. If that is the case, there is no need to display this page
if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
    echo 'You are already signed in, you can <a href="/GoPro_SE192/forumPage/view/signout.php">sign out</a> if you want.';
}
else
{
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {
        /*the form hasn't been posted yet, display it
          note that the action="" will cause the form to post to the same page it is on */
        echo '<form method="post" action="">
            Username: <input type="text" name="user_name" />
            Password: <input type="password" name="user_pass">
            <input type="submit" value="Sign in" />
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
            $errors[] = 'The username field must not be empty.';
        }
         
        if(($_POST['user_pass'])=='')
        {
            $errors[] = 'The password field must not be empty.';
        }
         
        if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
        {
            echo 'Uh-oh.. a couple of fields are not filled in correctly..';
            echo '<ul>';
            foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
            {
                echo '<li>' . $value . '</li>'; /* this generates a nice error list */
            }
            echo '</ul>';
        }
        else
        {   $connect= new listTopicConTroller();
            $result=$connect->checkAccount($_POST['user_name'],$_POST['user_pass']);
           
            if($result<0)
            {
                //something went wrong, display the error
                echo 'Something went wrong while signing in. Please try again later.';
            }
            else
            {
                //the query was successfully executed, there are 2 possibilities
                //1. the query returned data, the user can be signed in
                //2. the query returned an empty result set, the credentials were wrong
                if($result==0)
                {
                    echo 'You have supplied a wrong user/password combination. Please try again.';
                }
                else
                {
                    //set the $_SESSION['signed_in'] variable to TRUE
                    $_SESSION['signed_in'] = true;
                     
                    //we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages
                    $data=$connect->getUserByName($_POST['user_name']);
                    {
                        $_SESSION['user_id']    = $data['user_id'];
                        $_SESSION['user_name']  = $data['user_name'];
                        $_SESSION['user_role'] = $data['user_role'];
                        $_SESSION['user_email'] = $data['user_email'];
                        $_SESSION['user_level'] = $data['user_level'];
                         echo '<script> location.reload() </script>';
                    }
                     
                    echo 'Welcome, ' . $_SESSION['user_name'] . '. <a href="index.php">Proceed to the forum overview</a>.';
                }
            }
        }
    }
}
 
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/footer.php";
?>
