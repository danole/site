<?php
require_once ("libs/rb.php");
$db= mysqli_connect("localhost","root","");
 R::setup( 'mysql:host=localhost;dbname=phpproject1',
        'root', '' ); 
session_start();
mysqli_select_db($db, "phpproject1");


?>