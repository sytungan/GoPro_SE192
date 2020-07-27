<!-- <style>
    #screen {
        height: 2000px;
        color: #0053a6;
    }
    #space1 {
        color: #0053a6;
        height: 500px;
    }
</style> -->
<link rel="stylesheet" href="/GoPro_SE192/assets/css/style.css" />

<?php session_start(); ?>
<?php
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/forumPage/controller/listTopic.php";
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/header.php";
echo "<div id='screen'>";

//first select the category based on $_GET['cat_id']
$connect= new listTopicConTroller();
$data_cat=$connect->getCatbyID($_GET['cat_id']);
echo '<h3><a href="/GoPro_SE192/forumPage/view/create_topic.php">Tạo topic mới</a></h3>';
echo '<h2>Topics in ′'.$data_cat['cat_name']  . '′ category</h2>';
//do a query for the topics
$topic= $connect->getTopicByCat($_GET['cat_id']);
if($topic==NULL)
{  
    echo 'There are no topics in this category yet.';
}
else
// {   $limit=10;
{  
   foreach($topic as $data_topic) {
        echo '<div class="question">'; 
        $data_user= $connect->getUserByID($data_topic['topic_by']);
        echo '<h3><a href="/GoPro_SE192/forumPage/view/view_topic.php?id=' . $data_topic['topic_id'] . '">' . $data_topic['topic_subject'] . '</a><h3><br>';
        echo 'Created at: ' .date('d-m-Y', strtotime($data_topic['topic_date'])) . '<br>';
        echo '<a href="/GoPro_SE192/Userprofile.php?user_id=' .$data_user['user_id'].'">' . $data_user['user_nickname'] . '</a><br>';
        echo nl2br($connect->limit_text($data_topic['topic_content']));
        if (isset($_SESSION['user_level'])) {
            if ($_SESSION['user_level']) {
                echo '<td class="afterpart">';
                echo '<form action="" method="post">';
                echo '<input type="Submit" name="delete' . $data_topic['topic_id'] . '" value="Xóa">';
                echo '</form>';
                if(array_key_exists('delete' . $data_topic['topic_id'],$_POST)) 
                {   
                        $delete= $connect->deleteTopic($data_topic['topic_id']);
                        echo '<script> location.reload() </script>';
                }
            }
        }
        echo '</div>';
    }
}
echo "</div>";
//include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/footer.php";
?>