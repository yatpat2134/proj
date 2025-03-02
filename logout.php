<?php 
require_once("config.php");
session_destroy();
alert("logout success");
go("index.php");
?>