<?php

  include "messages.php";

?>

<!DOCTYPE html>

  <html>

    <head>

      <title>

        Basic Forum

      </title>

    </head>

    <body>

      <center>

        <h1>

          Basic Forum

        </h1>

        <form method="GET" action="post_message.php">

          User: <input type="text" name="user" />

          <br />

          Message:

          <br />

          <textarea name="message" cols="45" rows="5"></textarea>

          <br />

          <input type="submit" value="Post message" />

        </form>

      </center>

    </body>

  </html>
