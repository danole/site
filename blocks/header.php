<header class="row" >
              <div class="col-sm-9  bg2">
                  <div class="row class1">
                      <div class="col-sm-9   bg2">
              <h1 class="text-center" >Добро пожаловать на сайт!</h1>
              <br>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-sm-12   bg2">
                          <div>
                              <ul class="nav1">
                                  <li><a href="/index.php">Главная</a></li>
                                  <li><a href="/categories.php">Категории</a></li>
                                  <li><a href="/post.php">Статьи</a></li>
                                  <li><a href="/admin/login1.php">Админский блок</a></li>
                              </ul>
                          </div>    
                      </div>
                   </div>
    
              </div>
              <div class="col-sm-3  ">

<?php 
if (isset($_SESSION['logged_user'])):?>
                  <p class="pacifico">Авторизован!<br>
Привет, <?php echo $_SESSION['logged_user']->login; ?>!</p>

    
<a href="/logout.php" class=" btn btn-success btn-block">Выйти</a><br>

<?php 
else :?>
<ul class="nav nav-pills nav-stacked ">
    <li role="presentation"><a href="/login.php" class="btn btn-success btn-default">Авторизоваться</a></li>
  <li role="presentation"><a href="/signup.php" class="btn btn-success btn-default">Регистрация</a></li>
</ul>
<?php endif; ?>

                                 
              </div>
          </header>