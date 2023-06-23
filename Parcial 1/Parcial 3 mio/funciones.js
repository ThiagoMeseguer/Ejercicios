function getBuscar() {
    const codprov=document.getElementById("cod-provincia").value
    const municipio=document.getElementById("buscar-muni").value
    const contenedor=document.getElementById("contenedor")
    fetch("datosCensales.json")
    //.then(res => res.json()) //Otra forma json
    .then(function(response){
        return response.json()
    })
    .then(function(data){
        console.log(data)
        let localidades=data["localidades-censales"]
        let total= data.cantidad
        if ((codprov>0) && (codprov<=total)) {
            for (let i = 0; i < total; i++) {
                if ((codprov==localidades[i].provincia.id)&&(municipio==localidades[i].municipio.nombre)) {
                    contenedor.innerHTML=`<h4>Municipio Encontrado</h4><p>Cantidad:<b>${total}<b></p>`
                    break
                }else{
                    contenedor.innerHTML=`<h4>Municipio No Encontrado</h4><p>Cantidad:<b>${total}<b></p>`
                }
            }
        }else{
            contenedor.innerHTML=`<h4>La provincia no existe</h4><p>Cantidad:<b>${total}<b></p>`
        }
    })
}