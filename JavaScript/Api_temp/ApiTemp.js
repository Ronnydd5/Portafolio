//San Cristobal
const lat = 7.77;
const lon = -72.22;

//Socopo
/* const lat = 8.23;
const lon = -70.82; */

// Obtener el clima
fetch(`https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}&current=temperature_2m,wind_speed_10m`)
    .then(res => res.json())
    .then(data => {
        const temperatura = document.getElementById('temp');
        const viento = document.getElementById('viento');

        temperatura.textContent = data.current.temperature_2m;
        viento.textContent = data.current.wind_speed_10m;
    })
    .catch(err => console.error('Error al obtener clima:', err));

    // Obtener el nombre de la ciudad
    fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`)
    .then(res => res.json())
    .then(info => {
        const ciudad = document.getElementById('ciudad');
        ciudad.textContent = info.address.city || info.address.town || info.address.village || "Ubicación desconocida";
    })
    .catch(err => console.error('Error al obtener nombre de la ciudad:', err));


