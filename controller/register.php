<?php
// require "../functions.php"


require "../Database.php";

$password = $_POST["password"];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$db = new Database('localhost', 'auth','3306', 'root', '');
$db->connect();
$result = $db->query('INSERT INTO `users` (`fname`, `sname`, `email`, `password`) VALUES (:fname, :sname, :email, :password)',[
    ':fname'=> $_POST['fname'],
    ':sname'=> $_POST['sname'],
    ':email'=> $_POST['email'],
    ':password'=> $hashed_password,
]); 
require "../view/register.php"; 







