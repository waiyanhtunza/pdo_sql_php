<?php
session_start();

if (!isset($_SESSION["user"])){
    header("location:login.php");

   
}


require "../view/index.php";