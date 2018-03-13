@extends ('main_template')

@section ('content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>
    <h2>Inicio</h2>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <div id="mapid"></div>
            </div>
        </div>
    </div>
@endsection

@section ('extras_javascript')
 <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiuYijvHYpLW1WB_XRUPGqPbn3ybwQg5Q&callback=initMap"
  type="text/javascript"></script>
  <script src="/js/gmaps.js"></script>
  <script src="/js/map.js"></script>
@endsection
