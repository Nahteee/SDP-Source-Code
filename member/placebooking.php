<?php

include("../conn.php");
session_start();

$petId = intval($_GET['id']);

$pets = mysqli_query($con, "SELECT * FROM pets WHERE ID=$petId");
?>
<html>
<head>
	<link rel="stylesheet" href = "../CSS/style.css">
	<title> Adopt Pet </title>
</head>
<div class = "center">

<?php
if (!isset($_SESSION['userID'])) {
	echo '<script>alert("Please login before placing an adoption request.");
        window.location.href= "../login.php";
        </script>';
}
else {
while($row = mysqli_fetch_array($pets)) {

		echo "<img src = '../Uploads/" . $row['image_name'] . "' style = 'width: 300px; height: auto;'>";
		echo "<h1>" . $row['name'] . "</h1>";

		echo $row['name'] . " is " . $row['age'] . " years old<br>";
		echo $row['name'] . " is a " . $row['species'] . "<br>";
		echo $row['name'] . "'s breed is " . $row['breed'] . "<br>";
		echo "<h3><br>Will you adopt " . $row['name'] . "?</h3><br>";
	

?>

Adoption remarks: <br>
<form action = "sendbooking.php" method = "post">
	<input type = "hidden" name = "petID" value = "<?php echo $row['ID']; ?>">
	<input type = "hidden" name = "userID" value = "<?php echo $_SESSION['userID']; ?>">
	<input type = "hidden" name = "species" value = "<?php echo $row['species']; ?>">
	<input type = "hidden" name = "centreID" value = "<?php echo $row['centre_ID']; ?>">
	<textarea type="text" name="remarks"></textarea>
	<input type = "submit" value="Adopt <?php echo $row['name']; ?>">
</form>
</div>

<?php
	}
}
mysql_close($con);
?>