<?php
class DbConnection {
    private $host = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $database = 'minggu4';
    protected $connection;

    public function __construct() {
        if(!isset ($this->connection)) {
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            if (!$this->connection){
                echo "cannot connect";
                exit;
            }
        }
        return $this->connection;
    }
}
?>