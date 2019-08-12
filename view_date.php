<?php
require_once ("blocks/bd.php");


if (isset($_GET["date"])){
    $date=$_GET["date"]
            ;}
 else {
    exit("<>Вы обратились к файлу без определенных данных. Проверьте адресную строку браузера.<>")
;}
$date_title=$date;
$date_begin=$date."-01";
$date++;
$date_end=$date."-01";

$result3=mysqli_query($db,"SELECT * FROM data WHERE date>'$date_begin' and date<'$date_end'");
if(!$result3)
{
    echo "Запрос на выборку данных из базы не прошел, сообщите об этом администратору 1990boot1990@gmail.com";
    exit(mysql_error());
    
    
}

if (mysqli_num_rows($result3)>0){
   $myrow3= mysqli_fetch_array($result3); 
 
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
    <title><?php echo "Статьи за $date_title"; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <section class="container">
         <?php require_once ("blocks/header.php");   ?>
          <section class="row main">
              <div class="col-sm-9">
                   <h2 class="text-center"><?php echo "Статьи за $date_title"; ?></h2>
                <hr>
               
              
                <?php
                
              do{ printf("<table class='table table-striped'>
                            <tr>
                            <td><img src='%s' align='left' class='img-rounded'>
                            <a href='view_post.php?id=%s'><p class='text-center'>%s</p></a><p class='text-center'>Дата добавления: %s</p><p class='text-center'>Автор урока: %s</p></td>
                            <tr>
                            <tr class='success'>
                            <td><p>%s</p></td><tr/><tr><td><p>Просмотров: %s</p></td></tr>
                            <tr>
                          </table>",
                      $myrow3["mini_img"], $myrow3["id"],$myrow3["title"],$myrow3["date"],$myrow3["author"],$myrow3["description"],$myrow3["view"]);}
              while( $myrow3= mysqli_fetch_array($result3) );
              
                
                ?>
                
                
                
                
               </div>
            
              <?php require_once ("blocks/right.php");?>
              
          </section>
          

          <footer class="text-center">
              <p>©Сайт.ру</p>
          </footer>
      
      
      </section>
 </body>
</html>


