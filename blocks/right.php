  <div class="col-sm-3 bg2 ">
                <div class="row ">
                  <div class="col-sm-12">
                    <p class="pacifico">Последние категории</p>
                    
                    <ul class="nav nav-pills nav-stacked nav2">
                <?php
$result2=mysqli_query($db, "SELECT * FROM categories ORDER BY id DESC,id DESC LIMIT 4");


if(!$result2)
{
    echo "Запрос на выборку данных из базы не прошел, сообщите об этом администратору 1990boot1990@gmail.com";
    exit(mysql_error());
    
    
}

if (mysqli_num_rows($result2)>0){
   $myrow2= mysqli_fetch_array($result2); ;

}
else{
echo "Информация не может быть извлечена, в таблице нет записей "    ;

}

do{    printf("<li role='presentation'><a href='view_cat.php?cat=%s'>%s</a></li>",$myrow2["id"],$myrow2["title"]);}
while ($myrow2= mysqli_fetch_array($result2));


    
    
?>
                    </ul>
                    <p class="text-center"><a href="/categories.php" >Еще</a></p>                
                  </div>
                  
                </div>
      <hr>
                <div class="row ">
                  <div class="col-sm-12">
                    <p class="pacifico">Последние статьи</p>
                    <ul class="nav nav-pills nav-stacked nav2">
                    <?php
$result5=mysqli_query($db,"SELECT id,title FROM data ORDER BY date DESC,id DESC LIMIT 5");

if(!$result5)
{
    echo "Запрос на выборку данных из базы не прошел, сообщите об этом администратору 1990boot1990@gmail.com";
    exit(mysql_error());
    
    
}

if (mysqli_num_rows($result5)>0){
   $myrow5= mysqli_fetch_array($result5); ;

}
else{
echo "Информация не может быть извлечена, в таблице нет записей "    ;

}

do{    printf("<li role='presentation'><a href='view_post.php?id=%s'>%s</a></li>",$myrow5["id"],$myrow5["title"]);}
while ($myrow5= mysqli_fetch_array($result5));


    
    
?>
                    </ul>
                    <p class="text-center"><a href="/post.php" >Еще</a></p>   
                  </div>
                  
                </div>
      <hr>
                <div class="row ">
                  <div class="col-sm-12">
                    <p class="pacifico">Архив</p>
                    <ul class="nav nav-pills nav-stacked nav2">
         <?php
$result7=mysqli_query($db,"SELECT DISTINCT left(date,7) AS month FROM data ORDER BY month DESC ");

if(!$result7)
{
    echo "Запрос на выборку данных из базы не прошел, сообщите об этом администратору 1990boot1990@gmail.com";
    exit(mysql_error());
    
    
}

if (mysqli_num_rows($result7)>0){
   $myrow7= mysqli_fetch_array($result7);

}
else{
echo "Информация не может быть извлечена, в таблице нет записей "    ;

}

do{    printf("<li role='presentation'><a href='view_date.php?date=%s'>%s</a></li>",$myrow7["month"],$myrow7["month"]);}
while ($myrow7= mysqli_fetch_array($result7));


    
    
?>
                        </ul>
                  </div>
                  
                </div>
      <hr>
       <div class="row ">
                  <div class="col-sm-12">
                    <p class="text-center pacifico">Поиск</p>
                    <p class="text-center  pacifico">Поисковый запрос должен быть не менее 4-ех символов</p>
                    <form method="POST" action="view_search.php" name="form_a">
                    <input class="form-control" type="text" name="search" size="25" maxlength="40"><br>
                    <input class="btn btn-primary btn-default center-block" type="submit" name="submit_s" value="Искать"><br>
                    </form>
                  </div>
                  
                </div>
      
      
               </div>
