<?php   

$email = $_POST ["email"];
$password = $_POST ["password"];

$db = new Database('localhost', 'auth','3306', 'root', '');
$db->connect();
$hashed_password = $db->query('SELECT password FROM users WHERE id = :id',[
    ':id'=> $_POST['id'],
]);

if (password_verify($password,$hashed_password)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}


require "../view/login.php";