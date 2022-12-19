<?php
    include('connection.php');

    $data = json_decode(file_get_contents('php://input'));
    $dataUser = $data->user;
    $dataPass = $data->pass;

    $userid;
    $username;
    $useremail;
    $userpass;

    try {
        $prepQuery = $connection->prepare('SELECT id, name, email FROM users WHERE (name = :nameemail OR email = :nameemail) AND password = :pass;');
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

                echo json_encode(['status'=> 200, 'message'=>'Bienvenido '.$username]);

        }else echo json_encode(['status'=> 403, 'message'=>'Credenciales incorrectas']);
    } catch (PDOException $e) {
        die(json_encode(['message'=>'Query Error: '.$e->getMessage()]));
    }
?>