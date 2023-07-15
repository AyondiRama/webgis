      <div class="row">
      <div class="form-group">
        <div class="col-sm-12">
            <label>Posisi</label>
			<input class="form-control" name="posisi" id="posisi">
        </div>
    </div>
    </div>
	<br>
	    <div id="map" style="width: 100%; height: 100vh;"></div>


<Script>
const Pantai = L.layerGroup();
const PantaiTamban = L.marker([-8.417039219462135, 112.71031461283128]).bindPopup('Pantai Tamban').addTo(Pantai);
const PantaiTambanIndah = L.marker([-8.416865291670101, 112.7123585383414]).bindPopup('Pantai Tamban Indah').addTo(Pantai);
const PemancinganLautPondokUrang = L.marker([-8.425054070230969, 112.69998143422364]).bindPopup('Pemancingan Laut Pondok Urang').addTo(Pantai);
const PantaiSendiki = L.marker([-8.415653988725545, 112.72629284226242]).bindPopup('Pantai Sendiki').addTo(Pantai);    
const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 20,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

const osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
	maxZoom: 20,
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
	maxZoom: 20,
	attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
});
layerControl.addBaseLayer(openTopoMap, 'OpenTopoMap');
layerControl.addOverlay(Lautan, 'Lautan');

if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(showPosition);
} else {
  alert('GEOLOCATION TIDAK SUPPORT PADA BROWSER ANDA');
}

function showPosition(position) {
  document.getElementById("posisi").value = position.coords.latitude +"," + position.coords.longitude;
}
</Script>