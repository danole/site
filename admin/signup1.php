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
    <title>Регистрация</title>

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
          <section class="row main ">
              <div class="col-sm-12">
                <h2 class="text-center">Авторизация</h2>
                <hr>
<?php 


$data=$_POST;
if (isset($data["do_signup"]))
{
    $errors=array();
    if(trim($data["login"])=="")
    {
     $errors[]="<p class='text-center bg-danger'>Введите логин!</p>"   
    ;}
    if(trim($data["email"])=="")
    {
     $errors[]="<p class='text-center bg-danger'>Введите email!</p>"   
    ;}
    if($data["password"]=="")
    {
     $errors[]="<p class='text-center bg-danger'>Введите пароль!</p>"   
    ;}
    if($data["password_2"]!=$data["password"])
    {
     $errors[]="<p class='text-center bg-danger'>Повторный пароль введен не верно!</p>"   
    ;}
    if (R::count('users',"login=?",array($data['login']))>0){
        $errors[]="<p class='text-center bg-danger'>Пользователь с таким логином уже существует!</p>";
    }
      if (R::count('users',"email=?",array($data['email']))>0){
        $errors[]="<p class='text-center bg-danger'>Пользователь с таким email уже существует!</p>";
    }
    if (empty($errors))
    {
        $user=R::dispense('administration');
        $user->login=$data["login"];
        $user->email=$data["email"];
        $user->password= password_hash($data["password"], PASSWORD_DEFAULT) ;
        R::store($user);
        echo "<p class='text-center bg-success'>Вы успешно зарегистрированы,можете перейти на <a href='index.php'>главную</a> страницу</p>"; 
        
    }
    
 else {
        echo array_shift($errors);  
    }
}

?>


<form action="signup1.php" method="POST" class="text-center">
    <div class="form-group">
        <label>
    <p>
        <strong> Ваш логин: </strong>
        <input class="form-control" type="text" name="login" value="<?php echo @$data["login"];?>">
   </p>
   </label>
   <div class="form-group">
       <label>
   <p>
        <strong> Ваш Email: </strong>
        <input class="form-control" type="email" name="email" value="<?php echo @$data["email"];?>">
   </p>
   </label>
   <div class="form-group">
       <label>
    <p>
        <strong> Ваш пароль: </strong>
        <input class="form-control" type="password" name="password" value="<?php echo @$data["password"];?>">
   </p>
   </label>
   <div class="form-group">
       <label>
   <p>
        <strong>Введите ваш пароль еще раз: </strong>
        <input class="form-control" type="password" name="password_2" value="<?php echo @$data["password_2"];?>">
   </p>
   </label>
   
  <p>
      <button class="btn btn-default btn-success" type="submit" name="do_signup">Зарегистрироваться</button>
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
