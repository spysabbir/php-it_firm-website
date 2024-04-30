<?php
session_start();
require_once('admin/db.php');

$full_name = trim($_POST["client_full_name"]);
$email_address = trim($_POST["client_email_address"]);
$phone_number = trim($_POST["client_phone_number"]);
$subject = trim($_POST["client_subject"]);
$message = trim($_POST["client_message"]);

if (!$full_name || !$email_address || !$phone_number || !$message) {
    echo json_encode(array('success' => false, 'error' => 'Message is not sent. Sorry, something went wrong!'));
}else{
    date_default_timezone_set('Asia/Dhaka');
    $current_date_time = date('Y-m-d H:i:s');

    $insert_query = "INSERT INTO contacts_messages (full_name, email_address, phone_number, subject, message, message_sending_date) VALUES ( '$full_name', '$email_address', '$phone_number', '$subject', '$message', '$current_date_time');";
    mysqli_query(connect_to_db(), $insert_query);

    echo json_encode(array('success' => true));
}

?>
