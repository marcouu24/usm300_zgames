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
cargarMarcas();