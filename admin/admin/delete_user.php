<?php
session_start();
require_once "../db.php";

spy_sabbir_delete("users", "id", $_GET['id']);
$_SESSION['deleted_status'] = "User Deleted Successfully!";
header('location: view_user.php');
?>