
selectPais=document.querySelector('#selectCountry');

selectPais.addEventListener('change',(e) =>{
    let valor= e.target.value;
    let xhttp=new XMLHttpRequest();
    console.log(valor);
    xhttp.open('GET',"index.php?valor="+valor,true);
    xhttp.send();
});