
let selectPais=document.querySelector('#selectCountry');
let selectRegion=document.querySelector('#selectRegion');
let myHeadersSelect = new Headers({ "Content-Type": "application/json" })
innerSelect(selectPais.value);


selectPais.addEventListener('change',async(e) =>{
    let valor= e.target.value;
    console.log(valor);
    innerSelect(valor);

});

async function innerSelect(valor){
    selectRegion.innerHTML='';
    try{
        let config = { //creamos la configuracion que vamos a pasar al fetch
            method: "POST",
            headers: myHeadersSelect,
            body: JSON.stringify(valor)
        };
        let res = await (await fetch("scripts/regiones/dataSelectRegiones.php", config)).text();
        let regiones=JSON.parse(res);
        regiones.forEach( (region)=> {
            console.log(region);
            const option = document.createElement('option');
            option.value = region.id_region;
            option.innerText = region.name_region;
            selectRegion.appendChild(option);
        });
        
    } catch (error) {
        console.error(error);
    }
}