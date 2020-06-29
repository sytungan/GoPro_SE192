<?php
class exam {
    private $id;
    private $name;
    private $subject;
    private $author;
    private $question;
    public function __construct($_id, $_name, $_subject, $_author, $_question) {
        $this->id = $_id;
        $this->name = $_name;
        $this->subject = $_subject;
        $this->author = $_author;
        $this->question = $_question;
    }
}
?>