<?php 
    $array = file_get_contents('./data/todo-list.json');

    header('Content-type: application/json');
    echo $array;
?>