<?php
require_once("blocks/bd.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Авторизация</title>

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
              <div class="col-sm-12">
                <h2 class="text-center">Авторизация</h2>
                <hr>
         
 <?php 


$data=$_POST;
if (isset($data["do_login"]))
{
     $errors=array();
     $user=R::findOne('users','login=?',array($data["login"]));
     if ($user){
         if(password_verify($data["password"], $user->password))
         {
             $_SESSION['logged_user']=$user;
             echo "<p class='text-center bg-success'>Вы авторизованы,можете перейти на <a href='index.php'>главную</a> страницу</p>";
             ;}
         else{
             $errors[]="<p class='text-center bg-danger'>Неверно введен пароль</p>"
             ;}    
             
         ;}
     else {
    $errors[]="<p class='text-center bg-danger'>Пользователь с таким логином не найден</p>"
          ;} 
     if (!empty($errors))
    {
         echo array_shift($errors);  
     ;}      
}

?>
<form action="/login.php" method="POST" class="text-center" >
    <div class="form-group">
    <label><p >
        <strong> Логин: </strong>
        <input type="text" class="form-control" name="login" value="<?php echo @$data["login"];?>">
   </p></label>
   </div>
    <div class="form-group">
   <label><p>
        <strong> Пароль: </strong>
        <input type="password" class="form-control" name="password" value="<?php echo @$data["password"];?>">
   </p></label>
   </div>
  <p>
      <button class="btn btn-default btn-success" type="submit" name="do_login">Войти</button>
   </p>
    
    
    
</form>
               </div>
            
             
              
          </section>
          

          <footer class="text-center">
              <p>©Сайт.ру</p>
          </footer>
      
      
      </section>
 </body>
</html>