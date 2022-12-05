<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root', 'root', 'bofu');
    $db -> set_charset("utf8");
    if(!$db){
        echo "No le sabes pá";
        exit;
    } 

    return $db;
}
