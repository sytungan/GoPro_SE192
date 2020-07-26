<?php session_start(); ?>
<?php
include 'DB.php';
include 'header.php';
echo '<h2>Create a topic</h2>';
if(!isset($_SESSION['signed_in']) || $_SESSION['signed_in'] == false)
{
    //the user is not signed in
    echo 'Sorry, you have to be <a href="../forumPage/signin.php">signed in</a> to create a topic.';
}
else
{
    //the user is signed in
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {   
        //the form hasn't been posted yet, display it
        //retrieve the categories from the database for use in the dropdown
        $connect= new Database();
        $result= $connect->getCat();
        if(!$result)
        {
            //the query failed, uh-oh :-(
            echo 'Error while selecting from database. Please try again later.';
        }
        else
        {         
                echo '<form method="post" action="">
                    Chủ đề: <input type="text" name="topic_subject" />
                    <br>
                    Môn học: <br>'; 
                 
                echo '<select name="topic_cat">';
                    foreach($result as $data)
                    {
                        echo '<option value="' . $data['cat_id'] . '">' . $data['cat_name'] . '</option>';
                    }
                echo '</select> <br>'; 
                     
                echo 'Nội dung: <br> <textarea name="topic_content" /></textarea> <br>
                    <input type="submit" value="Create topic" />
                 </form>';
        }
    }
    else
    {   
        $errors=array();
        if (($_POST['topic_subject'])=='')
        {
            $errors[] = 'The topic subject must not be empty.';
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
        $connect=new Database();
        //start the transaction
        $query  = "BEGIN WORK;";
        $result = $connect->insertTopic($_POST['topic_subject'],$_POST['topic_cat'],$_SESSION['user_id'],$_POST['topic_content']);
         
        if(!$result)
            {
            //Damn! the query failed, quit
            echo 'An error occured while creating your topic. Please try again later.';
            }
        else
            {
            echo 'Topic has been saved';
            }
            //the form has been posted, so save it
            //insert the topic into the topics table first, then we'll save the post into the posts table
        }
    }          
    //         if(!$result)
    //         {
    //             //something went wrong, display the error
    //             echo 'An error occured while inserting your data. Please try again later.' . mysql_error();
    //             $sql = "ROLLBACK;";
    //             $result = mysql_query($sql);
    //         }
    //         else
    //         {
    //             //the first query worked, now start the second, posts query
    //             //retrieve the id of the freshly created topic for usage in the posts query
    //             $topicid = mysql_insert_id();
                 
    //             $sql = "INSERT INTO
    //                         posts(post_content,
    //                               post_date,
    //                               post_topic,
    //                               post_by)
    //                     VALUES
    //                         ('" . mysql_real_escape_string($_POST['post_content']) . "',
    //                               NOW(),
    //                               " . $topicid . ",
    //                               " . $_SESSION['user_id'] . "
    //                         )";
    //             $result = mysql_query($sql);
                 
    //             if(!$result)
    //             {
    //                 //something went wrong, display the error
    //                 echo 'An error occured while inserting your post. Please try again later.' . mysql_error();
    //                 $sql = "ROLLBACK;";
    //                 $result = mysql_query($sql);
    //             }
    //             else
    //             {
    //                 $sql = "COMMIT;";
    //                 $result = mysql_query($sql);
                     
    //                 //after a lot of work, the query succeeded!
    //                 echo 'You have successfully created <a href="topic.php?id='. $topicid . '">your new topic</a>.';
    //             }
    //         }
    //     }
    // }
}
include 'footer.php';
?>