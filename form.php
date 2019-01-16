<?php
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

if ($email != null && $wachtwoord != null) {
  // code...


try {
    $conn = new PDO("mysql:host=127.0.0.1:8889;dbname=webshopdb", 'root', 'root');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $conn->prepare('INSERT INTO gebruikers (email, wachtwoord) VALUES (:femail, :fwachtwoord)');
    $statement->execute([
    'femail' => $email,
    'fwachtwoord' => $wachtwoord
    ]);

}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = NULL;
}
?>



<form class="" action="form.php" method="post">
  <input type="text" name="email" value="" placeholder="email...">
  <input type="password" name="wachtwoord" value="" placeholder="wachtwoord...">
  <button type="submit" name="button">registreer</button>
</form>
