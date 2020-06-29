<?php session_start(); ?>
<?php
//create_cat.php
include 'DB.php';
include 'header.php';
if(!isset($_SESSION['signed_in']) || $_SESSION['signed_in'] == false)
{
    echo 'Sorry, you have to be <a href="../forumPage/signin.php">signed in</a> to create a topic.';
}
else
{
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {
        echo '<form method="post" action="">';
        echo '<input type="text" width="60px" height="30px" name="reply_content" />';
        echo '<input type="submit" value="Create reply" />';
        echo '</form>';
    }
    else
    {
        $errors=array();
        if ($_POST['reply_content']=='')
        {
            $errors[] = 'The reply must not be empty.';
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
        {
            $connect= new Database();
            $result= $connect->insertReply($_POST['reply_content'],$data_topic['topic_id'],$data_user['user_id']);
            if ($result)
            {
                echo 'Reply has been saved';
            }
        }
    }
}
include 'footer.php';
?>