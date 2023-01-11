<?php
session_start();
trait Layout {
    
    public function printHeader(){
        print(<<<EOF
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='shortcut icon' href='https://images.squarespace-cdn.com/content/v1/5f6b4b0c38cfbb7e2af14d5e/1603201117078-NBQMAKFHLLD7N4QXMLQR/thyme-sprig.png?format=1500w' type='image/x-icon'>
            <title>Document</title>
            <link rel='stylesheet' href='/css/styles.css'>
            <script src='/js/script.js'></script>
        </head>
        <body>
            <nav id='navContainer'>
                <ul class='navbarElement'>
                    <li class='menu'> <a id='mainPageButton' href='/controllers/mainPageController.php'>INICIO</a>
                        <li class='pipe'> | </li>
                    <li class='menu'> <span>NOTICIAS</span>
                        <ul class='subMenu'>
                            <li><a href='/controllers/newsPageController.php?category=default' id='allNewsPage'>VER TODAS</a></li>
                            <li><a href='/controllers/newsPageController.php?category=hardware' id='hardware'>HARDWARE Y COMPONENTES</a></li>
                            <li><a href='/controllers/newsPageController.php?category=games' id='games'>JUEGOS Y ENTRETENIMIENTO</a></li>
                            <li><a href='/controllers/newsPageController.php?category=films' id='films'>SERIES  Y PELICULAS</a></li>
                        </ul>
                    </li>
                    <li class='pipe'> | </li>
                    <li class='menu'><a id='postsPage' href='/controllers/postsPageController.php'>FORO</a></li>
                </ul>
                <ul class='navbarElement Icon'>
                    <li class='menu icon' id='icon'><a href='/controllers/mainPageController.php' class='mainIcon'></a></li>
                </ul>
                <ul class='navbarElement User' id='identification'>
        EOF.
        ((isset($_SESSION['username']))
        ?<<<EOF
            <li class='menu user'><span id='menuusername'>$_SESSION[username]</span>
                <ul class='profile-logof no-visible' id='profileLogof'>
                    <li id='profile'><span>PERFIL</span></li>
                    <li id='logOf'><span>CERRAR SESION</span></li>
                </ul>
            </li>
        EOF
        :<<<EOF
            <li class="menu user"><a href='../controllers/loginController.php' id='loginButton'>INICIAR SESION</a></li>
            <li class="pipe"> | </li>
            <li class="menu user"><a href='../controllers/signinController.php' id='signinButton'>REGISTRARSE</a></li>
        EOF).
        <<<EOF
                </ul>
            </nav>
            <section id='mainContainer'>
        EOF);
    }
    public function printFooter(){
        print(<<<EOF
        </section>
        <footer id='footer'>
            <ul id='footerMenuCont'>
                <li class='fmenu'>SOBRE NOSOTROS</li>
                <li class='pipe'>|</li>     
                <li class='fmenu'>POLITICAS DE PRIVACIDAD & COOKIES</li>
                <li class='pipe'>|</li>  
                <li class='fmenu'>CONTACTE CON NOSOTROS</li>
            </ul>
        </footer>
    </body>
    </html>
    EOF);
    }
}

?>