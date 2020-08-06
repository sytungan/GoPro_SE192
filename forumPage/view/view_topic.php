<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/GoPro_SE192/assets/css/style.css" />
</head>
<?php session_start(); ?>
<?php
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/forumPage/controller/Topic.php";
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/header.php";
echo '<div class="view_topic">';
//first select the topic based on $_GET['topic_id']
$connect = new topicConTroller(); 
$data_topic = $connect->getTopicByID($_GET['id']);
$data_user = $connect->getUserbyID($data_topic['topic_by']);
echo '<div class="blog">';
echo '<h2>Topic ' . $data_topic['topic_subject'] . '</h2>';
echo '<h4>Created by <span class="Unlinked"><a href="/GoPro_SE192/Userprofile.php?user_id=' .$data_user['user_id'].'">' . $data_user['user_nickname'] . '</a><span> | ';
echo 'Created at ' .$data_topic['topic_date'] . '</h4>';
echo '<p>'. nl2br($data_topic['topic_content']) . '</p>';
echo '</div>';
//Reply sections 
echo '<h2 id="titleComment">Bình luận: </h2>';
// show replies
$reply= $connect->getReply($_GET['id']);
if(!isset($_SESSION['signed_in']) || $_SESSION['signed_in'] == false)
{
    echo 'Sorry, you have to be <a href="../forumPage/signin.php">signed in</a> to create a reply.';
}
else
{   echo '<div class="comments">';
    if(!isset($_POST['reply_content']))
    {  
        echo '<form method="post" action="">';
        echo '<textarea name="reply_content" placeholder=" Nhập bình luận tại đây..."></textarea>';
        echo '<input type="submit" value="Đăng bình luận" />';
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
            $connect= new topicConTroller();
            $result= $connect->insertReply($_POST['reply_content'],$data_topic['topic_id'],$_SESSION['user_id']);
            if ($result)
            {
                echo 'Reply has been saved';
                echo '<script>  window.location.href = window.location.href </script>';
            }
        }
    }
    echo '</div>';
}
echo '<div id="manyComment">';
foreach ($reply as $data_reply)
    {   echo '<div class="comments-box">';
        $data_reply_user = $connect->getUserbyID($data_reply['reply_by']);
        echo '<a href="/GoPro_SE192/Userprofile.php?user_id=' .$data_reply_user['user_id'].'">' . $data_reply_user['user_nickname'] . '</a><br>';
        echo '' .date('g:i A, l - d M Y', strtotime($data_reply['reply_date'])) . '<br>';
        echo '<p>' . nl2br($data_reply['reply_content']) . '</p>';
        if (isset($_SESSION['user_level'])) {
            if ($_SESSION['user_level']) {
                echo '<form action="" method="post">';
                echo '<input type="Submit" name="delete' . $data_reply['reply_id'] . '" value="Xóa">';
                echo '</form>';
                if(array_key_exists('delete' . $data_reply['reply_id'],$_POST)) 
                    {      
                    $delete= $connect->deleteReply($data_reply['reply_id']);
                    echo 'Reply has been deleted';
                    echo '<script> window.location.href = window.location.href </script>';
                }
            }
        }
        echo '</div>';
    }
echo '</div>';
echo '</div>';
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/footer.php";
?>