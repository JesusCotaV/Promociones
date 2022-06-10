const cargarSolicitudes = async() =>{
    try{
        const respuesta = await fetch("http://localhost:4000/solicitudesAll")

        if(respuesta.status === 200){
            const datos = await respuesta.json();

            let solicitudes2 =""
            datos.forEach(solicitudes => {
                solicitudes2 +=`
                <table class="search-table">
                <tbody>
                    <tr>
                        <td>${solicitudes.info}</td>
                        <td maxlength="5">${solicitudes.fecha}</td>
                        <td>${solicitudes.estado}</td>
                    </tr>
                </tbody>
            </table>
                `
            });

            document.getElementById("prueba").innerHTML = solicitudes2;
        } else if(respuesta.status === 401){
            console.log("Error")
        }

    } catch(error){
        console.log(error)
    }

}

cargarSolicitudes();