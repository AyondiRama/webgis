<div id="map" style="width: 100%; height: 100vh;"></div>
<Script>
const Pantai = L.layerGroup();
const PantaiTamban = L.marker([-8.417039219462135, 112.71031461283128]).bindPopup('Pantai Tamban').addTo(Pantai);
const PantaiTambanIndah = L.marker([-8.416865291670101, 112.7123585383414]).bindPopup('Pantai Tamban Indah').addTo(Pantai);
const PemancinganLautPondokUrang = L.marker([-8.425054070230969, 112.69998143422364]).bindPopup('Pemancingan Laut Pondok Urang').addTo(Pantai);
const PantaiSendiki = L.marker([-8.415653988725545, 112.72629284226242]).bindPopup('Pantai Sendiki').addTo(Pantai);
const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 15,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

const osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
	maxZoom: 15,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
});

const map = L.map('map', {
	center: [-8.41640873084435, 112.71000692512006],
	zoom: 15,
	layers: [osm, Pantai]
});

const baseLayers = {
	'OpenStreetMap': osm,
	'OpenStreetMap.HOT': osmHOT
};

const overlays = {
	'Pantai': Pantai
};

const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

const PantaiWediAbang = L.marker([-8.40989096619008, 112.75441987585607]).bindPopup('Pantai Wedi Abang');
const PantaiSendangbiru = L.marker([-8.432107464217484, 112.68418111514426]).bindPopup('Pantai Sendangbiru');

const Lautan = L.layerGroup([PantaiWediAbang, PantaiSendangbiru]);

const openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
	maxZoom: 20,
	attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
});
layerControl.addBaseLayer(openTopoMap, 'OpenTopoMap');
layerControl.addOverlay(Lautan, 'Lautan');


L.circle([-8.442885356686858, 112.69847518540115],{radius:1000,fillOpacity:0.5}).bindPopup("AREA :").addTo(map);
L.circle([-8.446405847972422, 112.65125544650596],{radius:1000,color:'blue',fillColor:'red'}).addTo(map);
L.circle([-8.413288440767321, 112.75138657352029],{radius:1000,color:'red'}).addTo(map);
</Script>