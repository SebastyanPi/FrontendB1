const CURL = "http://127.0.0.1:8000/api/";
const PAGE = "http://localhost/FrontendB1/";
var ventana = document.getElementById('onload');

function loader(estado){
    if(estado){
        ventana.classList.remove('d-none');
    }else{
        ventana.classList.add('d-none');
    }
   
}