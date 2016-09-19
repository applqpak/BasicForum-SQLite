<?php

  include "db.php";

  if(isset($_GET["user"]) and isset($_GET["message"]))
  {

    $user = $_GET["user"];

    $message = $_GET["message"];

    $sql = "INSERT INTO forum (user, message, date) VALUES ('" . $user . "', '" . $message . "', date());";

    $db->query($sql);

  }

  header("Location: index.html");

?>
