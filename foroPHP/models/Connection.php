<?php
    Class Connection {
    public $dbConnection;
    const PORT = 3306;
    const DB = 'entertainment';
    const HOST = "mysql:host=localhost:".self::PORT.";dbname=".self::DB;
    const USER = 'admin';
    const PASS = 'admin';
    const FIRSTELEMENT = 0;
        function __construct(){
            try{
                $this->dbConnection = new PDO(self::HOST,self::USER,self::PASS);
                $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die(json_encode($e->getMessage()));
            }
        }
        function getMain(){
            return 'Server main page running';
        }
        function getNews($category){
            try {
                if($category == 'default'){
                    $prepQ = $this->dbConnection->prepare('SELECT * FROM news');
                    $prepQ->execute();
                    $result = $prepQ->fetchAll(PDO::FETCH_ASSOC);
                }else {
                    $prepQ = $this->dbConnection->prepare('SELECT * FROM news WHERE category = :category');
                    $prepQ->bindParam(':category',$category);
                    $prepQ->execute();
                    $result = $prepQ->fetchAll(PDO::FETCH_ASSOC);
                }
                return $result;
            } catch (PDOException $e) {
                die(json_encode($e->getMessage()));
            }
        }
        function login($email,$pass){

            try {
                $prepQ = $this->dbConnection->prepare('SELECT * FROM users WHERE email = :email AND password = :pass');
                $prepQ->bindParam(':email', $email);
                $prepQ->bindParam(':pass', $pass);
                $prepQ->execute();
                $result = $prepQ->fetchAll(PDO::FETCH_ASSOC);
                if($result){
                    if($result[self::FIRSTELEMENT]['enabled']){
                        if($result[self::FIRSTELEMENT]['status'] == 'active'){
                            session_start();
                            $_SESSION['username'] = strtoupper($result[self::FIRSTELEMENT]['name']);
                            $_SESSION['userid'] = strtoupper($result[self::FIRSTELEMENT]['id']);
                            return ['status'=>200];
                        }else return ['status'=>300];
                    }else return ['status'=>403];
                } else return ['status'=>404];
            } catch (PDOException $e) {
                echo json_encode($e->getMessage());
            }
        }
        function signin($name,$email){
            $pass = random_int(1000,99999);
            try {
                    $prepQ = $this->dbConnection->prepare('INSERT INTO users (name,email,password) VALUES (:name, :email, :pass)');
                    $prepQ->bindParam(':name', $name);
                    $prepQ->bindParam(':email', $email);
                    $prepQ->bindParam(':pass', $pass);
                    $prepQ->execute();
                    mail($email,'Codigo de acceso aleatorio','Este es su codigo de acceso aleatorio: '.$pass,'From: no-reply@wenrwright.com' . "\r\n" .'Reply-To: lucercitosforum@wenrwright.com' . "\r\n" .'X-Mailer: PHP/' . phpversion());
                    return false;
                } catch (PDOException $e) {
                    die(json_encode($e->getMessage()));
                }
        }
        function getPosts(){
            try {
            $prepQ = $this->dbConnection->prepare('SELECT p.id,p.title,p.creationdate,u.name as author,p.content,count(c.id) as numcomments FROM posts p INNER JOIN users u ON p.userid=u.id LEFT JOIN comments c ON c.postid=p.id GROUP BY 1,2,3,4,5');
            $prepQ->execute();
            $result = $prepQ->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            } catch (PDOException $e) {
                die(json_encode($e->getMessage()));
            }
        }
        function getPost($postid){
            try {
                $prepQ = $this->dbConnection->prepare('SELECT p.id,p.title,p.creationdate,u.name as author,p.content,count(c.id) as numcomments FROM posts p INNER JOIN users u ON p.userid=u.id LEFT JOIN comments c ON c.postid=p.id WHERE p.id = :postid GROUP BY 1,2,3,4,5');
                $prepQ->bindParam(':postid', $postid);
                $prepQ->execute();
                $result = $prepQ->fetchAll(PDO::FETCH_ASSOC);
                if($result){
                    $result =  $result[self::FIRSTELEMENT];
                }
                return $result;
            } catch (PDOException $e) {
                die(json_encode($e->getMessage()));
            }
        }
        function getComments($postid){
            try {
                $prepQ = $this->dbConnection->prepare('SELECT c.id,c.creationdate,u.name as author,c.content FROM comments c INNER JOIN users u ON c.userid=u.id WHERE c.postid = :postid ORDER BY 2');
                $prepQ->bindParam(':postid', $postid);
                $prepQ->execute();
                $result = $prepQ->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } catch (PDOException $e) {
                die(json_encode($e->getMessage()));
            }
        }
        function newComment($userid,$postid,$content){
            try {
                $prepQ = $this->dbConnection->prepare('INSERT INTO comments (userid,postid,content) VALUES (:userid,:postid,:content)');
                $prepQ->bindParam(':userid', $userid);
                $prepQ->bindParam(':postid', $postid);
                $prepQ->bindParam(':content', $content);
                $prepQ->execute();
                return false;
            } catch (PDOException $e) {
                die(json_encode($e->getMessage()));
            }
        }
        function activateUser($rac,$pass){
            try {
                $prepQ = $this->dbConnection->prepare("SELECT * FROM users WHERE password = :rac AND status = 'new'");
                $prepQ->bindParam(':rac', $rac);
                $validRac = $prepQ->execute();
                if($validRac){
                    $prepQ = $this->dbConnection->prepare("UPDATE users SET password = :pass, status = 'active' WHERE password = :rac AND status = 'new'");
                    $prepQ->bindParam(':pass', $pass);
                    $prepQ->bindParam(':rac', $rac);
                    $result = $prepQ->execute();
                return $result;
                } else return false;
                
            } catch (PDOException $e) {
                die(json_encode($e->getMessage()));
            }
        }
            
    }

?>