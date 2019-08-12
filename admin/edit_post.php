<?php
require_once ("blocks/bd.php");

if (isset($_GET['id'])){$id=$_GET['id'];}

$result=mysqli_query($db, "SELECT * FROM data WHERE id=$id");



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
$result2=mysqli_query($db, "SELECT * FROM categories");


if(!$result2)
{
    echo "Запрос на выборку данных из базы не прошел, сообщите об этом администратору 1990boot1990@gmail.com";
    exit(mysql_error());
    
    
}

if (mysqli_num_rows($result2)>0){
   $myrow2= mysqli_fetch_array($result2); 

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
    <title>Редактирование статьи</title>

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
                  
                  <h1 class="text-center">Редактирование статьи</h1><br>
                  <hr>
                      <form action="add_post.php" method="POST" name="form1" class="text-center">
                      <label><p>Название статьи:<br>
                      <input type="text" name="title" id="title" value="<?php echo $myrow['title'];?>"></p></label><br>
                      <label><p>Краткое описание статьи c тэгами абзацев:<br>
                      <textarea name="description" id="description" cols="40" rows="5"><?php echo $myrow['description'];?></textarea></p></label><br>
                      <label><p>Текст статьи c тэгами абзацев:<br>
                      <textarea name="text" id="text" cols="40" rows="10" ><?php echo $myrow['text'];?></textarea></p></label><br>
                      <label><p>Автор статьи:<br>
                      <input type="text" name="author" id="author" value="<?php echo $myrow['author'];?>"></p></label><br>
                      <label><p>Путь к миниатюре:<br>
                      <input type="text" name="mini_img" id="mini_img" value="<?php echo $myrow['mini_img'];?>"></p></label><br>
                      <label><p>Дата статьи:<br>
                      <input class="text-center" type="text" name="date" id="date" value="<?php $date=date("Y-m-d");echo $date  ?>"></p></label><br>
                      
                      
                      <input type="hidden" name="id" id="id" value="<?php echo $myrow['id'];?>">        
                      <input type="hidden" name="view" id="view" value="<?php echo $myrow['view'];?>">        
                      <label><p>Категория статьи:<br>
                              <select name="cat">
                              <?php
                              do {printf("<option value='%s'>%s</option>",$myrow2["id"],$myrow2["title"]);}
                              while($myrow2= mysqli_fetch_array($result2));
                              
                              
                              ?>    
                              </select><br>
                      </label><br>        
                                
                              
                      <input class="btn btn-default btn-success"type="submit" name="submit" id="submit" value="Редактировать статью"></p></label><br>
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