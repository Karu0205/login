<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
$text = "Welcome"
?>

<body>
    <div id = frm>

    <form action="process.php" method="POST">

        <p>
            <label>Username: </label>
            <input type = "text" id = "user" name = "user">
        </p>

        <p>
            <label>Password: </label>
            <input type = "password" id = "pass" name = "pass">
        </p>

        <p>
            <input type = "submit" id = "btn" value = "login">
        </p>
    </form>
    

    </div>
</body>


</html>