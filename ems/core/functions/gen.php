<?php
/**
 * Created by PhpStorm.
 * User: nduati
 * Date: 1/23/16
 * Time: 4:06 PM
 */
function user_exists($email){
$host='localhost';
$user='root';
$pass='4774';
$db='ems';

$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){
    $link ='connection error';
    die('connection problem'. mysqli_error($link));

}
else{
    $query = "SELECT 'email' from  `userdata` WHERE 'email'=$email";
    $result = mysqli_query($conn,$query);
    if ($result){
        return true;
    }else {
        return false;
    }}}
