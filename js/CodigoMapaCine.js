

function cargarMapa(coord, zoom) {
    //limpiar el cotenedor de mapa
    $("#miMapa").html(`
    
    <div id='mapaProvincia' style='width: 100%; height: 400px'></div>
    `);

    //generando la vista del mapa    latitud, longitud zoom 
    var mapa = L.map('mapaProvincia').setView(coord, zoom);

    //crear el layer
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoicnNlcXVlaXJhIiwiYSI6ImNraDByOWZrdjB6ejYyd3BncjM5a2s5ZWgifQ.BKZKvJugnbvE3Pi8PeP4Jw'
    }).addTo(mapa);

    

}

cargarMapa([9.934739,-84.087502],8);