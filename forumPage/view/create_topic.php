<?php session_start(); ?>
<?php
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/forumPage/controller/listTopic.php";
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/header.php";
echo '<div class="create_topic">';
echo '<h2>Tạo topic mới</h2>';
if(!isset($_SESSION['signed_in']) || $_SESSION['signed_in'] == false)
{
    //the user is not signed in
    echo '<p>Sorry, you have to be <a href="/GoPro_SE192/signin.php">signed in</a> to create a topic.</p>';
}
else
{ 
    //the user is signed in
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {   
        //the form hasn't been posted yet, display it
        //retrieve the categories from the database for use in the dropdown
        $connect= new listTopicConTroller();
        $result= $connect->getCat();
        if(!$result)
        {
            //the query failed, uh-oh :-(
            echo 'Có lỗi xảy ra';
        }
        else
        {         
                echo '<form method="post" action="">
                    Chủ đề:<br> <input type="text" name="topic_subject" />
                    <br><br>
                    Môn học: <br>'; 
                 
                echo '<select name="topic_cat">';
                    foreach($result as $data)
                    {
                        echo '<option value="' . $data['cat_id'] . '">' . $data['cat_name'] . '</option>';
                    }
                echo '</select> <br>'; 
                echo '<br>';
                     
                echo 'Nội dung: <br> <textarea name="topic_content" /></textarea> <br> <br>
                    <input  type="submit" value="Đăng bài" />';
                        
                echo '</form>';
        }
    }
    else
    {   
        $errors=array();
        if (($_POST['topic_subject'])=='')
        {
            $errors[] = 'Chủ đề không được trống.';
        }
        if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
        {
        echo 'Không được để trống !';
        echo '<ul>';
        foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
            {
            echo '<li>' . $value . '</li>'; /* this generates a nice error list */
            }
        echo '</ul>';
        }
        else 
        { 
        $connect= new listTopicConTroller();
        //start the transaction
        $query  = "BEGIN WORK;";
        $result = $connect->insertTopic($_POST['topic_subject'],$_POST['topic_cat'],$_SESSION['user_id'],$_POST['topic_content']);
         
        if(!$result)
            {
            //Damn! the query failed, quit
            echo 'Có lỗi xảy ra. Vui lòng thử lại sau';
            }
        else
            {
                echo 'Bài viết đã được đăng !';
                $_url = '../view/view_listtopic.php?cat_id='.$_POST['topic_cat'].'&page=1';
                header( "refresh:1; url=$_url");
            }
            //the form has been posted, so save it
            //insert the topic into the topics table first, then we'll save the post into the posts table
        }
    }          
}
echo '</div> ';
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/footer.php";
?>