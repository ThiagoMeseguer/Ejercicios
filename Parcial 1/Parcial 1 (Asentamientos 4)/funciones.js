
function consulta() {
    fetch("asentamientos.json")
    .then((res) => (res.json()))
    .then(function (data){
        console.log(data)
    })
}