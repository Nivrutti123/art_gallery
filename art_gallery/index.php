<?php
$pdo=new pdo('mysql:host=localhost;dbname=rhuturaj','root','');
session_start();
$f_name=$_POST['f-name'];
$l_name=$_POST['l-name'];
$email=$_POST['email'];
$message=$_POST['comment'];

$insert=$ pdo->prepare("insert into details(f_name,l_name,email,message) values(:f_name,:l_name,:email,:message)");
$insert->bindParam(':f_name',$f_name);
$insert->bindParam(':l_name',$l_name);
$insert->bindParam(':email',$email);
$insert->bindParam(':message',$message);

$insert->execute();
header('location; index.html');
?>