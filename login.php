<?php
session_start();
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

if ($email != null && $wachtwoord != null) {

      echo "Username or Password is invalid";


try {
  $conn = new PDO("mysql:host=127.0.0.1:8889;dbname=webshopdb", 'root', 'root');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM gebruikers where email='".$email."'";

$stmt = $conn->query($sql);
while ($row = $stmt->fetch()) {
  if ($row['email'] == $email && $row['wachtwoord'] == $wachtwoord) {
  $_SESSION['current_user']=$email;
  header("location: usersession.php"); // Redirecting To Other Page

  }
  else {
  echo "Username or Password is invalid";
  }
  }
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

//include("index.php");

// Store Session Data



$conn = NULL;
}
?>
