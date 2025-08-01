// 1. Seleccionamos el input y el span de error
const inputNombrePagina = document.getElementById("nombrePagina");
const spanErrorNombrePagina = document.getElementById("errorNombrePagina");

// 2. Función de validación principal
const validarNombrePaginaEnTiempoReal = () => {
    const valor = inputNombrePagina.value;
    const regexSoloCaracteresValidos = /^[a-zA-Z0-9_ A-ZÁÉÍÓÚÑ a-záéíóúñ]*$/;

    // --- Lógica para mostrar mensajes según el tipo de error ---

    inputNombrePagina.classList.remove("is-invalid", "is-valid");
    spanErrorNombrePagina.textContent = "";

    if (valor.length === 0) {
        inputNombrePagina.classList.add("is-invalid");
        spanErrorNombrePagina.textContent = "El nombre de la página es necesario.";
        return false;
    } else if (!regexSoloCaracteresValidos.test(valor)) {
        // Si hay caracteres no válidos
        inputNombrePagina.classList.add("is-invalid");
        inputNombrePagina.classList.remove("is-valid");
        spanErrorNombrePagina.textContent = "Solo se permiten letras, números y guiones bajos.";
        return false;
    } else {
        // Si todos los caracteres son válidos hasta el momento
        inputNombrePagina.classList.remove("is-invalid");
        inputNombrePagina.classList.add("is-valid");
        spanErrorNombrePagina.textContent = ""; // Limpiar mensaje de error
        return true; // Indicamos que el contenido actual es válido
    }
};

// 3. Añadimos el escuchador de eventos para 'input'
inputNombrePagina.addEventListener("input", validarNombrePaginaEnTiempoReal);


inputNombrePagina.addEventListener("blur", () => {
    if (inputNombrePagina.value.length === 0) {
        inputNombrePagina.classList.add("is-invalid");
        spanErrorNombrePagina.textContent = "El nombre de la página no puede estar vacío.";
    }
});


//2. Validar descripción
const inputDescripcion = document.getElementById("descripcionPagina");
const spanErrorDescripcion = document.getElementById("errorDescripcion");

const validarDescripcion=()=>{
    const valor=inputDescripcion.value

    inputDescripcion.classList.remove("is-invalid", "is-valid");
    spanErrorDescripcion.textContent = "";

    if(valor.length===0){
        inputDescripcion.classList.add("is-invalid");
        spanErrorDescripcion.textContent = "Agrege una descripcion.";
        return false;
    }else {
        inputDescripcion.classList.remove("is-invalid");
        inputDescripcion.classList.add("is-valid");
        spanErrorDescripcion.textContent = "";
        return true;
    }
};

inputDescripcion.addEventListener("input", validarDescripcion);

inputDescripcion.addEventListener("blur", () => {
    if (inputDescripcion.value.length === 0) {
        inputDescripcion.classList.add("is-invalid");
        spanErrorDescripcion.textContent = "El campo no puede estar vacío.";
    }
});

//3.Validar foto de perfil

// 1. Seleccionamos los elementos HTML
const inputFotoPerfil = document.getElementById("fotoPerfil");
const spanErrorFotoPerfil = document.getElementById("errorFotoPerfil");

// 2. Función de validación principal
const validarFotoPerfil = () => {
    // inputFotoPerfil.files es un FileList
    const archivosSeleccionados = inputFotoPerfil.files;

    // Reiniciar estilos y mensajes por si se ha corregido
    inputFotoPerfil.classList.remove("is-invalid", "is-valid");
    spanErrorFotoPerfil.textContent = "";

    // 2.1. Validación: El campo no puede quedar vacío (si se intenta enviar el formulario o se ha interactuado)
    if (archivosSeleccionados.length === 0) {
        inputFotoPerfil.classList.add("is-invalid");
        spanErrorFotoPerfil.textContent = "Debes seleccionar una foto de perfil.";
        return false; // Validación fallida
    }

    // 2.2. Validación: Tipo de archivo (JPG o PNG)
    const archivo = archivosSeleccionados[0]; 
    const tipoArchivo = archivo.type; 

    // Comprobamos si el tipo de archivo es JPEG o PNG
    if (tipoArchivo !== "image/jpeg" && tipoArchivo !== "image/png") {
        inputFotoPerfil.classList.add("is-invalid");
        spanErrorFotoPerfil.textContent = "Solo se permiten archivos JPG y PNG.";
        inputFotoPerfil.value = '';
        return false; // Validación fallida
    }

    // Si todo es correcto
    inputFotoPerfil.classList.add("is-valid");
    spanErrorFotoPerfil.textContent = ""; // Limpiamos el mensaje de error
    return true; // Validación exitosa
};

// 3. Añadimos los escuchadores de eventos

inputFotoPerfil.addEventListener("change", validarFotoPerfil);

inputFotoPerfil.addEventListener("blur", () => {
    if (inputFotoPerfil.value.length === 0) {
        inputFotoPerfil.classList.add("is-invalid");
        spanErrorFotoPerfil.textContent = "El campo no puede estar vacío.";
    }
});

//4. Validación de estatus

// 1. Seleccionamos los elementos HTML
const selectStatus = document.getElementById("selectStatus");
const spanErrorSelectStatus = document.getElementById("errorSelectStatus");

// 2. Función de validación principal
const validarSelectStatus = () => {
    const valorSeleccionado = selectStatus.value;

    // Reiniciar estilos y mensajes por si se ha corregido
    selectStatus.classList.remove("is-invalid", "is-valid");
    spanErrorSelectStatus.textContent = "";

    // La validación es simple: si el valor seleccionado es "Seleccione", es inválido.
    if (valorSeleccionado === "Seleccione") {
        selectStatus.classList.add("is-invalid");
        spanErrorSelectStatus.textContent = "Debes seleccionar una opción de privacidad.";
        return false; // Validación fallida
    } else {
        // Si se seleccionó una opción válida (pública o privada)
        selectStatus.classList.add("is-valid");
        spanErrorSelectStatus.textContent = "";
        return true; // Validación exitosa
    }
};

// 3. Añadimos los escuchadores de eventos

// Evento 'change': Se dispara cuando el usuario selecciona una opción diferente
selectStatus.addEventListener("change", validarSelectStatus);

// Evento 'blur': útil para validar cuando el usuario sale del campo sin seleccionar nada
selectStatus.addEventListener("blur", validarSelectStatus);

// 4. Integración con la validación del formulario
const formPrincipal = document.querySelector("#miformulario");
if (formPrincipal) {
    formPrincipal.addEventListener('submit', (evento) => {
        // Ejecutamos la validación justo antes de enviar
        const esSelectValido = validarSelectStatus();
        const nombrePagValido=validarNombrePaginaEnTiempoReal();
        const despcripcionValido=validarDescripcion();
        const fotoPerfilValido=validarFotoPerfil(); 

        if (!esSelectValido || !nombrePagValido || !despcripcionValido || !fotoPerfilValido) {
            evento.preventDefault(); // ¡Detiene el envío del formulario si la validación falla!
            alert("Por favor, corrige los errores en el formulario antes de enviar.");
        }
    });
}




