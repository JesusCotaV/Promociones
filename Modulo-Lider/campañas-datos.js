const cargarSolicitudes = async() =>{
    try{
        const respuesta = await fetch("http://localhost:4000/campanas1")

        if(respuesta.status === 200){
            const datos = await respuesta.json();

            let campañas2 =""
            datos.forEach(campañas => {
                campañas2 +=`
                <h2>${campañas.Detalles}</h2>
                <br><br>
                <input onclick="ShowFecha()" class="input-aceptar" type="submit" value="Autorizar">
                <input onclick="ShowObservacion()" class="input-rechazar" type="submit" value="Rechazar">
                `
            });

            document.getElementById("campañas").innerHTML = campañas2;
        } else if(respuesta.status === 401){
            console.log("Error")
        }

    } catch(error){
        console.log(error)
    }

}

cargarSolicitudes();