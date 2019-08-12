<?php
ob_start();
require_once ("libs/rb.php");
$db= mysqli_connect("localhost","root","");
 R::setup( 'mysql:host=localhost;dbname=phpproject1',
        'root', '' ); 

mysqli_select_db($db, "phpproject1");
session_start();
?>