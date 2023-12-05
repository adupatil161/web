<?php
session_start();
include_once 'php/config.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $update_query = "update users set Status = 'active' where token='$token' ";
    $query = mysqli_query($con, $update_query);

    if ($query) {
        $_SESSION['msg'] = "Account Updated Successfully";
        header('location: index.php');
    } else {
        $_SESSION['msg'] = "Account not updated";
        header('location: register1.php');
    }
}
?>