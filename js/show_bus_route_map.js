var map, layer;
function init() {
    map = new OpenLayers.Map('map_display');
    layer = new OpenLayers.Layer.OSM();
    map.addLayer(layer);
    
    var points = new OpenLayers.Layer.Text( "My Points",
                    { location: "http://localhost/NetBeansProjects/DelhiTrip/route_map/db_bus_text.php",
                      projection: map.displayProjection
                    });
    map.addLayer(points);
    
    
    var lonLat = new OpenLayers.LonLat(77.230, 28.610).transform(
            new OpenLayers.Projection('EPSG:4326'),
            map.getProjectionObject()
            );
    var zoom = 13;

    map.setCenter(lonLat, zoom);
}

