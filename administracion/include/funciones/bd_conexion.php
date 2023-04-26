<?php
  $conn = new mysqli('localhost','root', 'mysql2023', 'ibemcamp');
  if ($conn->connect_error) {
    echo $error -> connect_error;
  }

 ?>