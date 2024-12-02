document.addEventListener('DOMContentLoaded', iniciarApp);

function iniciarApp(){  
    eliminarProyecto();

}


function eliminarProyecto(){
    const eliminar = document.querySelectorAll('#eliminar');
    //como es all no podemos registrar un evenlistener, recorremos el arreglo
    eliminar.forEach(eliminar => { 
        eliminar.addEventListener('submit', e =>{
            e.preventDefault();
            const valor = e.target.firstElementChild.value; //leemos el siguiente valor con traversing the dom
            

            //importando sweet alert

            Swal.fire({
                title: "Esta seguro?",
                text: "Esta accion no se puede deshacer!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "no, cancelar",
                confirmButtonText: "Si, eliminalo por favor!"
              }).then((result) => {
                if (result.isConfirmed) {
                  Swal.fire({
                    title: "Eliminado!",
                    text: "Se elimino el proyecto",
                    icon: "success"
                  })
                  eliminar();
                }
                    function eliminar(){
                    let form = document.createElement('form');
                            form.action = '/admin/eliminar';
                            form.method = 'POST';

                            form.innerHTML = ` <input type="hidden" name="id" value="${valor}">`;

                            // el formulario debe estar en el document para poder enviarlo
                            document.body.append(form);

                            setTimeout(() => {
                                form.submit();
                            }, 3000);
            
                        }   
              });
            
        });
    });
    
    
    

  
}