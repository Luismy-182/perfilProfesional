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