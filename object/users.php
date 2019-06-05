<?php
class User{

    // database connection and table name
    private $conn;
    private $table_name = "user";

    // object properties
    public $id;
    public $name;
    public $last_name;
    public $password;
    public $staus;
    public $email;
    public $lesson;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
        }

    public function read($num){
      $query = "SELECT * FROM user WHERE id=$num";
      $stmt = $this->conn->prepare($query);
      $stmt->execute();
      return $stmt;
  }
}
