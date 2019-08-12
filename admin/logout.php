<?php 
require_once("blocks/bd.php");

unset($_SESSION['logged_user']);
header('Location:/admin/index.php');
?>