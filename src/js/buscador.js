document.addEventListener('DOMContentLoaded', function () {
    inicarApp();
})

function inicarApp() {
    buscarPorFecha();
}

function buscarPorFecha() {
    const fechainput = document.querySelector('#fecha');
    fechainput.addEventListener('input', function(e) {
        const fechaSeleccionada = e.target.value;

        window.location = `?fecha=${fechaSeleccionada}`;

    })
}