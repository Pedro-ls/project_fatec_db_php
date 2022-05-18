<?php

function connectBank(
    $HOST = "localhost",
    $USER = "root",
    $PASSWORD = "",
    $DB = "venda"
){
    
    $connection = mysqli_connect($HOST, $USER, $PASSWORD, $DB);
    if(mysqli_connect_error($connection)){
        return $connection;
    }else{
        return false;
    }
}

$conn = connectBank();

