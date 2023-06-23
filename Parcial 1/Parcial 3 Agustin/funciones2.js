function funcion() {
    const id=document.getElementById("la_id").value;
    const nombre_muni=document.getElementById("texto").value;
    const resultadoDiv=document.getElementById("resultado");
    const url=`datosCensales.json`;

    
    fetch(url)
    .then(response => response.json())
    .then(data =>{
        console.log(data["localidades-censales"]);
        
        var aux="";
        for (let i = 0; i < data["localidades-censales"].length; i++) {
            const objeto = data["localidades-censales"][i];
            
            if (id==objeto.provincia.id&&nombre_muni==objeto.municipio.nombre) {
                console.log(objeto.provincia.id);
                aux=`<h1>SI<h1>`;
                break
            }else{
                aux=`<h1>NO<h1>`;
            }
        }
        resultadoDiv.innerHTML=aux;
    })  
}