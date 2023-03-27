<?php
 include("database.php");
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cargo_calculator";
    
    $con = new mysqli($localhost,$username,$password,$dbname);
    if(!$con ){
        echo "DataBase Is Not Connected!";
    }

?>