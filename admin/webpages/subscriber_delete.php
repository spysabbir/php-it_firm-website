<?php
session_start();
require_once "../db.php";

spy_sabbir_delete("subscribers", "id", $_GET['id']);
$_SESSION['deleted_status'] = "Subscribers Deleted Successfully!";
header('location: subscriber_list.php');
?>