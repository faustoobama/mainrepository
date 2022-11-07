'use strict';

window.onload = () =>{
    
    let sendButton = document.querySelector('#enviarFalse'),
    main = document.querySelector('#mainContainer'),
    confBanner = main = document.querySelector('#confirmBanner'),
    formInfo = document.getElementById('formInfo');

    function isVoid(_object){
        let keys = ['nombre','apellido','dni','email','telefono','fechaNac','comunidad','provincia','postalcode','genero','grado','inicio','domicilio','es','bd','presentacion','curriculum'],
        counter=0,
        result=false;

        do{
            if(keys[counter] == 'curriculum'){
                result = (_object.get(keys[counter]).name == "" || _object.get(keys[counter]).name == null || _object.get(keys[counter]).name == " ");
            }else if(keys[counter] == 'es'){
                result = (_object.get(keys[counter]) == null && _object.get('en') == null && _object.get('fr') == null && _object.get('pt') == null);
            }else if(keys[counter] == 'bd'){
                result = (_object.get(keys[counter]) == null && _object.get('sre') == null && _object.get('redes') == null && _object.get('devs') == null);
            }else{
                result = (_object.get(keys[counter]) == "" || _object.get(keys[counter]) == null || _object.get(keys[counter]) == " " || _object.get(keys[counter]) == 'void'); 
            }
            counter++;

        }while(counter < keys.length && !result);

        return {
                    'status': result,
                    'message': (result)?"El campo "+keys[counter-1].toUpperCase()+" esta vacio.\nAsegúrese de rellenar todos los campos obligatorios":"Formulario válido"
                };
    }
    sendButton.addEventListener('click',(e)=>{

        let formulario = new FormData(document.querySelector('#form'));

        console.log(formulario);

        if(!isVoid(formulario).status){

            let botones = `
                
            `,
            keys = ['nombre','apellido','dni','email','telefono','fechaNac','comunidad','provincia','postalcode','genero','grado','inicio','domicilio','presentacion','curriculum','es','en','pt','fr','redes','devs','sre','bd'],
            datosHTML="";

            keys.forEach(e=>{
                (e=='curriculum')?datosHTML+="<div>"+e+": "+formulario.get(e).name+"</div>":datosHTML+="<div>"+e+": "+formulario.get(e)+"</div>";
            });

            confBanner.style.display = "grid";

            formInfo.innerHTML = "<div>"+datosHTML+"<div>"+botones;

        } else console.log(isVoid(formulario).message);

    });

    document.addEventListener('click',e=>{

        if(e.target.id == 'confirmButton'){

            // e.preventDefault();

        let form = main = document.querySelector('#form');

        let formulario = new FormData(form);

        // console.log(formulario);

         confBanner.style.display = "none";

        // form.reset();

        }else if(e.target.id == 'cancelButton'){

        let form = main = document.querySelector('#form');

        let formulario = new FormData(form);

        console.log(formulario);

        confBanner.style.display = "none";

        }

        

    });
 
}