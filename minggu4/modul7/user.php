<?php
include_once('koneksi.php');
class user extends dbconnection {
    public function_construct() {
        parent::_construct();
    }

    public function check_login($username, $password) {
        $sql = "SELECT * FROM " modul WHERE username = '$username' and password = '$password';
        $query = $this->connection->query($sql);

        if($query->num_rows > 0) {
            $row = $query-> fetch_array();
            return $row['id'];
        } else {
            return false;
        }
    }

    public function details($sql) {
        $query = $this->connection->query($sql);
        $row = $query -> fetch_array();
        return $row;
    }

    public function escape_string($value) {
        return $this->connection->real_escape_string($value);
    }
}
?>