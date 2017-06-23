@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Mapa</div>

                <div class="panel-body">
                    <div class="container">
                      
                      <div id="map-canvas" style="width:490px;height:400px"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Últimos Viajes</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Mapa</div>

                <div class="panel-body">
                    <div class="container">
                      
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection

@section('scripts')
    
    <script>
        var initialize = function() {
              map  = new google.maps.Map(document.getElementById('map-canvas'), {center:{lat:37.8199,lng:-122.4783},zoom:12});
              mark = new google.maps.Marker({position:{lat:37.8199, lng:-122.4783}, map:map});
              lineCoords.push(new google.maps.LatLng(37.8199, -122.4783));
            };
            window.initialize = initialize;

        var redraw = function(lat, lng) {

              map.setCenter({lat:lat, lng:lng, alt:0});
              mark.setPosition({lat:lat, lng:lng, alt:0});
              lineCoords.push(new google.maps.LatLng(lat, lng));
              var lineCoordinatesPath = new google.maps.Polyline({
                path: lineCoords,
                geodesic: true,
                strokeColor: '#2E10FF'
              });
              
              lineCoordinatesPath.setMap(map);
            };

       /* setInterval(function() {
              
            $.ajax({
                url: "/GetPosiciones",
                type: "POST",
                dataType: "json",
                data: {"action": "loadall", "id": id},
                success: function(data){
                    console.log(data);
                },
                error: function(error){
                     console.log("Error:");
                     console.log(error);
                }
            });

              }, 5000);*/
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAX5y7qNQ6tUANP_cI2Xtw0xw9xkQko0co&callback=initialize"></script>

@endsection