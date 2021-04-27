<?php
session_start();
unset($_SESSION['adminname']);
echo "<script>window.open('index.php','_self')</script>";
?>