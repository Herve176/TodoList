<?php

class DB
{
  static $db_inited = false;
  static $connection = null;

  function __construct()
  {
  }

  public static function init()
  {
    if (DB::$db_inited) {
      return;
    }
    $db_inited = true;
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "todo";
    // Create a new PDO instance
    DB::$connection = new PDO(
      "mysql:host=$hostname;dbname=$database",
      $username,
      $password
    );
    // Set PDO error mode to exception
    DB::$connection->setAttribute(
      PDO::ATTR_ERRMODE,
      PDO::ERRMODE_EXCEPTION
    );
  }

  static  public function getConnection()
  {
    return DB::$connection;
  }
}


DB::init();