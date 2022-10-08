<?php

    /* $conexion = mysqli_connect("localhost", "root", "", "login_register_db", "3308"); */

    //Get Heroku ClearDB connection information

    /* $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = "us-cdbr-east-06.cleardb.net";
    $username = "b71ad44a5efc99";
    $password = "95bc0c14";
    $db = "heroku_068e6e69fc11dd8";
    
    $conexion = mysqli_connect($server, $username, $password, $db) or die("database connection error"); */

    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $conexion = new mysqli($server, $username, $password, $db);


    /* if ($conexion){
        echo 'conectado con exito a la base de datos';
    }else{
        echo 'No se ha podido conectar a la base de datos';
    }   */

?>