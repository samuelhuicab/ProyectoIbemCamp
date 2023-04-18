<?php
  $conn = new mysqli('localhost','root', '@mayaserver', 'ibemcamp');
  if ($conn->connect_error) {
    echo $error -> connect_error;
  }

 ?>