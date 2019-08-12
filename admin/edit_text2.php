<?php
require_once ("blocks/bd.php");
if (isset($_POST["id"])){$id=$_POST["id"]; if($id==""){unset($id);}}
if (isset($_POST["title"])){$title=$_POST["title"]; if($title==""){unset($title);}}
if (isset($_POST["text"])){$text=$_POST["text"]; if($text==""){unset($text);}}


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
                  
                 <?php if (isset($title) && isset($text)) 
 {$result=mysqli_query($db, "UPDATE `settings` SET `text`='$text',`title`='$title' WHERE id='$id'");
    if($result==true){echo "<p><h3 class='text-center'>Страница успешно изменена<h3></p>";}
 else {echo "<p><h3 class='text-center'>Страница не изменена<h3></p>";}}
 
 else {
    echo "<p><h3 class='text-center'>Вы ввели не всю информацию,поэтому Страница не изменена<h3></p>";    
    
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