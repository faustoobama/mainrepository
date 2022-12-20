<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('Location:../index.html');
    }else {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
        <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            outline: none;
            border: none;
            border-collapse: collapse;
        }
        #navbar{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 60px;
            background-color: rgb(41, 52, 62);
        }
        #menuCont{
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            height: 100%;
        }
        #logof{
            display: flex;
            justify-content: center;
            align-items: center;
            width: fit-content;
            height: 25px;
            cursor: pointer;
            background-color: rgb(255, 255, 255);
            color: rgb(41, 52, 62);
            border-radius: 3px;
            padding: 0 5px;
            font-size: 14px;
        }
        #title{
            color: rgb(255, 255, 255);
            font-size: 25px;
        }
        #container{
            width: 100%;
            height: fit-content;
            display: flex;
            justify-content: center;
            column-gap: 44px;
            padding: 22px 0 0 0;
        }
        #newEntertainment{
            width: calc(30% - 40px);
            height: fit-content;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .inputdata{
            padding-left: 8px;
            width: calc(100% - 10px);
            border: 1px solid rgb(131, 131, 131);
            height: 36px;
            margin-bottom: 10px;
        }
        #newEntertainment > textarea{
            padding: 8px 0 0 8px;
            width: calc(100% - 10px);
            border: 1px solid rgb(131, 131, 131);
            height: 88px;
            resize: vertical;
            margin-top: 10px;
        }
        #newGame{
            cursor: pointer;
            width: 100%;
            height: 33px;
            background-color: rgb(41, 52, 62);
            color: white;
            margin-top: 20px;
        }
        #allentertainment{
            width: calc(55% - 40px);
            height: fit-content;
            border: 2px solid rgb(171, 171, 171);
            border-radius: 5px;
        }
        th,td{
            border: 1px solid grey;
            padding: 3px 6px;
            width: 25%;
            text-align: center;
        }
        th{
            height: 40px;
            background-color: rgb(41, 52, 62);
            color: white;
        }
        td{
            height: 30px;
            color: rgb(68, 68, 68);
        }
        .warning{
                position: relative;
                width: calc(100% - 20px);
                min-height: 33px;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 10px; 
                background-color: rgb(86, 179, 109);
                color: white;
                margin-top: 20px;
                font-size: 20px;
            }
            .closeWarning{
                right: 10px;
                top: 5px;   
                position: absolute;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <nav id="navbar">
            <ul id="menuCont">
                <li><h3 id="title"> <?=$_SESSION['username']?> </h3></li>
                <li><div id="logof">Cerrar sesion</div></li>
            </ul>
        </nav>
        <div id="container">
            <form id="newEntertainment">
                <input type="text" name="ename" id="ename" placeholder="Nombre del juego" class="inputdata">
                <input type="text" name="eplatform" id="eplatform" placeholder="Plataforma del juego" class="inputdata">
                <input type="date" name="erelease" id="erelease" class="inputdata">
                <textarea name="edescription" id="edescription" cols="30" rows="10" placeholder="Sinopsis del juego"></textarea>
                <input type="button" value="Añadir juego" id="newGame">
            </form>
            <table id="allentertainment">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Plataforma</th>
                        <th>Año de salida</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody id="gamesTbody"></tbody>
            </table>
        </div>

    </body>
    <script>
        'use strict';
        window.stop();

        let cerrarSesion = document.querySelector('#logof');
        cerrarSesion.addEventListener('click',logOf);

        let newGame = document.querySelector('#newGame');
        newGame.addEventListener('click',addGame);

        listGames();
        
        function listGames (){
            let tBody = document.querySelector('#gamesTbody');
            fetch('../back/getAllGames.php')
            .then(response => response.json())
            .then(res => {
                if (res.status == 403) {
                    location.href = '../index.html';
                }else if (res.status == 404){
                    console.log(res.message);
                }else if (res.status == 200) {
                    let html='';
                    res.message.forEach(element => {
                        html += `<tr>
                                    <td>${element.name}</td><td>${element.platform}</td><td>${element.releasedate}</td><td>${element.description}</td>
                                </tr>`;
                    });
                    tBody.innerHTML = html;
                }
            })
        }

        function addGame(){
            let form = document.querySelector('#newEntertainment');
                
            fetch('./back/newGame.php',{
                method: 'POST',
                body: new FormData(form)
            })
            .then(response => response.json())
            .then(res => {
                if (res.status == 403) {
                    location.href = '../index.html';
                }else if (res.status == 404){
                    console.log(res.message);
                }else if (res.status == 200){
                    form.reset();
                    listGames();
                    let element = `
                        <div class='warning'>
                            <span class='closeWarning' id='loginWarning'>x</span>
                            ${res.message}
                            </div>`;

                    if(!document.querySelector('.warning')){
                        form.insertAdjacentHTML('beforeend',element);
                    }else {
                        document.querySelector('.warning').remove();
                        form.insertAdjacentHTML('beforeend',element);
                    }

                    let loginWarning = document.querySelector('#loginWarning');
                    loginWarning.addEventListener('click',(e)=>{
                        e.target.parentNode.remove();
                    });
                }
            })
        }

        function logOf(){
            fetch('./back/logof.php')
            .then(res => location.href = 'login.html');
        }

    </script>
    </html>
<?php
    }
?>