<?php
session_start();

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>login</title>


<?php   require 'css.html'; ?>



</head>

<body>
<div id="empty">
    <h5>welcome</h5> <br><h5>to</h5><br><h3> grace lab consolidated</h3>
</div>
<section>
    <h1>Member Login</h1>

    <form action="logining.php" method="post">

        <label>username</label><br>
        <input  placeholder='User Name' type='text'name="username" required><br>
        <label>password</label><br>
        <input  placeholder='Password' type='password' name="password" required><br>
        <button name="submit">login </button>


    </form>

    <h2>
        <a href="signup.php">SIGN UP?</a><br><br>
        <a href='#'>Forgot Password?</a>
    </h2>
</section>





</body>
</html>
