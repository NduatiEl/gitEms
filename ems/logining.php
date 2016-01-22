<?php
/**
 * Created by PhpStorm.
 * User: nduati
 * Date: 1/16/16
 * Time: 12:53 PM
 */


require 'connect.php';
/*if (isset($_POST['username'])&&isset($_POST['password'])){
    $username=mysqli_real_escape_string($_POST['username']);
    $password=mysqli_real_escape_string($_POST['password']);
    $pass_hash=md5($password);


    if(!empty($username)&&(!empty($password)))
    {
        $query="SELECT 'username' AND 'password' FROM 'emplogin' WHERE 'username'='$username' AND 'password'=$pass_hash";
        if($query_run=mysqli_query($query)){
            $num_rows=mysqli_num_rows($query_run);
            if($num_rows==0)
            {
                echo 'invalid username or password';
            }
            elseif($num_rows==1)
            {
                echo 'success';
            }

        }

    }
    else {
        echo 'sorry!';
    }

}*/

$msg;
$db=init_db();

if(isset($_POST)){
    $username=$db->escape_string($_POST['username']);
    $password=$db->escape_string($_POST['password']);


   $pass=md5($password);

    $pass_hash=$pass;
    $login=decode_result(exec_sql("select * from `emplogin` WHERE `username`='$username' AND `password`='$pass_hash'"));


    if(count($login) != 0){
        $_SESSION['login']=$username;

       header("location:register.php");

    }
    else{


        $msg="Invalid username or password";
       echo $msg;
    }
}