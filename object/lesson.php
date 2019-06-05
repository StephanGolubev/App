<?php
class Lesson{

    // database connection and table name
    private $conn;
    private $table_name = "lesson";

    // object properties
    public $id;
    public $name;
    public $number;
    public $level;
    public $free;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
        }

    public function read(){
      $query = "SELECT * FROM " . $this->table_name . "";
      $stmt = $this->conn->prepare($query);
      $stmt->execute();
      return $stmt;
  }

  public function insert($table,$name, $values) {
		  $query = "INSERT INTO "."`".$table."`"." (";
		  foreach ((array) $name AS $key => $value)
			    $query .= "`".$value."`, ";
		  $query = rtrim($query, " ,")."".") VALUES (";
		  foreach ($values AS $key => $value)
          $query .= "'".$value."' , ";
		  $query = rtrim($query, " ,");
		  $query .= ")";

		return $this->query($query);
	}
}
