<?php
session_start();
unset($_SESSION['admin_id']);
unset($_SESSION['pharmacist_id']);
unset($_SESSION['user_id']);
unset($_SESSION['doctor_id']);
unset($_SESSION['admin_name']);
unset($_SESSION['staff_id']);
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.html");
?>
