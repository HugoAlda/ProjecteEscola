function validanombre() {
    let valor1 = document.getElementById("nombre_apellidos").value;
    if (valor1 == null || valor1.length == 0 ) {
        document.getElementById("error_nombre_apellidos").innerHTML = "Introduce tu nombre, no lo puedes dejar vacío";
    } else if (/^\s+$/.test(valor1)) {
        document.getElementById("error_nombre_apellidos").innerHTML = "Introduce tu nombre, no lo hagas cosas raras con espacios";
    } else if (!isNaN(valor1)) {
        document.getElementById("error_nombre_apellidos").innerHTML = "Introduce tu nombre, no escribas numeros hombreee, eres tonto? solo tu nombre macho nada mas";
    } else {
        document.getElementById("error_nombre_apellidos").innerHTML = "";
    }
}
function validaedad() {
    let valor2 = document.getElementById("edad").value;
    if (valor2 == null || valor2.length == 0 ) {
        document.getElementById("error_edad").innerHTML = "Introduce tu edad, no lo puedes dejar vacío";
    }else if (/^\s+$/.test(valor2)) {
        document.getElementById("error_edad").innerHTML = "Introduce tu edad, no lo dejes espacios";
    } else if (isNaN(valor2)) {
        document.getElementById("error_edad").innerHTML = "Introduce un número válido para la edad";
    } else if (valor2 < 17) {
        document.getElementById("error_edad").innerHTML = "Para poder acceder debes tener al menos 17 años";
    } else {
        document.getElementById("error_edad").innerHTML = "";
    }
}


function validaopciones() {
    let indice = document.getElementById("opciones").selectedIndex;
    if (indice == null || indice == 0) {
        document.getElementById("error_opciones").innerHTML = "No puedes dejar el campo vacio";
    } else {
        document.getElementById("error_opciones").innerHTML = "";
    }
}

function validaemail() {
    let valor3 = document.getElementById("email").value;
    if(valor3 == null || valor3.length === 0) {
        document.getElementById("error_email").innerHTML = "Introduce tu dirección de correo electrónico, no la puedes dejar vacía";
    }else if (!(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor3))) {
        document.getElementById("error_email").innerHTML = "Direccion de correo invalida, prueba con otra correcta";
    }  else {
        document.getElementById("error_email").innerHTML = "";
    }
}
function validarFechaNacimiento() {
    let ano = parseInt(document.getElementById("ano").value);
    let mes = parseInt(document.getElementById("mes").value) - 1; // Resta 1 porque los meses van de 0 a 11
    let dia = parseInt(document.getElementById("dia").value);

    let valor = new Date(ano, mes, dia);

    if (isNaN(valor)) {
        document.getElementById("error_fecha_nacimiento").innerText = "La fecha de nacimiento no es válida.";
        return false;
    }
    document.getElementById("error_fecha_nacimiento").innerText = "";
    return true;
}

// function validarFechaNacimiento() {
//     var fecha_nacimiento = document.getElementById("fecha_nacimiento").value;
//     var fechaNacimiento = new Date(fecha_nacimiento);
//     var hoy = new Date();
//     var edadCalculada = hoy.getFullYear() - fechaNacimiento.getFullYear();

//     if (fecha_nacimiento == null || fecha_nacimiento.length === 0) { // Verificar si fecha_nacimiento está vacío
//         document.getElementById("error_fecha_nacimiento").innerHTML = "Por favor, ingresa tu fecha de nacimiento.";
//         return; 
//     }

//     if (hoy.getMonth() < fechaNacimiento.getMonth() || (hoy.getMonth() === fechaNacimiento.getMonth() && hoy.getDate() < fechaNacimiento.getDate())) { 
//         edadCalculada--; 
//     }

//     if (edadCalculada < 0) {
//         document.getElementById("error_fecha_nacimiento").innerHTML = "La fecha de nacimiento no puede ser en el futuro.";
//     } else {
//         document.getElementById("error_fecha_nacimiento").innerHTML = "";
//     }
// }


function validatelefono() {
    let valor6 = document.getElementById("telefono").value;
    if (valor6 == null || valor6.length == 0) {
        document.getElementById("error_telefono").innerHTML = "El numero de telefono no puede estar vacio";
    } else if (!(/^\d{9}$/.test(valor6)) &&
        !(/^\d{3}-\d{3}-\d{3}$/.test(valor6)) &&
        !(/^\d{3}\s\d{6}$/.test(valor6)) &&
        !(/^\d{3}\s\d{2}\s\d{2}\s\d{2}$/.test(valor6)) &&
        !(/^\(\d{3}\)\s\d{6}$/.test(valor6)) &&
        !(/^\+\d{2,3}\s\d{9}$/.test(valor6))) {
        document.getElementById("error_telefono").innerHTML = "El número de teléfono debe ser válido";
    } else {
        document.getElementById("error_telefono").innerHTML = "";
    }
}

function validaDNI() {
    var valor7 = document.getElementById("dni").value;
    var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

    if (valor7.length == 0 || valor7 == null) {
        document.getElementById("error_dni").innerHTML = "No puedes dejar el campo vacío";
    } else if (!(/^\d{8}[A-Z]$/.test(valor7))) {
        document.getElementById("error_dni").innerHTML = "Escribe bien el formato del DNI, 8 números, 1 letra mayuscula";
    } else {
        if (valor7.charAt(8) != letras[(valor7.substring(0, 8)) % 23]) {
            document.getElementById("error_dni").innerHTML = "El DNI introducido es incorrecto";
        } else {
            document.getElementById("error_dni").innerHTML = "";
        }
    }
}
// function validaradiobutton() {
//     var opciones = document.getElementsByName("sexo");
//     var seleccionado = false;
//     for (var i = 0; i < opciones.length; i++) {
//         if (opciones[i].checked) {
//             seleccionado = true;
//             break;
//         }
//     }
//     if (!seleccionado) {
//         document.getElementById("error_sexo").innerHTML = "Selecciona uno, ni que sea.";
//     } else {
//         document.getElementById("error_sexo").innerHTML = "";
//     }
// }




// function validacheckbox(){
//     var interes1 = document.getElementById("interes1");
//     var interes2 = document.getElementById("interes2");
//     var interes3 = document.getElementById("interes3");
    
//     if(!interes1.checked && !interes2.checked && !interes3.checked) {
//         document.getElementById("error_intereses").innerHTML = "Selecciona al menos una opción";
//     } else {
//         document.getElementById("error_intereses").innerHTML = "";
//     }
// }


