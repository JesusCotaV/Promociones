const cargarSolicitudes = async() =>{
    try{
        const respuesta = await fetch("http://localhost:4000/campanas1")

        if(respuesta.status === 200){
            const datos = await respuesta.json();

            let solicitudes2 =""
            datos.forEach(solicitudes => {
                solicitudes2 +=`
                <option value="${solicitudes.id_campaña}">${solicitudes.Detalles}</option>
                `
            });

            document.getElementById("options").innerHTML = solicitudes2;
        } else if(respuesta.status === 401){
            console.log("Error")
        }

    } catch(error){
        console.log(error)
    }

}

cargarSolicitudes();