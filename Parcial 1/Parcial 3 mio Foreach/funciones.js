function getBuscar() {
    const codprov=document.getElementById("cod-provincia").value;
    const municipio=document.getElementById("buscar-muni").value;
    const contenedor=document.getElementById("contenedor");
    fetch("datosCensales.json")
    //.then(res => res.json()); //Otra forma json
    .then(function(response){
        return response.json();
    })
    .then(function(data){
        console.log(data)
        let cantprov=[]
        let existe=false;
        let localidades=data["localidades-censales"];
        let total= data.cantidad;
        localidades.forEach(localidades => { //Recorro 
            if ((codprov==localidades.provincia.id)&&(municipio==localidades.municipio.nombre)) { //Si lo encuentra el municipio pasa a true
                existe=true;
            }
            if (!(cantprov.includes(localidades.provincia.id))) {
                cantprov+="{ 'id:'"+localidades.provincia.id+", 'name:'"+localidades.provincia.nombre+"}";
            }
        });
        console.log(cantprov) 
        console.log(cantprov.includes(codprov))
        if ((codprov>0) && (cantprov.includes(codprov))) {
            if (existe==true) {
                contenedor.innerHTML=`</h4><h4>Municipio Encontrado</h4><p>Cantidad:<b>${total}<b></p>`;
            } else{
                contenedor.innerHTML=`<h4>Municipio No Encontrado</h4><p>Cantidad:<b>${total}<b></p>`;
            }
        }else{
            contenedor.innerHTML=`<h4>La provincia no existe</h4><p>Cantidad:<b>${total}<b></p>`;
        }
    })
}

//
// 