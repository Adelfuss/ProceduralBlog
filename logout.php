<?php
session_start();
include_once "path.php";
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['message']);
unset($_SESSION['type']);
session_destroy();
header("Location:" . BASE_URL . "index.php");
?>
