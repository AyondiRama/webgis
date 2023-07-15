<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Latitude</label>
			<input class="form-control" name="latitude" id="latitude">
        </div>
    </div>

	<div class="col-sm-6">
        <div class="form-group">
            <label>Longtitude</label>
			<input class="form-control" name="longtitude" id="longtitude">
        </div>

    </div>
	<div class="col-sm-6">
        <div class="form-group">
            <label>Posisi</label>
			<input class="form-control" name="posisi" id="posisi">
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

// GET-COORDINAT
var latInput = document.querySelector("[name=latitude]");
var longInput = document.querySelector("[name=longtitude]");
var posisi = document.querySelector("[name=posisi]");
var curLocation = [-1.2850784282008243, 118.72074730556047];
map.attributionControl.setPrefix(false);

var marker = new L.marker(curLocation,{
	draggable:true,
});

// Mengambil Coordinat saat marker di pindah/geser
marker.on('dragend',function(e){
	var position = marker.getLatLng();
	marker.setLatLng(position,{
	curlocation,
})
.bindPopup(position).update();
$("#Latitude").val(position.lat);
$("#Longitude").val(position.lng);
$("#Posisi").val(position.lat + ',' + position.lon)
});

// MENGAMBIL CORDINAT SAAT MAP DIKLIK
map.on('click', function(e){
	var lat = e.lating.lat;
	var lng = e.lating.Ing;
	if (!marker){
		marker = L.marker(e.lating).addTo(map);
	}
	else{
		marker.setLatlng(e.lating)
	}
	latInput.value = lat;
	longInput.value = lng;
});
map.addLayer(marker);
</Script>