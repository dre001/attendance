<?php

    //LOCAL HOST CONNECTION
    // $host = '127.0.0.1';
    // $db = 'attendance_db';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';


        //Remote Database Connection
    $host = 'sql5.freesqldatabase.com';
    $db = 'sql5521121';
    $user = 'sql5521121';
    $pass = 'p9jH8iKu1G';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        //echo 'Sync with Database';
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e){

        throw new PDOException($e->getMessage());
    }
    require_once 'crud.php';
    $crud = new crud($pdo) //new instance of crud
?>