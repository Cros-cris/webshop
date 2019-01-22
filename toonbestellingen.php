
<?php
session_start();
$email = $_SESSION['current_user'];

include("head.php");
 ?>
<body>
<?php
include("inlognav.php");

 ?>
<div class="container-fluid">

<h2>Bestellingen</h2>

<?php




try {
    $conn = new PDO("mysql:host=127.0.0.1:8889;dbname=webshopdb", 'root', 'root');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->query("SELECT * FROM bestellingen where email='$email'");
	while ($row = $stmt->fetch()) {
    echo "<LI>" . $row['id'] . " - ";
    echo $row['email'] . " - ";
    echo $row['productid'] . " - ";
    echo $row['tebetalen'] . " - ";
    echo "</LI>";
$totaal = $totaal + $row['tebetalen'];


  }
  echo "<br>";
  echo "totaalbedrag: " . $totaal;
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;

?>

</div>

</body>
