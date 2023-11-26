function openModal(imageSrc) {
    var modal = document.getElementById('myModal_f');
    var modalImage = document.getElementById('modalImage');

    modal.style.display = 'block';
    modalImage.src = imageSrc;
}

function closeModal() {
    var modal = document.getElementById('myModal_f');
    modal.style.display = 'none';
}

// Cerrar el modal si se hace clic fuera de él
window.addEventListener('click', function (event) {
    var modal = document.getElementById('myModal_f');
    if (event.target == modal) {
        closeModal();
    }
});