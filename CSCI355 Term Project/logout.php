<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['email']);
unset($_SESSION['success']);
unset($_SESSION['first_name']);
unset($_SESSION['last_name']);
header("location: index.html");
?>