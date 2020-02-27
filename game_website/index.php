<?php
$pdo=new pdo('mysql:host=localhost;dbname=feed1','root','');
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$message=$_POST['message'];

$insert=$pdo->prepare("insert into niv(name,email,pass,message) values(:name,:email,:pass,:message)");
$insert->bindParam(':name',$f_name);
$insert->bindParam(':email',$l_name);
$insert->bindParam(':pass',$email);
$insert->bindParam(':message',$message);

$insert->execute();
header('location; index.html');
?>