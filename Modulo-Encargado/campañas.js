const cargarCampañas = async() =>{
    try{
        const respuesta = await fetch("http://localhost:4000/campanas2")

        if(respuesta.status === 200){
            const datos = await respuesta.json();

            let campañas2 =""
            let valor = ""
            datos.forEach(campañas => {
                if(campañas.Estado==="Autorizada"){
                    valor = "Enviar"
                } else if(campañas.Estado==="Finalizada"){
                    valor = "Reporte"
                }
                campañas2 +=`
                <table class="search-table">
                <tbody>
                    <tr>
                        <td class="detalles">${campañas.Detalles}</td>
                        <td class="fecha2">${campañas.FechaI}</td>
                        <td class="estado">${campañas.Estado}</td>
                        <td><input class="enviar-campaña" type="submit" value=${valor}></td>
                    </tr>
                </tbody>
            </table>
                `
            });

            document.getElementById("prueba").innerHTML = campañas2;
        } else if(respuesta.status === 401){
            console.log("Error")
        }

    } catch(error){
        console.log(error)
    }

}

cargarCampañas();