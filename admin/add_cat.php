<?php
require_once ("blocks/bd.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Добавить новую категорию</title>

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
                  
                  <h1 class="text-center">Добавить новую категорию</h1><br>
                  <hr>
                      <form action="new_cat.php" method="POST" name="form1" class="text-center">
                      <label><p>Введите название категории:<br>
                      <input type="text" name="title" id="title"></p></label><br>
                      <label><p>Введите описание категории:<br>
                      <textarea name="text" id="text" cols="40" rows="10"></textarea></p></label><br>
                      <input class="btn btn-default btn-success"type="submit" name="submit" id="submit" value="Занести категорию в базу"></p></label><br>
                  </form>
                
               </div>
            
                   <?php require ("blocks/right.php");?>
          </section>
          

          <footer class="text-center">
              <p>©Сайт.ру</p>
          </footer>
      
      
      </section>
 </body>
</html>