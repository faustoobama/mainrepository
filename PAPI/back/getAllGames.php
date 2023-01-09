<?php
session_start();

if(!isset($_SESSION['username'])){
    echo json_encode(['status'=>403,'message'=>'Unhautorized']);
}else {
   include('connection.php');
   try {
      $prepQ = $connection->prepare("SELECT * FROM games where userid = :id;");
      $prepQ->bindParam(':id', $_SESSION['userid']);
      $prepQ->execute();
      $result = $prepQ->fetchAll(PDO::FETCH_ASSOC);
  
      echo json_encode(['status'=>200,'message'=>$result]);
   } catch (PDOException $e) {
      die(json_encode(['status'=>404,'message'=>$e->getMessage()]));
   }
}
?>