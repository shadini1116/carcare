<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["adminName"]);
header("Location:index.php");
?>
