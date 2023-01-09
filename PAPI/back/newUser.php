<?php

   include('connection.php');
   try {
      $prepQ = $connection->prepare("INSERT INTO users (name,email,password,description) VALUES (:name,:platf,:reld,:descr,:usrid);");
      $prepQ->bindParam(':name', $_POST['ename']);
      $prepQ->bindParam(':platf', $_POST['eplatform']);
      $prepQ->bindParam(':reld', $_POST['erelease']);
      $prepQ->bindParam(':descr', $_POST['edescription']);
      $prepQ->bindParam(':usrid', $_SESSION['userid']);
      $prepQ->execute();
      echo json_encode(['status'=>200,'message'=>'Elemento con id '.$connection->lastInsertId().' insertado correctamente']);
   } catch (PDOException $e) {
      die(json_encode(['status'=>404,'message'=>$e->getMessage()]));
   }

?>