<?php
session_start();
class BaseModel extends Database
{
  
  public function __construct()
  {
    $this->connect = $this->connect();
  }
  public function query($sql)
  {
    return mysqli_query($this->connect, $sql);
  }
}
