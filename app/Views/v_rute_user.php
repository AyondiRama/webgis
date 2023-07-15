<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>JARAK(*METER)</label>
			<input class="form-control" name="jarak" id="jarak">
        </div>
    </div>
    <div class="col-sm-12">
		<br>
	    <div id="map" style="width: 100%; height: 100vh;">
	</div>
	</div>
</div>

<Script>
const Pantai = L.layerGroup();
const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 20,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

const osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
	maxZoom: 20,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
});

const map = L.map('map', {
	center: [-7.966737043533969, 112.63074772476197],
	zoom: 10,
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
	maxZoom: 20,
	attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
});
layerControl.addBaseLayer(openTopoMap, 'OpenTopoMap');
layerControl.addOverlay(Lautan, 'Lautan');

var routingControl = L.Routing.control({
  waypoints: [
    L.latLng(-8.4136059920589, 112.72717916540158),// LOKASI ASAL
    L.latLng(-8.383608696739769, 112.76722224458388)// LOKASI TUJUAN
  ]
}).addTo(map);
//MENGAMBILJARAK
routingControl.on('routesfound',function(e){
    var routes = e.routes;
    var summary =routes[0].summary;
    var totalDistance =summary.totalDistance;
    // Kirim nilai jaraknya ke elemen input
    document.getElementById('jarak').value = totalDistance;
});
</Script>