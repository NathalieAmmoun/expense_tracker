<?php
session_start();
include "connection.php";
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location:../login.php");
?>