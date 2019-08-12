<?php

require_once ("blocks/bd.php");

if (isset($_POST["author"])){$author=$_POST["author"];}


if (isset($_POST["text"])){$text=$_POST["text"];}

if (isset($_POST["pr"])){$pr=$_POST["pr"];}

if (isset($_POST["sub_com"])){$sub_com=$_POST["sub_com"];}

if (isset($_POST["id"])){$id=$_POST["id"];}



if (isset($sub_com)){
    
    if (isset($author)){
        trim($author)
        ;}
 else {
    $author="";
}
    
 if (isset($text)){
        trim($text)
        ;}
 else {
    $text="";
}    
    
    
if (empty($author) or empty($text)) {
    exit("<p>Вы ввели не всю информацию, вернитесь назад и заполните все поля.</br> <input name='back' type='button' "
            . "value='Вернуться назад' onclick='history.back();'> </p>");
}   
    
 $author= stripslashes($author);
 $text= stripslashes($text);
 
 $author= htmlspecialchars($author);
 $text= htmlspecialchars($text);
 
 $result=mysqli_query($db,"SELECT sum FROM comment_setting");
 $myrow= mysqli_fetch_array($result);
   
 
 if($pr==$myrow["sum"]){
     
     $date= date("Y-m-d");
     $result2=mysqli_query($db,"INSERT INTO comments (post,author,text,date) VALUES ('$id', '$author', '$text', '$date')");
    
     $to="1990boot1990@gmail.com";
     $subject="Новый комментарий на блоге";
     $result5=mysqli_query($db,"SELECT title FROM data WHERE id='$id'");
     $myrow5= mysqli_fetch_array($result5);
     $message="Появился комментарий к статье:" . $myrow5["title"] . "\nКомментарий добавил:" . $author."\n Текст комментария:" . $text
             ."\nСсылка на заметку:http://phpproject1/view_post.php?id=$id ";
     
     mail ($to , $subject , $message,"Content-type:text/plain;charset=utf-8\r\n" );
     
     
     
     echo ("<html>
            <head>
           <META HTTP-EQUIV='REFRESH' CONTENT='0;http://phpproject1/view_post.php?id=$id'>
               </head>
             </html>>")
     ;}
 
 else{exit("<p>Вы ввели не верную сумму с картинки на предыдущей странице, вернитесь назад и заполните все поля.</br> <input name='back' type='button' "
            . "value='Вернуться назад' onclick='history.back();'> </p>");}
 
    

}










?>

