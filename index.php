<?php
require_once ("blocks/bd.php");
$result=mysqli_query($db, "SELECT * FROM settings WHERE page='index'");


if(!$result)
{
    echo "Запрос на выборку данных из базы не прошел, сообщите об этом администратору 1990boot1990@gmail.com";
    exit(mysql_error());
    
    
}

if (mysqli_num_rows($result)>0){
   $myrow= mysqli_fetch_array($result); ;

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
    <title><?php echo $myrow["title"]; ?></title>

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
          <?php require_once ("blocks/header.php");?>
         
          <section class="row main ">
             
              <div class="col-sm-9">
               
                <?php echo $myrow["text"]; ?>
                
               </div>
            
              <?php require_once ("blocks/right.php");?>
              
          </section>
          

          <footer class="text-center">
              <p>©Сайт.ру</p>
          </footer>
      
      
      </section>
 </body>
</html>

