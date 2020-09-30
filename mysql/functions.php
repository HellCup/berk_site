<?php
function getLine($table, $value) {
    global $link;
    if (!$result = mysqli_query($link, "SELECT * FROM `$table` WHERE `id` like '$value'")){
        die ("Ошибка вывода: ". mysqli_errno($link)." и " . mysqli_error($link));
    } 
    return mysqli_fetch_assoc($result);
    }
?>