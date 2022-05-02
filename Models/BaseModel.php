<?php
session_start();
class BaseModel extends Database
{

  public function __construct()
  {
    $this->connect = $this->connect();
  }
  public function get_all($table)
  {

    $sql = "SELect * from $table ";
    $query = $this->query($sql);
    $ar = [];
    while ($row = mysqli_fetch_assoc($query)) {
      array_push($ar, $row);
    }
    return  $ar;
  }
  public function query($sql)
  {
    return mysqli_query($this->connect, $sql);
  }
  public function delete_ID($table,$ar)
  {
    foreach ($ar as $key => $val) {
      $where = $key . '=' . "'$val'";
    }
    $sql = "DELETE from $table where $where ";
    $query = $this->query($sql);
    //echo $sql;
    if ($query) {
      return true;
    } else {
      return false;
    }
  }
}
