document.addEventListener('DOMContentLoaded', function () {
    // Obtener referencias a elementos
    var openModalLink = document.getElementById('openModalLink');
    var closeModal = document.getElementById('closeModal');
    var modal = document.getElementById('myModal');

    // Agregar evento de clic al enlace para abrir el modal
    openModalLink.addEventListener('click', function () {
        modal.style.display = 'block';
    });

    // Agregar evento de clic al botón de cierre del modal
    closeModal.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    // Cerrar el modal si se hace clic fuera de él
    window.addEventListener('click', function (event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
});