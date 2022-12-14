<?php
include("../header.php");
?>

<html>
<!--Page to fill up form to apply for an adoption centre page<-->
<head>
    <link rel="stylesheet" href="../CSS/ownerstyle.css">
</head>
<title>Apply for page</title>
<body style='background-image: url("/SDP-Source-Code/Imgs/bg.png");'>
    <div class = "center" style='background-color: white;'>
    <h2>Apply for an Adoption Centre Page</h2>
    <h4>Please enter your details below: </h4>
    <br>
    <form action="centreinsert.php" method="post" enctype="multipart/form-data">
        <p>
        Centre name: <br>
        <input type="text" name="centreName" required="required">
        </p>
        <p>
        SSM: <br>
        <input type="text" name="centreSSM" maxlength="10" required="required">
        </p>
        <p>
        Address: <br>
        <textarea type="text" name="address" required="required"> </textarea>
        </p>
        <p>
        Phone number: <br>
        <input type="tel" name="centrePhone" required="required">
        </p>
        <p>
        Your email: <br>
        <input type="email" name="centreEmail" required="required">
        </p>
        <p>
        Centre description: <br>
        <textarea type="text" name="centreDesc" required="required"> </textarea>
        </p>
        <p>
        Centre photo: <br>
        <input type="file" name="centrePic">
        </p>
        <input type="submit" value="Submit Application">
    </form>
</div>
</body>
</html>
