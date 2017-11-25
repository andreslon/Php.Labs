<?php
    //Database=hotelchaindb;Data Source=us-cdbr-azure-southcentral-f.cloudapp.net;User Id=b9ce52238e99b4;Password=04379fab
    // datos para la conexion a mysql
    define('DB_SERVER','us-cdbr-azure-southcentral-f.cloudapp.net');
    define('DB_NAME','hotelchaindb');
    define('DB_USER','b9ce52238e99b4');
    define('DB_PASS','04379fab');
    $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
    mysql_select_db(DB_NAME,$con);
?>