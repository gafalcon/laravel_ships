@extends ('main_template')

@section ('content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h2>Pesca reciente</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col">Fecha</th>
                            <th class="col">Embarcación</th>
                            <th class="col">Cantidad (t)</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>14/03/2018</td>
                            <td>Emb 1</td>
                            <td>122 t</td>
                            <td><a href="">Ver</a></td>
                        </tr>
                        <tr>
                            <td>13/03/2018</td>
                            <td>Emb 1</td>
                            <td>142 t</td>
                            <td><a href="">Ver</a></td>
                        </tr>
                        <tr>
                            <td>12/03/2018</td>
                            <td>Emb 2</td>
                            <td>97 t</td>
                            <td><a href="">Ver</a></td>
                        </tr>
                        <tr>
                            <td>12/03/2018</td>
                            <td>Emb 3</td>
                            <td>145 t</td>
                            <td><a href="">Ver</a></td>
                        </tr>
                        <tr>
                            <td>11/03/2018</td>
                            <td>Emb 1</td>
                            <td>12 t</td>
                            <td><a href="">Ver</a></td>
                        </tr>
                        <tr>
                            <td>11/03/2018</td>
                            <td>Emb 1</td>
                            <td>12 t</td>
                            <td><a href="">Ver</a></td>
                        </tr>
                        <tr>
                            <td>11/03/2018</td>
                            <td>Emb 1</td>
                            <td>12 t</td>
                            <td><a href="">Ver</a></td>
                        </tr>
                        <tr>
                            <td>11/03/2018</td>
                            <td>Emb 1</td>
                            <td>12 t</td>
                            <td><a href="">Ver</a></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-lg-6">
                <h2>Embarcaciones en pesca</h2>
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
