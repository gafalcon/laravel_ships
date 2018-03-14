//var mymap = L.map('mapid').setView([51.505, -0.09], 13);

var initMap = function(){
    console.log("init map")
    var map = new GMaps({
        el: '#mapid',
        lat: -2.17,
        lng: -81.02,
        zoom: 10
    });

    map.addMarker({
        lat: -2.17,
        lng: -81.02,
        title: 'Embarcación 1',
        click: function(e) {
            alert('You clicked in this marker');
        }
    });
}
