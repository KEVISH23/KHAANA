<?php
session_start();
unset($_SESSION['uemail']);
unset($_SESSION['uname']);
echo "<script>window.open('index.php','_self')</script>";
?>