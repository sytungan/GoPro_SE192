<?php
class config {
    private $host = "localhost";
    private $dbname = "tkb";
    private $username = "root";
    private $password = "";
    private $conn;

    public function __construct() {
        $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function traverse($_sql) {   
        $result = $this->conn->query($_sql);
        return $result;
    }

    function traverseFunc($_sql) {
        $result = $this->conn->exec($_sql);
        return $result;
    }
}
?>  