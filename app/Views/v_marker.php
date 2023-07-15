<div id="map" style="width: 100%; height: 100vh;"></div>
<Script>
const Perairan = L.layerGroup();
const PantaiTamban = L.marker([-8.417039219462135, 112.71031461283128]).bindPopup('Pantai Tamban').addTo(Perairan);
const PantaiTambanIndah = L.marker([-8.416865291670101, 112.7123585383414]).bindPopup('Pantai Tamban Indah').addTo(Perairan);
const PemancinganLautPondokUrang = L.marker([-8.425054070230969, 112.69998143422364]).bindPopup('Pemancingan Laut Pondok Urang').addTo(Perairan);
const PantaiSendiki = L.marker([-8.415653988725545, 112.72629284226242]).bindPopup('Pantai Sendiki').addTo(Perairan);
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
	layers: [osm, Perairan]
});

const baseLayers = {
	'OpenStreetMap': osm,
	'OpenStreetMap.HOT': osmHOT
};

const overlays = {
	'Perairan': Perairan
};

const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

const PantaiWediAbang = L.marker([-8.40989096619008, 112.75441987585607]).bindPopup('Pantai Wedi Abang');
const PantaiSendangbiru = L.marker([-8.432107464217484, 112.68418111514426]).bindPopup('Pantai Sendangbiru');

const lautan = L.layerGroup([PantaiWediAbang, PantaiSendangbiru]);

const openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
	maxZoom: 15,
	attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
});
layerControl.addBaseLayer(openTopoMap, 'OpenTopoMap');
layerControl.addOverlay(lautan, 'Lautan');


// MEMBUAT MARKER
//const PantaiGebang=L.marker([-8.43994250742022, 112.68145391771088]).bindPopup("<b> LOKASI : Pantai Gebang </b><br>" + "Alamat : HM7P+GWG, Pulau Sempu, Hutan, Tambakrejo, Kec. Sumbermanjing Wetan, Kabupaten Malang, Jawa Timur 65176 <br>")
//	.addTo(map);
//L.marker([-8.438664399536934, 112.67773583738888]).addTo(map);
//L.marker([-8.441924870461543, 112.6749670541704]).addTo(map);
//L.marker([-8.443489886724958, 112.67130171257638]).addTo(map);
//L.marker([-8.43994250742022, 112.68145391771088]).addTo(map);
</Script>