document.addEventListener('DOMContentLoaded', function () {
  const departamentoSelect = document.getElementById('departamento');
  const ciudadSelect = document.getElementById('ciudad');

  departamentoSelect.addEventListener('change', function () {
    let departamentoId = this.value;

    if (departamentoId) {
      ciudadSelect.disabled = true;
      ciudadSelect.innerHTML = '<option value="" disabled selected>Cargando ciudades...</option>';

      if (departamentoId > 0 && departamentoId < 10) {
        departamentoId = '0' + departamentoId;
      }

      departamentoId = String(departamentoId);

      // Peiticon api para traer las ciudades
      fetch(`http://127.0.0.1:8000/api/ciudades/departamento/${departamentoId}`)
        .then(response => response.json())
        .then(ciudades => {
          ciudadSelect.innerHTML = '<option value="" hidden>Select city</option>';
          ciudades.forEach(ciudad => {
            const option = document.createElement('option');
            option.value = ciudad.id_ciudad;
            option.textContent = ciudad.nombre_ciudad;
            ciudadSelect.appendChild(option);
          });
          ciudadSelect.disabled = false;
        })
        .catch(error => {
          console.error('Error loading cities:', error);
          ciudadSelect.innerHTML = '<option value="" disabled selected>Error loading cities</option>';
        });
    } else {
      ciudadSelect.innerHTML = '<option value="" disabled selected>Select city</option>';
      ciudadSelect.disabled = true;
    }
  });
});