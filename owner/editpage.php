<?php
//PHP to edit centre details

include("../conn.php");
include("../header.php");
include("../session.php");
$id = intval($_GET['id']);
$result = mysqli_query($con,"SELECT * FROM centre_pages WHERE ID=$id");
$pets = mysqli_query($con, "SELECT * FROM pets WHERE centre_ID=$id");

while($row = mysqli_fetch_array($result)) {

?>
<html>
<head>
        <link rel = "stylesheet" href = "../CSS/ownerstyle.css">
</head>
<title> Edit centre details </title>

<body style='background-image: url("/SDP-Source-Code/Imgs/bg.png");'>
        <div class = "center" style='background-color: white;'>
                <h1>Edit Centre Page Details</h1>
<form action="updatepage.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
        <p>
        Centre name: <br>
        <input type="text" name="centreName" required="required" value="<?php echo $row['centre_name'] ?>">
        </p>
        <p>
        SSM: <br>
        <input type="text" name="centreSSM" required="required" value="<?php echo $row['ssm'] ?>">
        </p>
        <p>
        Address: <br>
        <textarea type="text" name="address" required="required"> <?php echo $row['location'] ?> </textarea>
        </p>
        <p>
        Phone number: <br>
        <input type="tel" name="centrePhone" required="required" value="<?php echo $row['phone'] ?>">
        </p>
        <p>
        Your email: <br>
        <input type="email" name="centreEmail" required="required" value="<?php echo $row['email'] ?>">
        </p>
        <p>
        Centre description: <br>
        <textarea type="text" name="centreDesc"> <?php echo $row['description'] ?> </textarea>
        </p>
        <p>
        Centre photo: <br>
        <img src = "<?php echo "../Uploads/" . $row['centre_pic']?>" style = 'width: 300px; height: auto;'> <br>
        <input type="hidden" name="oldcentrepic" value="<?php echo $row['centre_pic']; ?>">
        <input type="file" name="centrePic">
        </p>
        <input type="submit" value="Save changes">
    </form>
<br> <br> <br>
<h3>Center pets</h3>
<br>
    <table>
        <tr>
                <th>Pet's Name</th>
                <th>Pet's Age</th>
                <th>Species</th>
                <th>Breed</th>
                <th>Edit details</th>
                <th>Delete record</th>
        </tr>
        <?php
        while($row1 = mysqli_fetch_array($pets)) {
                echo "<tr>";
                echo "<td>";
                echo $row1['name'];
                echo "</td>";

                echo "<td>";
                echo $row1['age'];
                echo "</td>";

                echo "<td>";
                echo $row1['species'];
                echo "</td>";

                echo "<td>";
                echo $row1['breed'];
                echo "</td>";

                echo "<td>";
                echo "<a href=\"editpet.php?id=";
                echo $row1['ID'];
                echo "\">Edit</a></td>";


                echo "<td><a href=\"deletepet.php?id=";
                echo $row1['ID'];
                echo "\" onClick=\"return confirm('Delete ";
                echo $row1['name'];
                echo " details?');\">Delete</a></td></tr>";;
        }
        echo "</table>";

} ?>
<br> <br>
<button>
<?php
// while($row = mysqli_fetch_array($result)) {
echo '<a class="buttonlink" href="petform.php?id='.$_GET['id']. '">Add pet</a>';
// }

?>
</button>
</div>
<?php
mysqli_close($con);
?>

<footer>
	<?php include("../footer.php") ?>
</footer>
