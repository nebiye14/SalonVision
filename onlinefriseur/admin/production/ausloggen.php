<?php 
session_start();

session_destroy();

header("Location:adminPanel_login.php?status=exit");

?>