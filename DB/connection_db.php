<?php
    $username="root";
    $servername="localhost";
    $password="";
    $dbname = "db22_050";

    $conn = new mysqli($servername, $username, $password);
    $conn->set_charset("utf8");
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    #echo ("Successfully connected to server <br>");
    if(!$conn->select_db($dbname)){
        die("Connection failed: ".$conn->connect_error);
    }
    else{
       # echo ("Connection db suceess");
    }
?>