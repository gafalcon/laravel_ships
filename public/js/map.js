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


  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'listDay,listWeek,month'
      },

      // customize the button names,
      // otherwise they'd all just say "list"
      views: {
        listDay: { buttonText: 'list day' },
        listWeek: { buttonText: 'list week' }
      },

      defaultView: 'listWeek',
        /* defaultDate: '2018-03-12',*/
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'Evento todo el día',
          start: '2018-03-14'
        },
        {
          title: 'Evento',
          start: '2018-03-07',
          end: '2018-03-11'
        },
        {
          id: 999,
          title: 'Llegada de embarcación',
          start: '2018-03-16T16:00:00'
        },
        {
          title: 'Conferencia',
          start: '2018-03-11',
          end: '2018-03-13'
        },
        {
          title: 'Reunión',
          start: '2018-03-12T10:30:00',
          end: '2018-03-12T12:30:00'
        },
        {
          title: 'Almuerzo',
          start: '2018-03-12T12:00:00'
        },
        {
          title: 'Llegada de embarcación',
          start: '2018-03-12T14:30:00'
        },
        {
          title: 'Pesca',
          start: '2018-03-12T17:30:00'
        },
        {
          title: 'Salida de embarcación',
          start: '2018-03-13T07:00:00'
        },
        {
          title: 'Nueva embarcación',
          url: 'http://google.com/',
          start: '2018-03-15'
        }
      ]
    });

  });
