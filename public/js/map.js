//var mymap = L.map('mapid').setView([51.505, -0.09], 13);

var initMap = function(){
    console.log("init map")
    var map = new GMaps({
        el: '#mapid',
        lat: -12.043333,
        lng: -77.028333
    });
}
