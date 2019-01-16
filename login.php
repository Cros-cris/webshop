<?php
session_start();
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];
echo "hallo";
if ($email != null && $wachtwoord != null) {
  // code...


try {
  $conn = new PDO("mysql:host=127.0.0.1:8889;dbname=webshopdb", 'root', 'root');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM gebruikers where email='".$email."'";

$stmt = $conn->query($sql);
while ($row = $stmt->fetch()) {
  if ($row['email'] == $email) {
  $_SESSION['login_email']=$email; // Initializing Session
  echo "je bent ingelogt";
  //header("location: index.php"); // Redirecting To Other Page
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
eind doc
