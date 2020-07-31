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
<style>
.w3-button {width:150px}
</style>

<?php session_start(); ?>
<?php
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/forumPage/controller/listTopic.php";
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/header.php";
echo "<div class='view_listtopic'>";

//first select the category based on $_GET['cat_id']
$connect= new listTopicConTroller();
$data_cat=$connect->getCatbyID($_GET['cat_id']);
echo '<div class="beautify"><h3><a href="/GoPro_SE192/forumPage/view/create_topic.php">Tạo topic mới</a></h3></div>';
echo '<h2>Topics in ′'.$data_cat['cat_name']  . '′ category</h2>';
//do a query for the topics
$topic= $connect->getTopicByCat($_GET['cat_id']);
if($topic==NULL)
{  
    echo '<p>There are no topics in this category yet.</p>';
}
else   
{  $limit=10;
    if (isset($_GET["page"])) {  
      $pn  = $_GET["page"];  
    }  
    else {  
      $pn=1;  
    };
    $start = ($pn-1)*$limit;
    $stop = $pn*$limit;
    $i = 0;  
   foreach($topic as $data_topic) {
        if ( $i >= $start && $i < $stop)
        {
        echo '<div class="topic">'; 
        $data_user= $connect->getUserByID($data_topic['topic_by']);
        echo '<div class="col-8">';
        echo '<h2><a href="/GoPro_SE192/forumPage/view/view_topic.php?id=' . $data_topic['topic_id'] . '">' . $data_topic['topic_subject'] . '</a></h2>';
        echo '<h4>Created at: ' .date('d-m-Y', strtotime($data_topic['topic_date'])) . ' | ';
        echo '  Created by: <a href="/GoPro_SE192/Userprofile.php?user_id=' .$data_user['user_id'].'">' . $data_user['user_nickname'] . '</a><br></h4>';
        echo '<p>' . nl2br($connect->limit_text($data_topic['topic_content'])) . '</p>';
        echo '</div>';
        echo '<div class="col-4">';
        if (isset($_SESSION['user_level'])) {
            if ($_SESSION['user_level']) {
                echo '<form action="" method="post">';
                echo '<div><input type="Submit" name="delete' . $data_topic['topic_id'] . '" value="Xóa"></div>';
                echo '</form>';
                if(array_key_exists('delete' . $data_topic['topic_id'],$_POST)) 
                {   
                        $delete= $connect->deleteTopic($data_topic['topic_id']);
                        echo '<script> window.location.href = window.location.href </script>';
                }
            }
        }
        echo '</div>';
        echo '</div>';
        $i = $i+1;
        }
        else {
            $i = $i+1;
        }
    }
    $cat_id = $_GET['cat_id'];
    $total_records = $connect->countTopicByCat($cat_id);
    // Number of pages required. 
    $total_pages = ceil($total_records / $limit);   
    echo '<div class="container">';
    for ($i=1; $i<=$total_pages; $i++) { 
        if ($i==$pn) { 
            echo '<div class="buttons"><a href="/GoPro_SE192/forumPage/view/view_listtopic.php?cat_id=' . $cat_id . '&page=' . $i . ' "> ' . $i . '</a></div>';
        }             
        else  { 
            echo '<div class="buttons"> <a href="/GoPro_SE192/forumPage/view/view_listtopic.php?cat_id=' . $cat_id . '&page=' . $i .' "> ' . $i . '</div>';
        }   
    };   
    echo '</div>'; 
}
    echo "</div>";
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/footer.php";
?>