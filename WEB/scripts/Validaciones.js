// VALIDACIONES DE ALUMNOS
function validaMatricula() {
    let valor1 = document.getElementById("Matricula_Alumne").value;
    if(valor1 == null || valor1.length === 0) {
        document.getElementById("error_matricula").innerHTML = "El campo no puede estar vacío.";
    } else if (isNaN(valor1)) {
        document.getElementById("error_cognom1").innerHTML = "El campo tiene que ser un numero.";
    } else {
        document.getElementById("error_cognom1").innerHTML = "";
    }
    
}

function validaNombre() {
    let valor1 = document.getElementById("Nom_Alumne").value;
    if (valor1 == null || valor1.length == 0 ) {
        document.getElementById("error_nom").innerHTML = "Introduce tu nombre, no lo puedes dejar vacío";
    } else if (/^\s+$/.test(valor1)) {
        document.getElementById("error_nom").innerHTML = "Introduce tu nombre, no lo hagas con espacios";
    } else if (!isNaN(valor1)) {
        document.getElementById("error_nom").innerHTML = "Introduce tu nombre, el campo no puede ser un numero.";
    } else {
        document.getElementById("error_nom").innerHTML = "";
    }
}

function validaApellido1() {
    let valor1 = document.getElementById("Primer_Cognom_Alumne").value;
    if (valor1 == null || valor1.length == 0 ) {
        document.getElementById("error_cognom1").innerHTML = "Introduce tu primer apellido, no lo puedes dejar vacío";
    } else if (/^\s+$/.test(valor1)) {
        document.getElementById("error_cognom1").innerHTML = "Introduce tu primer apellido, no lo hagas con espacios";
    } else if (!isNaN(valor1)) {
        document.getElementById("error_cognom1").innerHTML = "Introduce tu primer apellido, el campo no puede ser un numero.";
    } else {
        document.getElementById("error_cognom1").innerHTML = "";
    }
}

function validaApellido2() {
    let valor1 = document.getElementById("Segon_Cognom_Alumne").value;

    if (valor1 == null || valor1.length == 0 ) {
        document.getElementById("error_cognom2").innerHTML = "Introduce tu segundo apellido, no lo puedes dejar vacío";
    } else if (/^\s+$/.test(valor1)) {
        document.getElementById("error_cognom2").innerHTML = "Introduce tu segundo apellido, no lo hagas con espacios";
    } else if (!isNaN(valor1)) {
        document.getElementById("error_cognom2").innerHTML = "Introduce tu segundo apellido, el campo no puede ser un numero.";
    } else {
        document.getElementById("error_cognom2").innerHTML = "";
    }
}

function validaTelf() {
    let valor = document.getElementById("Telefon_Alumne").value;

    if (valor == null || valor.length == 0) {
        document.getElementById("error_telf").innerHTML = "El campo no puede estar vacío.";
        return false;
    } else if (!(/^\d{9}$/.test(valor))) {
        document.getElementById("error_telf").innerHTML = "El formato de teléfono no es válido. Debe tener 9 dígitos.";
        return false;
    } else {
        document.getElementById("error_telf").innerHTML = "";
        return true;
    }
}


function validaEmail() {
    let valor3 = document.getElementById("Correu_Alumne").value;
    if(valor3 == null || valor3.length === 0) {
        document.getElementById("error_email").innerHTML = "Introduce tu dirección de correo electrónico, no la puedes dejar vacía";
        return false;
    }else if (!(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor3))) {
        document.getElementById("error_email").innerHTML = "Direccion de correo invalida, prueba con otra correcta";
        return false;
    }  else {
        document.getElementById("error_email").innerHTML = "";
        return true;
    }
}

function validaOpcionesCurso() {
    let indice = document.getElementById("FK_ID_Curs").selectedIndex;
    if (indice == null || indice == 0) {
        document.getElementById("error_opcion_curso").innerHTML = "No puedes dejar el campo vacío";
        return false;
    } else {
        document.getElementById("error_opcion_curso").innerHTML = "";
    }
}

function validaOpcionesSexo() {
    let indice = document.getElementById("Sexe_Alumne").selectedIndex;
    if (indice == null || indice == 0) {
        document.getElementById("error_opcion_sexo").innerHTML = "No puedes dejar el campo vacio";
        return false;
    } else {
        document.getElementById("error_opcion_sexo").innerHTML = "";
    }
}

function validaDNI() {
    var valor = document.getElementById("DNI_Alumne").value;
    var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

    if (valor.length == 0 || valor == null) {
        document.getElementById("error_dni").innerHTML = "No puedes dejar el campo vacío";
    } else if (!(/^\d{8}[A-Z]$/.test(valor))) {
        document.getElementById("error_dni").innerHTML = "Escribe bien el formato del DNI, 8 números, 1 letra mayuscula";
    } else {
        if (valor.charAt(8) != letras[(valor.substring(0, 8)) % 23]) {
            document.getElementById("error_dni").innerHTML = "El DNI introducido es incorrecto";
        } else {
            document.getElementById("error_dni").innerHTML = "";
        }
    }
}

//==========================================================================================================================================================================
// VALIDACIONES PROFESORES

function validaNombreProfe() {
    let valor1 = document.getElementById("Nom_Professor").value;
    if (valor1 == null || valor1.length == 0 ) {
        document.getElementById("error_nom").innerHTML = "Introduce tu nombre, no lo puedes dejar vacío";
    } else if (/^\s+$/.test(valor1)) {
        document.getElementById("error_nom").innerHTML = "Introduce tu nombre, no dejes solo espacios";
    } else if (!isNaN(valor1)) {
        document.getElementById("error_nom").innerHTML = "Introduce tu nombre, el campo no puede ser un numero.";
    } else {
        document.getElementById("error_nom").innerHTML = "";
    }
}

function validaApellido1Profe() {
    let valor1 = document.getElementById("Primer_Cognom_Professor").value;
    if (valor1 == null || valor1.length == 0 ) {
        document.getElementById("error_cognom1").innerHTML = "Introduce tu primer apellido, no lo puedes dejar vacío";
    } else if (/^\s+$/.test(valor1)) {
        document.getElementById("error_cognom1").innerHTML = "Introduce tu primer apellido, no dejes solo espacios";
    } else if (!isNaN(valor1)) {
        document.getElementById("error_cognom1").innerHTML = "Introduce tu primer apellido, el campo no puede ser un numero.";
    } else {
        document.getElementById("error_cognom1").innerHTML = "";
    }
}

function validaApellido2Profe() {
    let valor1 = document.getElementById("Segon_Cognom_Professor").value;

    if (valor1 == null || valor1.length == 0 ) {
        document.getElementById("error_cognom2").innerHTML = "Introduce tu segundo apellido, no lo puedes dejar vacío";
    } else if (/^\s+$/.test(valor1)) {
        document.getElementById("error_cognom2").innerHTML = "Introduce tu segundo apellido, no dejes solo espacios";
    } else if (!isNaN(valor1)) {
        document.getElementById("error_cognom2").innerHTML = "Introduce tu segundo apellido, el campo no puede ser un numero.";
    } else {
        document.getElementById("error_cognom2").innerHTML = "";
    }
}

function validaTelfProfe() {
    let valor = document.getElementById("Telefon_Professor");

    if (valor == null || valor.length == 0) {
        document.getElementById("error_telf").innerHTML = "El campo no puede estar vacío.";
        return false;
    } else if (!(/^\d{9}$/.test(valor))) {
        document.getElementById("error_telf").innerHTML = "El formato de teléfono no es válido. Debe tener 9 dígitos.";
        return false;
    } else {
        document.getElementById("error_telf").innerHTML = "";
        return true;
    }
}


function validaEmailProfe() {
    let valor3 = document.getElementById("Correu_Professor").value;
    if(valor3 == null || valor3.length === 0) {
        document.getElementById("error_email").innerHTML = "Introduce tu dirección de correo electrónico, no la puedes dejar vacía";
        return false;
    }else if (!(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor3))) {
        document.getElementById("error_email").innerHTML = "Direccion de correo invalida, prueba con otra correcta";
        return false;
    }  else {
        document.getElementById("error_email").innerHTML = "";
        return true;
    }
}

function validaOpcionesSexoProfe() {
    let indice = document.getElementById("Sexe_Professor").selectedIndex;
    if (indice == null || indice == 0) {
        document.getElementById("error_opcion_sexo").innerHTML = "No puedes dejar el campo vacio";
        return false;
    } else {
        document.getElementById("error_opcion_sexo").innerHTML = "";
    }
}

function validaDNIProfe() {
    var valor = document.getElementById("DNI_Professor").value;
    var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

    if (valor.length == 0 || valor == null) {
        document.getElementById("error_dni").innerHTML = "No puedes dejar el campo vacío";
    } else if (!(/^\d{8}[A-Z]$/.test(valor))) {
        document.getElementById("error_dni").innerHTML = "Escribe bien el formato del DNI, 8 números, 1 letra mayuscula";
    } else {
        if (valor.charAt(8) != letras[(valor.substring(0, 8)) % 23]) {
            document.getElementById("error_dni").innerHTML = "El DNI introducido es incorrecto";
        } else {
            document.getElementById("error_dni").innerHTML = "";
        }
    }
}

function validaCursosAsignadosProfe(){
    var valor = document.getElementById("Cursos_assignats").value;
    if (valor == null || valor.length == 0 ) {
        document.getElementById("error_cursos").innerHTML = "No puedes dejar el campo vacío";
    } else if (/^\s+$/.test(valor)) {
        document.getElementById("error_cursos").innerHTML = "No introduzcas solo espacios";
    } else {
        document.getElementById("error_cursos").innerHTML = "";
    }
}

function validaCarrecProfe(){
    var indice = document.getElementById("Carrec_Professor").value;
    if (indice == null || indice == 0) {
        document.getElementById("error_carrec").innerHTML = "No puedes dejar el campo vacio";
        return false;
    } else {
        document.getElementById("error_opcion_sexo").innerHTML = "";
    }
}

function validaTutorAssignatProfe(){
    var indice = document.getElementById("Tutor_assignat").value;
    if (indice == null || indice == 0) {
        document.getElementById("error_tutor_assignat").innerHTML = "No puedes dejar el campo vacio";
        return false;
    } else {
        document.getElementById("error_tutor_assignat").innerHTML = "";
    }
}