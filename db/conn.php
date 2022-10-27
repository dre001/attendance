<?php

//LOCAL HOST CONNECTION
$host = '127.0.0.1';
$db = 'attendance_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';


//Remote Database Connection
// $host = 'sql5.freesqldatabase.com';
// $db = 'sql5521121';
// $user = 'sql5521121';
// $pass = 'p9jH8iKu1G';
// $charset = 'utf8mb4';


// $host = 'remotemysql.com';
// $db = ' lxfglIJlle';
// $user = 'lxfglIJlle';
// $pass = 'r4An7gky7c';
// $charset = 'utf8mb4';


//000Webhost
//$host = '000webhost.com';
//$host = 'localhost';
// $host = '127.0.0.1';
// $db = 'id19622731_attendanceregister';
// $user = 'id19622731_attendanceregister001';
// $pass = '!d>*6XESoe(#llQX';
// $charset = 'utf8mb4';

//FREE SQL CONNECTION 1
$host = 'applied-web.mysql.database.azure.com';
$db = 'attendee_andregraham';
$user = 'appliedweb_user@applied-web';
$pass = 'P@ssword1';
$charset = 'utf8mb4';


//EPIZ HOSTING
// $host = 'sql310.epizy.com';
// $db = 'epiz_32868722_attendee_ag_test';
// $user = 'epiz_32868722';
// $pass = 'XYDmKvvR0lQa';
// $charset = 'utf8mb4';


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    //echo 'Sync with Database';
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
    throw new PDOException($e->getMessage());
}
require_once 'crud.php';
require_once 'user.php'; //for the login
$crud = new crud($pdo); //new instance of crud
$user = new user($pdo); //for the login
    
    //UserObject
    //$user->insertUser("admin","password");
