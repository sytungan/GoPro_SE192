<?php session_start(); ?>
<?php
include 'DB.php';
include 'header.php';
//first select the category based on $_GET['cat_id']
$connect= new Database(); 
echo '<h2>Topics in ′' . $_GET['cat_id'] . '′ category</h2>';
//do a query for the topics
$topic= $connect->getTopicByCat($_GET['cat_id']);
if($topic==NULL)
{  
    echo 'There are no topics in this category yet.';
}
else
{       
    echo "<table border='1'>
        <tr>
            <th>Topic</th>
            <th>Created at</th>
            <th>Created by</th>
        </tr>";
        
    foreach ($topic as $data_topic)
    {       
        $data_user= $connect->getUserByID($data_topic['topic_by']);
        echo '<tr>';
            echo '<td class="leftpart">';
                echo '<h3><a href="topic.php?id=' . $data_topic['topic_id'] . '">' . $data_topic['topic_subject'] . '</a><h3>';
            echo '</td>';
            echo '<td class="middlepart">';
                echo date('d-m-Y', strtotime($data_topic['topic_date']));
            echo '</td>';
            echo '<td class="rightpart">';
            echo $data_user['user_name'];
            echo '</td>';
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
        echo '</tr>';
    }
}
echo '</div>';


include 'footer.php';
?>