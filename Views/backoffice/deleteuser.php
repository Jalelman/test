<?php
session_start();
include "../db.class.php";

$id = $_GET['varname'];

require '../db.class.php';

try{
    $verifuser = $pdo -> query('DELETE FROM user WHERE email ="'.$id.'"');
    
    
    header('location:userlist.php');

   
}catch(PDOException $e){
    $e->getMessage();
}

$pdo = null;
?>

