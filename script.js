document.addEventListener('DOMContentLoaded', function() {
  var botonEnviar = document.getElementById('enviarForm');
  var botonReset = document.getElementById('resetForm');

  if (botonEnviar) {
    botonEnviar.addEventListener('click', function(e) {
      e.preventDefault();
      preguntaEnviar();
    });
  }

  if (botonReset) {
    botonReset.addEventListener('click', function(e) {
      e.preventDefault();
      preguntaReset();
    });
  }
});

function preguntaEnviar() {
  if (confirm('¿Estás seguro de enviar este formulario?')) {
    document.getElementById('formulario').submit();
  }
}

function preguntaReset() {
  if (confirm('¿Estás seguro de resetear este formulario?')) {
    document.getElementById('formulario').reset();
  }
}
