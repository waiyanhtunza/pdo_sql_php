<?php




// $fname = $_POST['fname'];
// $sname = $_POST['sname'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $fpassword = $_POST['$fpassword'];


$statement = $pdo->prepare('SELECT * FROM users');
$statement->execute();
$row = $statement->fetchAll();

var_dump($row);



require "view/register.view.php";