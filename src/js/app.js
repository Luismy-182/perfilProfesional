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