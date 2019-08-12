<?php

if (isset($_GET['cat'])){$cat=$_GET['cat'];}

$result4=mysqli_query($db,"SELECT * FROM comments WHERE post='$id'");


if(!$result4)
{
    echo "Запрос на выборку данных из базы не прошел, сообщите об этом администратору 1990boot1990@gmail.com";
    exit(mysql_error());
    
    
}

if (mysqli_num_rows($result4)>0){
   $myrow4= mysqli_fetch_array($result4); ?>
<h3 class="text-center">Комментарии к этой статье: </h3>
                <hr>
<?php
    do{ printf("<table class='table table-striped table1 center-pos'>
                            <tr>
                            <td class='td'>
                           <p >Комментарий добавил(а): %s</p ><p>Дата добавления: %s</p></td>
                            <tr>
                            <tr class='info'>
                            <td ><p >%s</p></td><tr/>
                            <tr>
                          </table>",
 $myrow4["author"],$myrow4["date"],$myrow4["text"]);}
            
while ($myrow4= mysqli_fetch_array($result4));
}
else{
echo "<h3 class='text-center'>Комментариев к этой статье еще нет </h3>
                <hr>"    ;

}
?>

<?php


?>