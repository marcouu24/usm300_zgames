const cargarMarcas=async()=>{
    //1.Ir a buscar marcas a la api
    let resultado = await axios.get("api/marcas/get");
    let marcas=resultado.data;
    //2.CARGAR LAS MARCAS DENTRO DEL SELECT
    let marcaSelect = document.querySelector("#marca-select");
    marcas.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        marcaSelect.appendChild(option);
    })
}


//Esto ejecuta codigo asegurando q el ottal de la pagina
//incluiso recursos este cargado antes de ehecutar
document.addEventListener("DOMContentLoaded", ()=>{
    cargarMarcas();
});



document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let nombre = document.querySelector("#nombre-txt").value;
    let marca = document.querySelector("#marca-select").value;
    let anio = document.querySelector("#anio-txt").value;
    let consola={};
    consola.nombre=nombre;
    consola.marca=marca;
    consola.anio=anio;
    //esta linea hace
    //1.Va al controlador, le pasa los datos
    //2,El controlador crea el modelo
    //3. El modelo ingresa en la base de datos
    let res= await crearConsola(consola);
    await Swal.fire("Buen trabajo!", "Se ha agregado la consola", "success");
    //await hace q se realizara la prox accion cuando la persona aprete OK
    window.location.href="ver_consolas";
});