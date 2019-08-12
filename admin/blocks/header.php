<header class="row">
              <div class="col-sm-9  bg2">
                  <div class="row class1">
                      <div class="col-sm-9   bg2">
              <h1 class="text-center" >Добро пожаловать на сайт!</h1><br>
              <br>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-sm-12   bg2">
                          <div>
                              <ul class="nav1">
                                  <li><a href="/admin/index.php">Главная</a></li>
                                  <li><a href="/index.php">Пользовательский блок</a></li>
                                  
                                 
                              </ul>
                          </div>    
                      </div>
                   </div>
    
              </div>
              <div class="col-sm-3  ">

<?php 

if (isset($_SESSION['logged_user'])):?>
<h4>Авторизован!</h4>
<h4>Привет, <?php echo $_SESSION['logged_user']->login; ?>!</h4>
<ul class="nav nav-pills nav-stacked ">
    
    <li role="presentation"><a href="/admin/logout.php" class=" btn btn-success btn-default">Выйти</a></li><br>
</ul>
<?php 
else :
    header('Location:/admin/login1.php');
    ?>
<ul class="nav nav-pills nav-stacked " style="margin-top: 15px;">
    <li role="presentation"><a href="/admin/login1.php" class="btn btn-success btn-default">Авторизоваться</a></li>
    <li role="presentation"><a href="/admin/signup1.php" class="btn btn-success btn-default">Регистрация</a></li>
</ul>
<?php endif; ?>

                                 
              </div>
          </header>