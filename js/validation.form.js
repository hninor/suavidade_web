function validateForm() {
    var nombre = document.forms["nuevoProducto"]["nombre"].value;
    var precio = document.forms["nuevoProducto"]["precio"].value;
    if (nombre == "") {
        alert("Ingrese el nombre del producto");
        return false;
    } else if (precio == "") {
    	alert("Ingrese el precio del producto");
        return false;
    } else if (isNaN(precio) || precio < 0) {
    	alert("Ingrese un precio válido");
        return false;
    } else {
    	return true;
    }
}