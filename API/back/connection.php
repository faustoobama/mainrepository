<?php
$port = 3309;
$dbname='entertainment';
$host = 'mysql:host=localhost:' . $port . ';dbname='.$dbname;
$user = 'root';
$pass = '';

try {
    $connection = new PDO($host,$user,$pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(['message'=>'Connection Error: '.$e->getMessage()]);
}
?>