let myform = document.querySelector("#formCountry"); //seleccionamos el formulario
let myHeaders = new Headers({ "Content-Type": "application/json" }) //creamos el header que vamos a incluir en el fetch

myform.addEventListener("submit", async (e) => { //creamos un evento de escucha al formulario de un "Submit"
     //prevenimos el comportamiento por defecto del formulario al hacer un submit
    let data = Object.fromEntries(new FormData(e.target)); //recuperamos los datos que se llenan en el form
    let config = { //creamos la configuracion que vamos a pasar al fetch
        method: "POST",
        headers: myHeaders,
        body: JSON.stringify(data)
    };
    let res = await (await fetch("scripts/paises/insertPais.php", config)).text(); //realizamos el fetch y transformamos la respuesta a txt
})

let editBtn=document.querySelectorAll('#botonEditar');
editBtn.forEach((boton)=>{
    boton.addEventListener('click',(e)=>{
        let info=e.target.parentElement.parentElement.querySelectorAll('td')
        let id=info[0].innerHTML; 
        let name=info[1].innerHTML;
        let myformEdit = document.querySelector("#formCountryEdit");
        let modalInput=document.querySelector('#editarInput');
        let titulo=document.querySelector('#exampleModalLabel');
        myformEdit.dataset.id=id;
        titulo.innerHTML='Editar '+name;
        modalInput.value=name;

    })
})



let myformEdit = document.querySelector("#formCountryEdit"); //seleccionamos el formulario

myformEdit.addEventListener("submit", async (e) => { //creamos un evento de escucha al formulario de un "Submit"
     //prevenimos el comportamiento por defecto del formulario al hacer un submit
    let dataEdit = Object.fromEntries(new FormData(e.target)); 
    dataEdit.id_country=e.target.dataset.id;
    let config = { //creamos la configuracion que vamos a pasar al fetch
        method: "POST",
        headers: myHeaders,
        body: JSON.stringify(dataEdit)
    };
    console.log(dataEdit);
    let res = await (await fetch("scripts/paises/editPais.php", config)).text();
    console.log(res); 
    e.preventDefault();
    e.stopImmediatePropagation();
})