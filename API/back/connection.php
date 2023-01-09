<?php
$port = 3306;
$dbname='entertainment';
$host = 'mysql:host=localhost:' . $port . ';dbname='.$dbname;
$user = 'root';
$pass = '';

try {
    $connection = new PDO($host,$user,$pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(json_encode(['message'=>'Connection Error: '.$e->getMessage()]));
}
?>