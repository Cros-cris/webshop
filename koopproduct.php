<?php
session_start();


    include_once("dblib.php");
$productid = $_GET['productid'];
$email = $_SESSION['current_user'];
$tebetalen = 0.00;
$tebetalen = dblookup("producten", "prijs", $productid);
//echo $email; die();
try {
    $conn = new PDO("mysql:host=127.0.0.1:8889;dbname=webshopdb", 'root', 'root');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $conn->prepare('INSERT INTO bestellingen (email, productid, tebetalen) VALUES (:femail, :fproductid, :ftebetalen)');
    $statement->execute([
    'femail' => $email,
    'fproductid' => $productid,
    'ftebetalen' => $tebetalen
    ]);

}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = NULL;
header("Location: usersession.php");
?>
