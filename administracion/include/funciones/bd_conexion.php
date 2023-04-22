<?php
  $conn = new mysqli('localhost','sa', 'mysql2023', 'ibemcamp');
  if ($conn->connect_error) {
    echo $error -> connect_error;
  }

 ?>