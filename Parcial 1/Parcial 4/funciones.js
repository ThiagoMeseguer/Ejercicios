function parcial(){
    const idmuni=document.getElementById("id-municipio").value
    const idprov=document.getElementById("id-provincia").value
    const contenedor=document.getElementById("div")
    if ((idmuni!="")&&(idprov!="")) {
        fetch("asentamientos.json")
        .then(res=>res.json())
        .then(function(data){
            let existemuni=false
            let existeprov=false
            console.log(data)
            let localidades=data.localidades
            localidades.forEach(localidades=>{
                if ((idmuni==localidades.municipio.id)) { //Busco el municipio
                    contenedor.innerHTML=`Provincia <b>${localidades.provincia.nombre}</b> <br>
                    Municipio: <b>${localidades.municipio.nombre}</b> <br>
                    Coordenadas: <br>
                    Latitud: ${localidades.centroide.lat} <br>
                    Longitud: ${localidades.centroide.lon}
                    `
                    existemuni=true // Lo uso como un break para que no sobreescriba despues de encontrar los datos
                    existeprov=true // Si encuentro el municipio por ende la provincia tambien
                }else{ //Buscar la provincia y aun no encontro el municipio
                    if ((idprov==localidades.provincia.id)&&(existemuni==false)) { //&&(existeprov==false) para mostrar el primer departamento
                        contenedor.innerHTML= `Provincia: <b>${localidades.provincia.nombre}</b> <br>
                        Departamento: <b>${localidades.departamento.nombre}</b> <br>
                        Coordenadas: <br>
                        Latitud: ${localidades.centroide.lat} <br>
                        Longitud: ${localidades.centroide.lon}
                        `
                        existeprov=true //Lo mismo que existemuni pero para la provincia
                    }else{ //No encontro el municipio ni la provincia
                        if((idprov!=localidades.provincia.id)&&(existeprov==false)){ 
                            contenedor.innerHTML= `<b>No se encontro el municipio ni la provincia</b>`
                        }
                    }
                }
            }); 
        })
    }else{
        contenedor.innerHTML= `<b>Faltan Datos (Ambos son obligatorios)</b>`
    }
}
//contenedor.style.backgroundColor="green"