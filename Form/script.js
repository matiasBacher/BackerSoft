function modificar() {
    document.getElementById("modificar").style.display = "block";
    document.getElementById("registro").style.display = "none";
    document.getElementById("consultar").style.display = "none";
}

function registro() {
    document.getElementById("modificar").style.display = "none";
    document.getElementById("registro").style.display = "block";
    document.getElementById("consultar").style.display = "none";
}

function consultar() {
    document.getElementById("modificar").style.display = "none";
    document.getElementById("registro").style.display = "none";
    document.getElementById("consultar").style.display = "block";
}