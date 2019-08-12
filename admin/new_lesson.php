<?php
require_once ("blocks/bd.php");
$result=mysqli_query($db, "SELECT * FROM categories");


if(!$result)
{
    echo "Запрос на выборку данных из базы не прошел, сообщите об этом администратору 1990boot1990@gmail.com";
    exit(mysql_error());
    
    
}

if (mysqli_num_rows($result)>0){
   $myrow= mysqli_fetch_array($result); 

}
else{
echo "Информация не может быть извлечена, в таблице нет записей "    ;

}
    
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Добавить новую статью</title>

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
                  
                  <h1 class="text-center">Добавить новую статью</h1><br>
                  <hr>
                      <form action="add_lesson.php" method="POST" name="form1" class="text-center">
                      <label><p>Введите название статьи:<br>
                      <input type="text" name="title" id="title"></p></label><br>
                      <label><p>Введите краткое описание статьи c тэгами абзацев:<br>
                      <textarea name="description" id="description" cols="40" rows="5"></textarea></p></label><br>
                      <label><p>Введите текст статьи c тэгами абзацев:<br>
                      <textarea name="text" id="text" cols="40" rows="10"></textarea></p></label><br>
                      <label><p>Введите автора статьи:<br>
                      <input type="text" name="author" id="author"></p></label><br>
                      <label><p>Введите путь к миниатюре:<br>
                      <input type="text" name="mini_img" id="mini_img"></p></label><br>
                      <label><p>Введите дату статьи:<br>
                              <input class="text-center" type="text" name="date" id="date" value="<?php $date=date("Y-m-d");echo $date  ?>"></p></label><br>
                      <label><p>Выберите категорию статьи:<br>
                              <select name="cat">
                              <?php
                              do {printf("<option value='%s'>%s</option>",$myrow["id"],$myrow["title"]);}
                              while($myrow= mysqli_fetch_array($result));
                              
                              
                              ?>    
                              </select><br>
                      </label><br>
                      <input class="btn btn-default btn-success"type="submit" name="submit" id="submit" value="Занести статью в базу"></p></label><br>
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