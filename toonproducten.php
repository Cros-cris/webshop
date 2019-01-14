<?php
try {
    $conn = new PDO("mysql:host=127.0.0.1:8889;dbname=webshopdb", 'root', 'root');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->query("SELECT * FROM producten");
	while ($row = $stmt->fetch()) {
  
		echo "<LI>" . $row['naam'] . " : " . $row['prijs'] . "<a href='dbproductverwijderen.php?productid=" . $row['ID'] . "'>Verwijder</a></LI>";
	}

}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;

?>
