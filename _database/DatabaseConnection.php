<?php

/**
 * Abstracts logic for Database Connection
 * Parameters.
 */
class DatabaseConnection
{
  private $host;
  private $db_name;
  private $connection_str;
  private $user;
  private $password;
  private $connection;
  private $db;

  public function __construct()
  {

    $this->host = "localhost";
    $this->db_name = "db_eco";
    $this->connection_str = "mysql:host={$this->host};dbname={$this->db_name}";
    $this->user = "root";
    $this->password = "donkey";

    // $this->host = "194.81.104.22";
    // $this->db_name = "db_eco";
    // $this->connection_str = "mysql:host={$this->host};dbname={$this->db_name}";
    // $this->user = "ecobabylon";
    // $this->password = "group0402";
 }

  public function connect()
  {
    try {
      $this->db = new PDO($this->connection_str, $this->user, $this->password);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Err!!!: {$e->getMessage()}";
    }
    return $this->db;
  }

  public function closeConnection()
  {
    $this->db = null;
  }

}