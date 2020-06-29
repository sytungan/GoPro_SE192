<?php
    //TODO: init a empty JSON file to hold the exam info
    function initJson(){ 
        static $functionCalled = false;
        if ($functionCalled) return;
        $functionCalled = true;
        $named_array = array(
            "exam" => array(
              array(
                  "question" => "1",
                  "content" => "",
                  "answerA" => "",
                  "answerB" => "",
                  "answerC" => "",
                  "answerD" => "",
                  "key" => ""
                )
            )
        );
        $jsondata = json_encode($named_array);
        file_put_contents("test.json", $jsondata);
        $jsonData = file_get_contents("test.json");
        $json = json_decode($jsonData, true);
        for ($i = 2; $i <= 40; $i++) {
            $temp = array(
                "question" => "$i",
                "content" => "",
                "answerA" => "",
                "answerB" => "",
                "answerC" => "",
                "answerD" => "",
                "key" => ""
            );
            array_push($json['exam'], $temp);
        }
        $jsonData = json_encode($json);
        file_put_contents('test.json', $jsonData);
    }


    //TODO: read the exam INFO from JSON file and paste to Array
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


    //TODO: write exam to JSON file after modify
    function writeJson(string $fileName, &$array){

        $question = $array[0];
        $array[0]->__print();
        
        $named_array = array(
            "exam" => array(
              array(
                "question" => $question->__getQuestion(),
                "content" => $question->___getContent(),
                "answerA" => $question->__getAnsA(),
                "answerB" => $question->__getAnsB(),
                "answerC" => $question->__getAnsC(),
                "answerD" => $question->__getAnsD(),
                "key" => $question->__getKey()
                )
            )
        );
        $jsondata = json_encode($named_array);
        file_put_contents($fileName, $jsondata);

        $jsonData = file_get_contents($fileName);
        $json = json_decode($jsonData, true);
        for ($i = 1; $i <= 39; $i++) {
            $temp = array(
                "question" => $array[$i]->__getQuestion(),
                "content" => $array[$i]->___getContent(),
                "answerA" => $array[$i]->__getAnsA(),
                "answerB" => $array[$i]->__getAnsB(),
                "answerC" => $array[$i]->__getAnsC(),
                "answerD" => $array[$i]->__getAnsD(),
                "key" => $array[$i]->__getKey()
            );
            array_push($json['exam'], $temp);
        }
        $jsondata = json_encode($json);
        file_put_contents($fileName, $jsondata);
    }


    //This is Question Class
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

        //TODO: get infomation from question
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

        public function __getKey(){
            return $this->key;
        }

        //TODO: modify infomation of question after change the question
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
