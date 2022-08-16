<?php
//Page where owners can view all their owned pages

include("conn.php");
$result = mysqli_query($con, "SELECT * FROM centre_pages WHERE user_ID = 11 AND verified = 1"); //replace 11 with user ID from session variable when logging in
?>

<html>
<body>
	<title>View Adoption Centre Pages</title>
	<h2>Owned Adoption Centres</h2>
	<br>

	<table>
		<tr>
			<td>Adoption Centre Name</td>
			<td>Visit Page</td>
			<td>Edit Details</td>
		</tr>
		<?php
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>";
			echo $row['centre_name'];
			echo "</td>";

			echo "<td>";
			echo "<a href=\"ikea.com";
			echo "\">Visit Page</a></td>"; //replace this with page link from browsepages.php
			
			echo "<td>";
			echo "<a href=\"editpage.php?id=";
			echo $row['ID'];
			echo "\">Edit</a></td>";
			
		}
		mysqli_close($con);
		?>
	</table>
</body>
</html>
