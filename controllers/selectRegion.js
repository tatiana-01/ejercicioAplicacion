
selectPais=document.querySelector('#selectCountry');
selectRegion=document.querySelector('#selectRegion');

let myHeadersSelect = new Headers({ "Content-Type": "application/json" })
selectPais.addEventListener('change',async(e) =>{
    let valor= e.target.value;
    console.log(valor);
    try{
        let config = { //creamos la configuracion que vamos a pasar al fetch
            method: "POST",
            headers: myHeadersSelect,
            body: JSON.stringify(valor)
        };
        let res = await (await fetch("index.php", config)).text();
        //let res =  await fetch(`controllers/prueba.php?valor=${valor}`);
        //let regiones = await response.json();
        console.log(res);
        

/*         regiones.forEach(region =>{
            const option = document.createElement('option');
            option.value = region.id;
            option.textContent = region.nombre;
            selectRegion.appendChild(option);
        }) */

    } catch (error) {
        console.error(error);
    }
    location.reload();
});


/*     fetch('index.php',
    {
        method: 'POST',
        headers:{
            "content-type": "application/json"
        },
        body: JSON.stringify(valor)
    })

    .then((response) =>{
        return response;
    })
    .then((response) =>{
        console.log(response);
    }) */
    /* let xhttp=new XMLHttpRequest();
    console.log(valor);
    xhttp.open('GET',"index.php?valor="+valor,true);
    xhttp.send(); */