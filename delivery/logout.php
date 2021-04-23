<?php
session_start();
unset($_SESSION['demail']);
unset($_SESSION['dname']);
unset($_SESSION['did']);
echo "<script>window.open('index.php','_self')</script>";
?>