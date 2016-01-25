<?php
include "connect.php";
if(isset($_POST['submit'])) {
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
    $second_name = mysqli_real_escape_string($conn, $_POST['secondname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = sha1(mysqli_real_escape_string($conn, $_POST['password']));

    $sql = "insert into `user`(fname,sname,lname,email,password)
          VALUES ('$surname','$first_name','$second_name','$email','$password')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        ?>
        <script>
            alert('successfully registered');
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('error while registering');
        </script>
        <?php
    }
}
    ?>
