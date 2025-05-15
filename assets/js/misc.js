// Funcionalidad de volver a página previa para el formulario de logout
// usando el history del navegador

if (document.getElementById("back")) {
    const botonVuelta = document.getElementById("back");
    botonVuelta.addEventListener('click', function() {
        history.back();
    })
}

if (document.getElementById('back2')) {
    const botonVuelta2 = document.getElementById("back2");
    botonVuelta2.addEventListener('click', function() {
        history.back();
    })
}