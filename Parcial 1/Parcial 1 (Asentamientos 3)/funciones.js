const contenedor=document.getElementById("contenedor")

function consulta() {
    fetch("asentamientos.json")
    .then(function(response){
        return response.json()
    })
    .then(function(data){
        console.log(data) //Muestra todo el Json
        let provincia=""
        let asentamientos=[]
        let asdf=[]
        let encontro=false // Falso hasta que encuentre provicia, si no esta es que no existe
        contenedor.innerHTML=""
        let id=document.getElementById("codigo").value //ID de provincia buscado
        if (id>0 & id<data.cantidad){ // Si el id esta entre los datos posibles
            let localidades=data.localidades // Guardo todas las localidades para accerder mas facil
            let cant=data.cantidad // Cantidad total de localidades
            localidades.forEach(element => {
                if (id===element.provincia.id){
                    
                    provincia=element.provincia.nombre
                    if (!asentamientos.includes(element.departamento.nombre)){
                        console.log("Entro")
                        asentamientos+=(element.departamento.nombre)+", "
                    }
                    encontro=true;
                }
                if (!asdf.includes(element.provincia.nombre)){
                    asdf+=(element.provincia.nombre)
                }
                
            });
            console.log(asentamientos)
            console.log(asdf+",")
            if (encontro==true) {
                contenedor.innerHTML='<h3>Provincia: '+provincia+'</h3><h3>Cantidad: '+cant+'</h3><p>'+asentamientos+'</p>';
            } else{
                contenedor.innerHTML='<h3>No se encontro la provincia</h3>'// La provincia no existe
            }
            
        } else {
            contenedor.innerHTML="Codigo no valido" // Numero del input (negativo o vacio)
        }
    })
}