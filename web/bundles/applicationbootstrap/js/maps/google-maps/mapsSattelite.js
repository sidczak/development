//
// Dynamically load  OpenStreetMap Plugin
// homepage: http://openlayers.org
//
function LoadOpenLayersScript(callback){
	if (!$.fn.OpenLayers){
		$.getScript('http://www.openlayers.org/api/OpenLayers.js', callback);
	}
	else {
		if (callback && typeof(callback) === "function") {
			callback();
		}
	}
}
//
// Create OpenLayers map with required options and return map as object
//
function drawMap(lon, lat, elem, layers) {
	var LayersArray = [];
	// Map initialization
	var map = new OpenLayers.Map(elem);
	// Add layers on map
	map.addLayers(layers);
	// WGS 1984 projection
	var epsg4326 =  new OpenLayers.Projection("EPSG:4326");
	//The map projection (Spherical Mercator)
	var projectTo = map.getProjectionObject();
	// Max zoom = 17
	var zoom=10;
	map.zoomToMaxExtent();
	// Set longitude/latitude
	var lonlat = new OpenLayers.LonLat(lon, lat);
	map.setCenter(lonlat.transform(epsg4326, projectTo), zoom);
	var layerGuest = new OpenLayers.Layer.Vector("You are here");
	// Define markers as "features" of the vector layer:
	var guestMarker = new OpenLayers.Feature.Vector(
		new OpenLayers.Geometry.Point(lon, lat).transform(epsg4326, projectTo)
	);
	layerGuest.addFeatures(guestMarker);
	LayersArray.push(layerGuest);
	map.addLayers(LayersArray);
	// If map layers > 1 then show checker
	if (layers.length > 1){
		map.addControl(new OpenLayers.Control.LayerSwitcher({'ascending':true}));
	}
	// Link to current position
	map.addControl(new OpenLayers.Control.Permalink());
	// Show current mouse coords
	map.addControl(new OpenLayers.Control.MousePosition({ displayProjection: epsg4326 }));
	return map;
}
/*-------------------------------------------
Function for OpenStreetMap page (maps.html)
---------------------------------------------*/
//
//Load GeoIP JSON data and draw 3 maps
//
function LoadTestMap(){
$.getJSON("http://www.telize.com/geoip?callback=?",
	function(json) {
		var osmap = new OpenLayers.Layer.OSM("OpenStreetMap");//создание слоя карты
		var googlestreets = new OpenLayers.Layer.Google("Google Streets", {numZoomLevels: 22,visibility: false});
		var googlesattelite = new OpenLayers.Layer.Google( "Google Sattelite", {type: google.maps.MapTypeId.SATELLITE, numZoomLevels: 22});
		var map1_layers = [googlestreets,osmap, googlesattelite];
		// Create map in element with ID - map-1
		var map1 = drawMap(json.longitude, json.latitude, "map-1", map1_layers);
		$("#map-1").resize(function(){ setTimeout(map1.updateSize(), 500); });
		// Create map in element with ID - map-2
		var osmap1 = new OpenLayers.Layer.OSM("OpenStreetMap");//создание слоя карты
		var map2_layers = [osmap1];
		var map2 = drawMap(json.longitude, json.latitude, "map-2", map2_layers);
		$("#map-2").resize(function(){ setTimeout(map2.updateSize(), 500); });
		// Create map in element with ID - map-3
		var sattelite = new OpenLayers.Layer.Google( "Google Sattelite", {type: google.maps.MapTypeId.SATELLITE, numZoomLevels: 22});
		var map3_layers = [sattelite];
		var map3 = drawMap(json.longitude, json.latitude, "map-3", map3_layers);
		$("#map-3").resize(function(){ setTimeout(map3.updateSize(), 500); });
	}
);
}