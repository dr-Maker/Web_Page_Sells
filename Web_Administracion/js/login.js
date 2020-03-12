window.onload=function(){

user= document.querySelector("#form-user");
pass= document.querySelector("#form-pass");
submit= document.querySelector("#form-submit");
error = document.querySelector('.form-error');


submit.addEventListener('click', login);

function login(){

    // si no tine datos no hacer nada 

if( user=== "" || pass ==="" ){ return;}

    // si los datos estan correctos 
    if( user === "user@1.cl" & pass === 1234){

       
        error.classList.add('hide');

    }else{

        error.classList.remove('hide');

    }


}










}

