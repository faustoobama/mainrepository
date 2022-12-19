<?php
include('connection.php');

session_start();

 try {
    $prepQ = $connection->prepare("SELECT * FROM games where userid = :id;");
    $prepQ->bindParam(':id', $_SESSION['userid']);
    $prepQ->execute();
    $result = $prepQ->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
 } catch (PDOException $e) {
    die($e->getMessage());
 }
?>