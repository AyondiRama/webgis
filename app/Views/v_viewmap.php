<div id="map" style="width: 100%; height: 100vh;"></div>
<Script>
    const map = L.map('map').setView([-8.41640873084435, 112.71000692512006], 20);

const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 15,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
</Script>