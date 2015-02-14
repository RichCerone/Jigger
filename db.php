<?php
/**
 *Author: Richard Cerone
 *Creates basic login connection to Jigger's database.
 **/
    //Connect to database:
    $connect = new mysqli("localhost", "root", "");
    
    //Check connection:
    if(!$connect)
    {
       die("Connection failed: " . mysqli_connect_error()); 
    }
    else    //Connect to Jigger's database.
    {
        $dataBase = mysqli_select_db($connect, "jigger");
    }
?>