<?php
class Task{

    // database connection and table name
    private $conn;
    private $table_name = "user";

    // object properties
    public $id;
    public $name;
    public $lesson;
    public $place;
    public $link;
    public $text;
    public $type;
    public $say;
    public $addition;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
        }

    public function read($num){
      $query = "(SELECT id,type,say,name, lesson,place, link, text FROM `recording` WHERE lesson=$num)
         UNION
         (SELECT id,type,say,name,lesson,place, '', text FROM `text` WHERE lesson=$num)
         UNION
         (SELECT id,type,say,name, lesson,place, link, text FROM `image` WHERE lesson=$num)
         UNION
         (SELECT id,type,'','',name, lesson,place,text FROM `button` WHERE lesson=$num) ORDER BY place";
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
