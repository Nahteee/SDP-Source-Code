<?php
//PHP to add new pets

include("../conn.php");
$target_dir = "../Uploads/";
$target_file = $target_dir . basename($_FILES["petPic"]["name"]);
$image = $_FILES['petPic']['name'];

$sql="INSERT INTO pets (name, age, species, breed, centre_ID, image_name)

VALUES

('$_POST[petName]', '$_POST[petAge]', '$_POST[petSpecies]', '$_POST[petBreed]', '$_POST[centreID]', '$image')";

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
  echo '<script type="text/JavaScript"> alert("Pet Succesfully Updated!"); window.location.href = "/SDP-Source-Code/member/browsepages.php"; </script>';
}

mysqli_close($con);

?>
