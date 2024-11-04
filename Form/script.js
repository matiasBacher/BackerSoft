function modificar() {
    document.getElementById("modificar").style.display = "block";
    document.getElementById("registro").style.display = "none";
    document.getElementById("consultar").style.display = "none";


}

function registrar() {
    document.getElementById("registro").style.display = "block";
    document.getElementById("modificar").style.display = "none";
    document.getElementById("consultar").style.display = "none";
}


function consultar() {
    document.getElementById("modificar").style.display = "none";
    document.getElementById("registro").style.display = "none";
    document.getElementById("consultar").style.display = "block";
}