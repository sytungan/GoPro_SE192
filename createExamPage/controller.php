<html>
<body>

<?php

    $question = $_POST['question'];
    $ansA     = $_POST['ansA'];
    $ansB     = $_POST['ansB'];
    $ansC     = $_POST['ansC'];
    $ansD     = $_POST['ansD'];
    $ansE     = $_POST['ansE'];
    //$key      = $_POST['key'];

    echo $question;
    echo $ansA;
    echo $ansB;
    echo $ansC;
    echo $ansD;
    echo $ansE;
    //echo $key;


    class CreateExamController
    {
        //constructor
        public function __construct()
        {
        }
    }

    class Question
    {
        //constructor
        public function __construct(string $_question, string $_content, string $_answerA, string $_answerB, string $_answerC, string $_answerD, string $_answerE, string $_key)
        {
            $this->question = $_question;
            $this->content  = $_content;
            $this->answerA  = $_answerA;
            $this->answerB  = $_answerB;
            $this->answerC  = $_answerC;
            $this->answerD  = $_answerD;
            $this->answerE  = $_answerE;
            $this->key      = $_key;
        }


        private $question;
        private $content;
        private $answerA;
        private $answerB;
        private $answerC;
        private $answerD;
        private $answerE;
        private $key;
    }

?>

</body>
</html>
