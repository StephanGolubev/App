<?php
class Notification{

    // database connection and table name
    private $conn;
    private $table_name = "notification";

    // object properties
    public $id;
    public $name;
    public $text;
    public $number;
    public $lesson;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
        }

    public function read($num, $lesson){
      $query = "SELECT * FROM notification WHERE number=$num and lesson=$lesson";
      $stmt = $this->conn->prepare($query);
      $stmt->execute();
      return $stmt;
  }

}
