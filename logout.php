<?php
session_start();
unset($_SESSION['l_id']);
session_destroy();
header('location:login.php');
?>