<?php

  include "db.php";

  $sql = "DROP TABLE IF EXISTS forum;";

  $sql2 = "CREATE TABLE IF NOT EXISTS forum (

    user VARCHAR NOT NULL,

    message VARCHAR NOT NULL,

    date DATETIME NOT NULL

  );";

  $db->query($sql);

  $db->query($sql2);

  echo "Table created.";

?>
