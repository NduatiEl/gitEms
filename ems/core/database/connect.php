<?php
$host='localhost';
$user='root';
$pass='4774';
$db='ems';
$conn=mysqli_connect($host,$user,$pass);
$select_db=mysqli_select_db($conn,$db);
if(!$conn){
    die('connection problem');

}