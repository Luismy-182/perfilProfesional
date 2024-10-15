                    /*************menu mobil******************************/

//seleccionamos la hamburguesa que espere un click
const barras=document.querySelector('#barras');



//agregar un event listener
//si la aburguesa escucha un click que ejecute una funcion
barras.addEventListener('click', mostrarMenu);


//funcion mostrar menu{}

function mostrarMenu(e){
    e.preventDefault(); //detenemos la accion por default para poner lo nuestro
    if(e.target.classList.contains('barras') ){
        

        const menu=document.querySelector('#menu');
        
        //if si no existe la clase activa la agrega, si ya existe la quita
        if(!menu.classList.contains('active') ){
            
            menu.classList.add('active');
            
         
        }else{
           
            menu.classList.remove('active');
            
        }
        
    }
   
    
}



/*************************Navegacion******************************** */
const experiencia=document.querySelector('#nav-exp') ; //seleccionamos un id de la navegacion del header
const habilidades=document.querySelector('#nav-hab') ;
const aptitudes=document.querySelector('#nav-apt') ;
const educacion=document.querySelector('#nav-edu') ;
const contacto=document.querySelector('#nav-con') ;
const urlExp ='/#experiencia'; //asignamos la direccion que tomara despues del location.href localhost:3000+/#experiencia
const urlHab ='/#habilidades';
const urlApt ='/#aptitudes';
const urlEdu ='/#educacion';
const urlCon ='/#contacto';


// function listener

experiencia.addEventListener('click', e =>{ //esperamos un evento
    if(e.target.textContent===e.target.textContent){ //si el objetivo al que se le pico tiene un texto exactamente igual al texto del contenido del nav
        e.preventDefault(); //detenemos la accion por defecto que es redireccionar, para que no redireccionemos en caso de que el nombre sea diferente a su texto
        window.location.href=urlExp;//si paso la comprobacion exaustiva entonces redirije
    }
});
habilidades.addEventListener('click', e =>{
    if(e.target.textContent===e.target.textContent){
        e.preventDefault();
        window.location.href=urlHab;
    }
});
aptitudes.addEventListener('click', e =>{
    if(e.target.textContent===e.target.textContent){
        e.preventDefault();
        window.location.href=urlApt;
    }
    });
educacion.addEventListener('click', e =>{
    if(e.target.textContent===e.target.textContent){
        e.preventDefault();
        window.location.href=urlEdu;
    }
    });
contacto.addEventListener('click', e =>{
    e.preventDefault();
    if(e.target.textContent===e.target.textContent){
        
        window.location.href=urlCon;
    }
    });


  














/***************************************swiper******************************************/
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay:{
        delay:3000,
        pauseOnMouseEnter:true,
        disableOnInteraction:true,

    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable:true,
      
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
   
  });