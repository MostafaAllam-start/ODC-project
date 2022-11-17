<?php
    include_once '../general/function.php';
    $db_name = 'lawyer';
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $port = 3306;
    try{
        $conn = mysqli_connect($host, $username, $password, $db_name, $port);
    }
    catch(Exception $e){
        showMessage($e->getMessage);
    }

?>