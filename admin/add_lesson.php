<?php
require_once ("blocks/bd.php");

if (isset($_POST["title"])){$title=$_POST["title"]; if($title==""){unset($title);}}

if (isset($_POST["text"])){$text=$_POST["text"]; if($text==""){unset($text);}}
if (isset($_POST["description"])){$description=$_POST["description"]; if($description==""){unset($description);}}
if (isset($_POST["author"])){$author=$_POST["author"]; if($author==""){unset($author);}}
if (isset($_POST["mini_img"])){$mini_img=$_POST["mini_img"]; if($mini_img==""){unset($mini_img);}}
if (isset($_POST["date"])){$date=$_POST["date"]; if($date==""){unset($date);}}
if (isset($_POST["cat"])){$cat=$_POST["cat"]; if($cat==""){unset($cat);}}
$view="0";
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Обработчик</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main2.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <section class="container">
           <?php require_once ("blocks/header.php");?>
          <section class="row main">
              <div class="col-sm-9">
                  
                 <?php if (isset($title) && isset($text) && isset($description) && isset($author) && isset($mini_img) && isset($date) && isset($cat)) 
 {$result=mysqli_query($db, "INSERT INTO `data` (`cat`, `description`, `text`, `view`, `author`, `mini_img`, `date`, `title`) VALUES ('$cat', '$description', '$text', '$view', '$author', '$mini_img', '$date', '$title')");
    if($result==true){echo "<p><h3 class='text-center'>Ваша статья успешно добавлена<h3></p>";}
 else {echo "<p><h3 class='text-center'>Ваша статья не добавлена<h3></p>";}}
 
 else {
    echo "<p><h3 class='text-center'>Вы ввели не всю информацию,поэтому статья не добавлена<h3></p>";    
    
}

?>
                  
                
               </div>
            
                    <?php require ("blocks/right.php");?>
          </section>
          

          <footer class="text-center">
              <p>©Сайт.ру</p>
          </footer>
      
      
      </section>
 </body>
</html>