<?php
$result5=mysqli_query($db,"SELECT * FROM comment_setting ");
$myrow5= mysqli_fetch_array($result5);
?>
<h3 class="text-center">Добавить ваш комментарий: </h3>
                <hr>
<form  class="form-inline table1 center-pos" method="POST" action="view_comments.php" name="form_com">
  <div class="form-group">
    <label for="exampleInputName2">Ваше имя</label><br>
    <input name="author" type="text" class="form-control" id="exampleInputName2" value="<?php echo $_SESSION['logged_user']->login;?>">
  </div><br><br>
  <div class="form-group">
    <label for="exampleInputEmail2">Текст комметария</label><br>
    <textarea name="text" cols="32" rows="4" class="form-control" id="exampleInputEmail2" placeholder="Текст комментария"></textarea>
  </div><br><br>
 <p>Введите сумму чисел с картинки<br><br>
  <img src="<?php echo $myrow5["img"]; ?>">
  <input name="pr" type="text" size="5" maxlength="5"></p>
 <input type="hidden" name="id" value="<?php echo $id; ?>">
 <button name="sub_com" type="submit" class="btn btn-default btn-success">Добавить комментарий</button><br><br>
</form>







