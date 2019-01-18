<?php
session_start();
$email = $_SESSION['current_user'];
print "je bent ingelogt als" . " " . $email;

include("head.php");
?>
<body>

<?php

  include("inlognav.php");

  ?>



<div class="container-fluid">

<h2>Productenlijst</h2>

<form class="bs-component">

  <div class="input-group">


  <a href="index.html" class="btn btn-info">Product toevoegen</a>

  </div><!-- /input-group -->

 </form>

<?php
if (isset($_GET['naamfilter']))
 {
   $naamfilter = $_GET['naamfilter'];
 }
else
  {
	  $naamfilter = '';
  }
try {
    $conn = new PDO("mysql:host=127.0.0.1:8889;dbname=webshopdb", 'root', 'root');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->query("SELECT * FROM producten WHERE naam LIKE '%$naamfilter%'");
  echo "<table border=0 cellpadding=5>";
	while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $row['naam'] . "</td><td>" . $row['prijs'] . "</td>";
		echo "<td><a href='dbproductverwijderen.php?productid=" . $row['id'] . "'><button type='button' class='btn btn-danger btn-sm'>verwijderen</button></a></td> ";
    echo "<td><a href='dbproductbewerken.php?productid=" . $row['id'] . "'><button type='button' class='btn btn-primary  btn-sm'>Wijzigen</button></a></td>";
    echo "<td><a href='koopproduct.php?productid=" . $row['id'] . "'><button type='button' class='btn btn-success  btn-sm'>Kopen</button></a></td>";

		echo "</tr>";
  }
  echo "</table>";

}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;



?>


</div>

</body>
