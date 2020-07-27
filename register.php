<?php
//signup.php
include 'userDB.php';
include 'header.php';
echo '<h3>Sign up</h3>';
 
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    /*the form hasn't been posted yet, display it
      note that the action="" will cause the form to post to the same page it is on */
    echo '<form method="post" action="">
        Username: <input type="text" name="user_name" placeholder="Username" /> <br>
        Password: <input type="password" name="user_pass" placeholder="Password"> <br>
        Password again: <input type="password" name="user_pass_check" placeholder="Password again"> <br>
        Your nickname: <input type="text" name="user_nickname" placeholder="Nickname"> <br>
        Email <input type="email" name="user_email" placeholder="Email@"> <br>
        Role <br>
        <input type="radio" name="user_role" value="Student" checked> Student <br>
        <input type="radio" name="user_role" value="Teacher">Teacher <br>
        <input type="submit" value="Submit" />
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
            $errors[] = 'The username can only contain letters and digits.';
        }
        if(strlen($_POST['user_name']) > 30)
        {
            $errors[] = 'The username cannot be longer than 30 characters.';
        }
    }
    else
    {
        $errors[] = 'The username field must not be empty.';
    }
     
     
    if (!$_POST['user_pass']=='')
    {
        if($_POST['user_pass'] != $_POST['user_pass_check'])
        {
            $errors[] = 'The two passwords did not match.';
        }
    }
    else 
    {
        $errors[] = 'The password field cannot be empty.';
    }
    if (!$_POST['user_nickname']=='')
    {
        //the user name exists
        if(strlen($_POST['user_name']) > 30)
        {
            $errors[] = 'The nickname cannot be longer than 30 characters.';
        }
    }
    else
    {
        $errors[] = 'The nickname field must not be empty.';
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
        $result=$connect->insertAccount($_POST['user_name'],$_POST['user_pass'],$_POST['user_nickname'],$_POST['user_role'],$_POST['user_email']);
      if(!$result)
       {
           echo 'Username has been used. Please choose another name!';
       }
      else
       {
        echo 'Successfully registered. You can now <a href="signin.php">sign in</a> and start posting! :-)';
       }
     }
}
 
include 'footer.php';
?>