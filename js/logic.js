function addU(){
	document.getElementById('addUser').style.display = "block";
	document.getElementById('listUsers').style.display = "none";
}
function listUsers(){
	document.getElementById('addUser').style.display = "none";
	document.getElementById('listUsers').style.display = "block";
}
function ppal(){
	document.getElementById('addUser').style.display = "none";
	document.getElementById('listUsers').style.display = "none";
}

function opType() {
    var op = document.getElementById('usersTypes').value;
    
    // Resetea los divs a oculto
    document.getElementById('department').disabled = true;
    document.getElementById('dependence').disabled = true;
    document.getElementById('groupStdnt').disabled = true;
    document.getElementById('career').disabled = true;

    // Si no se ha seleccionado ninguna opción
    if (op == 0) {
        return; // No hacer nada
    }
    
    // Mostrar solo typeAdmin si op está entre 1 y 8
    if (op > 0 && op <= 8) {
    	document.getElementById('department').disabled = false;
    	document.getElementById('dependence').disabled = false;
    	document.getElementById('groupStdnt').disabled = true;
    	document.getElementById('career').disabled = true;
    }

    // Mostrar ambos si op está entre 9 y 10
    if (op > 8 && op <= 10) {
        document.getElementById('department').disabled = false;
        document.getElementById('dependence').disabled = false;
        document.getElementById('groupStdnt').disabled = false;
        document.getElementById('career').disabled = false;
    }
}