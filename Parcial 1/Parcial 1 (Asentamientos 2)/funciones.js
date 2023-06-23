const contenedor=document.getElementById("contenedor")
let provincia=""
function consulta() {
    fetch("asentamientos.json")
    .then(function(response){
        return response.json()
    })
    .then(function(data){
        let asentamientos = new Set()
        console.log(data) //Muestra todo el Json
        let encontro=false // Falso hasta que encuentre provicia, si no esta es que no existe
        contenedor.innerHTML=""
        let id=document.getElementById("codigo").value //ID de provincia buscado
        if (id>0 & id<data.cantidad){ // Si el id esta entre los datos posibles
            let localidades=data.localidades // Guardo todas las localidades para accerder mas facil
            let cant=data.cantidad // Cantidad total de localidades
            for (let i = 0; i < localidades.length; i++) {
                if (localidades[i].provincia.id==id){
                    encontro=true
                    provincia=localidades[i].provincia.nombre; // Guardo nombre de la provincia
                    console.log(localidades[i].departamento.nombre) // Nombre del departamento
                    asentamientos.add(localidades[i].departamento.nombre) //Guardo el departamento
                }
            }
            if (encontro==true) {
                contenedor.innerHTML='<h3>Provincia: '+provincia+'</h3><h3>Cantidad: '+cant+'</h3><p>'+[...asentamientos]+'</p>';
            } else{
                contenedor.innerHTML='<h3>No se encontro la provincia</h3>'// La provincia no existe
            }
            
        } else {
            contenedor.innerHTML="Codigo no valido" // Numero del input (negativo o vacio)
        }
    })
}