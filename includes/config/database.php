<?php

function connectDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');
    
    if (!$db){
        echo 'Connection error';
        exit;
    }

    return $db;

}