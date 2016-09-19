<?php

  include "db.php";

  $sql = "SELECT * FROM forum;";

  $stmt = $db->query($sql);

  while($row = $stmt->fetch())
  {

    echo "<center>";

    echo "Posted by " . $row["user"] . " on " . $row["date"] . "<br />";

    echo $row["message"] . "<br />";

    echo "-----------------------<br />";

    echo "</center>";

  }

?>
