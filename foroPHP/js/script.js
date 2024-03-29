'use strict';

window.addEventListener('load',()=>{

    let menuusername,profile,logOf,
    running=false,
    postElement,commentForm,// Posts Page
    postId; // Valido
    
    if(document.querySelector('#menuusername')){
        menuusername = document.querySelector('#menuusername');
        menuusername.addEventListener('click',()=>{
            let plof = document.querySelector('#profileLogof');
            if(plof.classList.contains('no-visible')){
                plof.classList.remove('no-visible');
                plof.classList.add('visible');
            }else{
                plof.classList.remove('visible');
                plof.classList.add('no-visible');
            }
        });

        profile = document.querySelector('#profile');
        profile.addEventListener('click',()=>{
            alert('Page not implemented yet');
        });

        logOf = document.querySelector('#logOf');
        logOf.addEventListener('click',()=>{
            fetch('/controllers/logOutController.php')
            .then(res => document.location.href = '/');
        });
    }

    if(document.querySelectorAll('.postElement')){
        postElement = document.querySelectorAll('.postElement');
        postElement.forEach(element =>{
            element.addEventListener('click',(e)=>{
                postId = (e.target.parentElement.parentElement.getAttribute('postId') != null)
                            ?e.target.parentElement.parentElement.getAttribute('postId')
                            :((e.target.parentElement.getAttribute('postId') != null)
                            ?e.target.parentElement.getAttribute('postId')
                            :e.target.getAttribute('postId'));

                document.location.href = '/controllers/postPageController.php?postid='+postId;
            });
        });
    }

    if(document.querySelector('#commentForm')){
        commentForm = document.querySelector('#commentForm');
        commentForm.addEventListener('submit',e =>{
            e.preventDefault();
            newComment();
        });
        getPostComments();
    }

    function getPostComments(){
        fetch('/controllers/postCommentsController.php')
        .then(res => res.json())
        .then(data => {
            if(document.querySelector('#commentsSection')){
                let commentsSection = document.querySelector('#commentsSection');
                commentsSection.innerHTML = data;
            }
        });
    }

    function newComment(){
        fetch('/controllers/newCommentController.php',{
            method: 'POST',
            body: new FormData(commentForm)
        })
        .then(res => res.json())
        .then(data => {
            if(data) alert(data);
            else {
                getPostComments();
                commentForm.reset();
            }
        });
    }

    function scrollTo (top=0,behavior='smooth'){
        document.documentElement.scrollTo({top,behavior})
    }
    if(document.querySelector('#carete')){
        let leftArrow = document.querySelector('#leftArrow'),
            rightArrow = document.querySelector('#rightArrow'),
            carruselElement = document.querySelectorAll('.carruselElement'),
            carruselElementLength = carruselElement.length;
            carruselElement.forEach(element =>{
                element.addEventListener('click',(e)=>{
                    document.location.href='/controllers/newsPageController.php?category='+(e.target.id.replace('c',''));
                });
            });
        leftArrow.addEventListener('click',()=>runCarrusel(333,'0%','afterbegin',carruselElementLength -1));
        rightArrow.addEventListener('click',()=>runCarrusel(500,'-200%','beforeend',0));  
    }

    function runCarrusel (msecs,marginpercent,ePos,eIndex){
        if(!running){
            running = true;
            let carruselE = document.querySelectorAll('.carruselElement'),
                carete = document.querySelector('#carete');

            carete.style.transition = msecs+'ms';
            carete.style.marginLeft = marginpercent;
            setTimeout(()=>{
                carete.style.transition = '0s';
                carete.insertAdjacentElement(ePos,carruselE[eIndex]);
                carete.style.marginLeft = '-100%';
                running = false;
            },msecs);
        }
    }
});