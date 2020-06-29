<?php
    function readJson(string $fileName, &$array){
        $jsonData = file_get_contents($fileName);
        $json = json_decode($jsonData, true);
        $idx = 0;
        $questionList = array();

        foreach ($json['exam'] as $exam) {
            $question = $exam['question'];
            $content  = $exam['content'];
            $ansA     = $exam['answerA'];
            $ansB     = $exam['answerB'];
            $ansC     = $exam['answerC'];
            $ansD     = $exam['answerD'];
            $key      = $exam['key'];
            $questionList[$idx] = new Question($question, $content, $ansA, $ansB, $ansC, $ansD, $key);
            $idx++;
        }
        $array = $questionList;
    }

    function checkQuestion(&$array, int $idx){
        
    }

    class Question
    {

        private $question;
        private $content;
        private $answerA;
        private $answerB;
        private $answerC;
        private $answerD;
        private $key;

        //constructor
        public function __construct(string $_question, string $_content, string $_answerA, string $_answerB, string $_answerC, string $_answerD, string $_key)
        {
            $this->question = $_question;
            $this->content  = $_content;
            $this->answerA  = $_answerA;
            $this->answerB  = $_answerB;
            $this->answerC  = $_answerC;
            $this->answerD  = $_answerD;
            $this->key = $_key;
        }

        public function __getQuestion(){
            return $this->question;
        }

        public function ___getContent(){
            return $this->content;
        }

        public function __getAnsA(){
            return $this->answerA;
        }

        public function __getAnsB(){
            return $this->answerB;
        }

        public function __getAnsC(){
            return $this->answerC;
        }

        public function __getAnsD(){
            return $this->answerD;
        }

        public function __setQuestionInfo(string $_question, string $_content, string $_answerA, string $_answerB, string $_answerC, string $_answerD, string $_key)
        {
            $this->question = $_question;
            $this->content  = $_content;
            $this->answerA  = $_answerA;
            $this->answerB  = $_answerB;
            $this->answerC  = $_answerC;
            $this->answerD  = $_answerD;
            $this->key = $_key;
        }
        
        //print to test
        public function __print(){
            echo $this->question."<br>";
            echo "Nội dung: ".$this->content."<br>" ;
            echo "Đáp án: <br>";
            echo "A: ".$this->answerA."<br>";
            echo "B: ".$this->answerB."<br>";
            echo "C: ".$this->answerC."<br>";
            echo "D: ".$this->answerD."<br>";
            echo "Key: ".$this->key."<br>";
        }
    }
?>
