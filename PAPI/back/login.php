<?php
    require_once('connection.php');

    if(isset($_POST)){
        $dataUser = $_POST['user'];
        $dataPass = $_POST['pass'];
    }

    $userid;
    $username;
    $useremail;

    try {
        $prepQuery = $connection->prepare('SELECT id, name, email FROM users WHERE (username = :nameemail OR email = :nameemail) AND password = :pass;');
        $prepQuery->bindParam(':nameemail',$dataUser);
        $prepQuery->bindParam(':pass',$dataPass);
        $prepQuery->execute();
        $result = $prepQuery->fetchAll(PDO::FETCH_ASSOC);
        if($result){
            foreach ($result as $value) {
                $userid = $value['id'];
                $username = $value['name'];
                $useremail = $value['email'];
            }
                session_start();

                $_SESSION['username'] = $username;
                $_SESSION['userid'] = $userid;
                $_SESSION['useremail'] = $useremail;

                header('Location: /front/inicio.php?directamente');

        }else header('Location: /index.php?url='.$_SERVER['REQUEST_URI']);
    } catch (PDOException $e) {
        die(json_encode(['message'=>'Query Error: '.$e->getMessage()]));
    }
?>