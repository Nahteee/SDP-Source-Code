<?php
include("../header.php");
?>

<html>
<!--Page to fill up form to register as a centre owner<-->
<head>
    <link rel="stylesheet" href= "../CSS/style.css">
</head>
<body>
    <title>Register as Centre Owner</title>
    <div class = "center">
    <h2>Register as an Adoption Centre Owner</h2>
    <h4>Please enter your details below: </h4>
    <br>
    <form action="register.php" method="post">
        <p>
        Username: <br>
        <input type="text" name="username" required="required">
        </p>
        <p>
        Password: <br>
        <input type="password" name="password" required="required">
        </p>
        <p>
        First Name: <br>
        <input type="text" name="fname" required="required">
        </p>
        <p>
        Last Name: <br>
        <input type="text" name="lname" required="required">
        </p>
        <p>
        IC: <br>
        <input type="text" name="ic" required="required">
        </p>
        <p>
        Phone number: <br>
        <input type="tel" name="phone" required="required">
        </p>
        <p>
        Your email: <br>
        <input type="email" name="email" required="required">
        </p>
        <p>
        Address: <br>
        <textarea type="text" name="address"> </textarea>
        </p>
        <p>
        Income: <br>
        <input type="text" name="income" required="required">
        </p>
        <input type="submit" value="Register">
    </div>
    </form>
</body>
</html>

