<?php
session_start();
error_reporting(0);
session_unset($_SESSION['lamp_admin']);
session_unset($_SESSION['name']);
session_unset($_SESSION['lamp_admin']);
session_unset($_SESSION['user_id']);
session_unset($_SESSION['role_name']);
session_unset($_SESSION['role_id']);
session_unset($_SESSION['msg']);
session_unset($_SESSION['user_agent']);
session_unset($_SESSION['ip_address']);
// session_destroy();
$_SESSION['msg'] ="Logout successfully.";
header("Location:login.php");
?>