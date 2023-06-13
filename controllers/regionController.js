
let myformReg = document.querySelector("#formRegions"); //seleccionamos el formulario
let myHeadersReg = new Headers({ "Content-Type": "application/json" }) //creamos el header que vamos a incluir en el fetch

myformReg.addEventListener("submit", async (e) => { //creamos un evento de escucha al formulario de un "Submit"
     //prevenimos el comportamiento por defecto del formulario al hacer un submit
    let data = Object.fromEntries(new FormData(e.target)); //recuperamos los datos que se llenan en el form
    let config = { //creamos la configuracion que vamos a pasar al fetch
        method: "POST",
        headers: myHeadersReg,
        body: JSON.stringify(data)
    };
    let res = await (await fetch("scripts/regiones/insertRegion.php", config)).text(); //realizamos el fetch y transformamos la respuesta a txt
})