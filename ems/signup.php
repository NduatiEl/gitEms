<?php
require 'core/database/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LABS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/signup.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<p>grace labs consolidated</p>
<section>
    <h1>member registration</h1>
    <form action="core/functions/users.php" method="post">
        <label>username</label><br>
        <input placeholder='surname' type='text'name="surname" required><br>
        <label>username</label><br>
        <input placeholder='firstname' type='text'name="firstname" required><br>
        <label>username</label><br>
        <input placeholder='secondname' type='text'name="secondname" required><br>
        <label>email</label><br>
        <input placeholder="email address" type="text" name="email" required><br>
        <label>password</label><br>
        <input placeholder='Password' type='password' name="password" required><br>
        <label>confirm password</label><br>
        <input placeholder="confirm password" type="password" name="passconfirm" required>
        <br>

        <button name="submit">submit </button>


    </form>
    <h2>
        <a href="index.php">already signed up. Login?</a><br><br>

    </h2>
</section>




</div>
</body>
</html>
