<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pjn";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error){
    die("Connect Fail".$conn->connect_error);
}
session_start();

function go($txt){
    echo"<script>window.location.replace('$txt')</script>";
}
function alert($txt){
    echo"<script>alert('$txt')</script>";
}
function qs($sql){
    global $conn;
    return $conn->query($sql);
}

function checkp($post){
    return isset($_POST[$post]) && trim($_POST[$post]) != "";
}
function checkg($get){
    return isset($_GET[$get]) && trim($_GET[$get]) != "";
}
function checks($s){
    return isset($_SESSION[$s]) && trim($_SESSION[$s]) != "";
}
?>