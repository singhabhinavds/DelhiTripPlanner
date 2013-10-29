$(document).ready(function() {
    
    document.getElementById('submit_bus_station_info').onclick = function() {
        document.getElementById('bus_station_info').submit();
    };
    
    document.getElementById('submit_bus_information').onclick = function() {
        document.getElementById('bus_information').submit();
    };
    
    document.getElementById('submit_journey').onclick = function(){
        document.getElementById('journey_form').submit();
    };
});