<div id="map" style="width: 100%; height: 100vh;"></div>
<Script>
const Pantai = L.layerGroup();
const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 15,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

const osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
	maxZoom: 15,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
});

const map = L.map('map', {
	center: [-1.2850784282008243, 118.72074730556047],
	zoom: 5,
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



const Lautan = L.layerGroup([]);

const openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
	maxZoom: 15,
	attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
});
layerControl.addBaseLayer(openTopoMap, 'OpenTopoMap');
layerControl.addOverlay(Lautan, 'Lautan');

// GEOJSON
$.getJSON("<?= base_url('provinsi/11.geojson') ?>", function(data){
	L.geoJson(data,{style : function(feature){return{}}}).bindPopup('ZONA : ').addTo(map);
});
$.getJSON("<?= base_url('provinsi/12.geojson') ?>", function(data){
	L.geoJson(data,{style : function(feature){return{color:'red',fillOpacity:0.5,}}}).bindPopup('ZONA : ').addTo(map);
});
$.getJSON("<?= base_url('provinsi/13.geojson') ?>", function(data){
	L.geoJson(data,{style : function(feature){return{color:'green',fillOpacity:0.5,}}}).bindPopup('ZONA :').addTo(map);
});

</Script>