'use strict';

window.onload = () =>{
    
    let sendButton = document.querySelector('#enviarFalse'),
    main = document.querySelector('#mainContainer'),
    confBanner = main = document.querySelector('#confirmBanner'),
    confirmButton = main = document.querySelector('#confirmButton'),
    cancelButton = main = document.querySelector('#cancelButton'),
    keys = ['nombre','apellido','dni','email','telefono','fechaNac','comunidad','poblacion','postal','genero','grado','inicio','domicilio','presentacion','curriculum','es','en','pt','fr','redes','dawm','sre','bd'];

    sendButton.addEventListener('click',e=>{

        let formulario = new FormData(document.querySelector('#form'));

        console.log(formulario);

        confBanner.style.display = "grid";

        keys.forEach(e=>{console.log(formulario.get(e))});

    });
    confirmButton.addEventListener('click',e=>{

        // e.preventDefault();

        let form = main = document.querySelector('#form');

        let formulario = new FormData(form);

        // console.log(formulario);

         confBanner.style.display = "none";

        // form.reset();

    });
    cancelButton.addEventListener('click',e=>{

        let form = main = document.querySelector('#form');

        let formulario = new FormData(form);

        console.log(formulario);

        confBanner.style.display = "none";

    });
}