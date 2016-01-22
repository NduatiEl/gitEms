<?php
/**
 * Created by PhpStorm.
 * User: nduati
 * Date: 1/17/16
 * Time: 3:03 AM
 */
require 'logining.php';
require 'signup.php';
require 'connect.php';
if(empty($_POST)===false){
    $required_fields=array('firstname','secondname','surname','email','password','passconfirm');
    foreach($_POST as $key=>$value) {
        if (empty($value) && in_array($key, $required_fields) === true) {
            echo 'all fields are required!';
        }
    }
    if(strlen($_POST['password'])<8){
        echo 'password must be at lleast 8 characters';
    }
    if($_POST['password']!==$_POST['passconfirm']){
        echo 'your password does not match';
    }

}
else
    $register=array(
        'firstname'=>$_POST['firstname'],
        'secondname'=>$_POST['secondname'],
        'surname'=>$_POST['surname'],
        'emailname'=>$_POST['email'],
        'password'=>$_POST['password']
    );
    register_user($register);
