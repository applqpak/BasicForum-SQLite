<?php

  class DatabaseException extends Exception
  {

  }

  class Database
  {

    private $db;

    public function __construct($path)
    {

      $this->db = new PDO("sqlite:" . $path);

      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    public function query($sql)
    {

      try
      {

        return $this->db->query($sql);

      }
      catch(PDOException $e)
      {

        throw new DatabaseException($e->getMessage());

      }

    }

    public function close()
    {

      $this->db = null;

    }

    public function __destruct()
    {

      $this->db = null;

    }

  }

?>
