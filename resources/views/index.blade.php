@extends ('main_template')

@section ('content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css" rel="stylesheet"/> 


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
        <br/>
        <div class="row">
            <div class="col-lg-6">
                <h2>Eventos</h2>
                <div id='calendar'></div>
            </div>
            <div class="col-lg-6">
                <h2>Gráfico de pesca</h2>
                <canvas id="myChart" width="400" height="300"></canvas>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio"],
        datasets: [{
            label: '# de Toneladas de pesca por tiempo',
            data: [420, 190, 303, 502, 200, 301],
            borderWidth: 1,
            borderColor: 'blue',
            backgroundColor: 'rgba(0,0,255,.2)'
        }]

    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
}); 
</script>
@endsection
