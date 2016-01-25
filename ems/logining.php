<?php
include 'core/init_db.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $sql ="SELECT * FROM user WHERE email='$email' and password='$password'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $rows = mysqli_num_rows($query);

        if ($rows == 1) {
            //Successful login
            $users = mysqli_fetch_array( $query);
            @session_start();
            $_SESSION['email'] = $users['email'];
            $_SESSION['surname'] = $users['sname'];
            $_SESSION['firstname'] = $users['fname'];
            $_SESSION['secondname'] = $users['lname'];
            session_write_close();

            header("location: profile.php");
        } else {
            //Unsuccessful
            header("location:index.php ");
        }

    } else {

        echo 'too baD,';
    }

}
