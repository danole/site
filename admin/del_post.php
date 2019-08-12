<?php
require_once ("blocks/bd.php");
if (isset($_POST["id"])){$id=$_POST["id"]; if($id==""){unset($id);}}


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
                  
                 <?php if (isset($id)) 
 {$result=mysqli_query($db, "DELETE FROM `data` WHERE `data`.`id` = '$id'");
    if($result==true){echo "<p><h3 class='text-center'>Статья успешно удалена<h3></p>";}
 else {echo "<p><h3 class='text-center'>Статья не удалена<h3></p>";}}
 
 else {
    echo "<p><h3 class='text-center'>Вы обратились к файлу без необходимых данных<h3></p>";    
    
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