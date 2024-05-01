<?php
session_start();
require_once "db.php";

$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$user_phone_number = $_POST['user_phone_number'];
$user_gender = $_POST['user_gender'];
$user_date_of_birth = $_POST['user_date_of_birth'];

$submit_ability = true;
if (!$user_name) {
    $_SESSION['user_name_error'] = "Please fill up your name";
    $submit_ability = false;
}
if (!$user_gender) {
    $_SESSION['user_gender_error'] = "Please fill up your gender";
    $submit_ability = false;
}
if ($_FILES['profile_new_photo']['name']) {
    $allowed_image_extension = array("png", "jpg", "jpeg", "gif");
    $file_extension = pathinfo($_FILES["profile_new_photo"]["name"], PATHINFO_EXTENSION);

    if (!in_array($file_extension, $allowed_image_extension)) {
        $_SESSION['profile_new_photo_error'] = "Please choose Jpg, Png, Jpeg of Gif images";
        $submit_ability = false;
    } elseif ($_FILES["profile_new_photo"]["size"] > 2000000) {
        $_SESSION['profile_new_photo_error'] = "Please choose Image size exceeds 2MB";
        $submit_ability = false;
    }
}

if($submit_ability){
    if ($_FILES['profile_new_photo']['name']) {
        // Photo Delate
        $oldPhotoPath = "../admin/img/". $_POST['profile_old_photo'];
        if (file_exists($oldPhotoPath)) {
            unlink($oldPhotoPath);
        }
        // Photo Upload Start
        $uploaded_photo = $_FILES['profile_new_photo'];
        $after_explode = explode('.', $uploaded_photo['name']);
        $new_photo_name = rand() . time() . "." . end($after_explode);
        $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
        $new_location = '../admin/img/' . $new_photo_name;
        move_uploaded_file($uploaded_photo_temporary_location, $new_location);
        // Update Query
        $profile_old_photo = $_POST['profile_old_photo'];
        $update_query = "UPDATE users SET profile_img = '$new_photo_name' WHERE profile_img = '$profile_old_photo'";
        mysqli_query(connect_to_db(), $update_query);
    }

    $update_query = "UPDATE users SET full_name = '$user_name', phone_number = '$user_phone_number', gender = '$user_gender', date_of_birth = '$user_date_of_birth' WHERE id = '$user_id'";
    mysqli_query(connect_to_db(), $update_query);
    $_SESSION['edit_status'] = "Profile Edit Successfully!";
    header('location: profile.php');
}else{
    $_SESSION['missing_status'] = "Profile details incorrect! Please check in the required information.";
    header('location: profile.php');
}

?>