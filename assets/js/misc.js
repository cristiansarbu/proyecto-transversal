// Funcionalidad de volver a página previa para el formulario de logout
// usando el history del navegador

const botonVuelta = document.getElementById("back");
botonVuelta.addEventListener('click', function() {
    history.back();
})