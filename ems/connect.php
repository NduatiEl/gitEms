<?php
/**
 * Created by PhpStorm.
 * User: nduati
 * Date: 1/16/16
 * Time: 11:05 AM
 */

include 'config.php';

function array_sanitize(&$item)
{
    $item=mysqli_real_escape_string($item);
}
function register_user($register)
{
    $register['password']==md5($register['password']);
    array_walk($register,'array_sanitize');
    $fields='`' .implode('`,`', array_keys($register)). '`';
    $data='\''.implode('\',\'', $register).'\'';
    mysqli_query("INSERT  into 'emplogin' ($fields) VALUES ($data)");

}
function init_db()
{
    $db=new mysqli(host,username,password,dbname);
    if ($db->connect_errno){
    throw  new Exception("Cant connect to the database");
}
    else {
    return $db;
}
}

function exec_sql($sql){

    $db=init_db();
    $result=$db->query($sql);
    if($db->errno){
        throw new  Exception("Query error". $db->error);

    }
    else{
        return $result;

    }

}

function decode_result($result){
    $data=[];
    foreach($result as $row){
        $data[]=$row;

    }
    return $data;

}

