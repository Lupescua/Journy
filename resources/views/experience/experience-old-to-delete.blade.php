@extends('layout')
@section('title')
!!your experiance
<-- In php I need to create a function to dump the info from the get-->
@endsection


@section('content')

<style>
    .container {
        width: 80vw;
        margin: auto;
        padding: 0;
    }

    .jumbotron {
        background: url('https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg');
        height: 80vh;
        margin: 0;
        text-align: center;
    }
</style>

    <div class="container">

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Long is the night we've been waiting for</h1>
                <!-- <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> -->
            </div>
        </div>


    <div class="row mb-2">
        <div class="tags col-md-7">
            <div class="card-columns">
                <div class="card">
                    <button type="reset"></button>
                </div>
                </div>
                <div class="card">
                    <button type="reset"></button>
                </div>
                <div class="card text-center">
                    <button type="reset"></button>
                </div>
                <div class="card">
                    <button type="reset"></button>
                </div>
            </div>
        </div>
        <div id="map" style="width:40vw;height:40vh;" class="col-md-3">

        </div>

    </div>
    </div>
    <script>
// function myMap() {
//   var mapCanvas = document.getElementById("map");
//   var mapOptions = {
//     center: new google.maps.LatLng(50.075, 14.43), zoom: 10
//   };
//   var map = new google.maps.Map(mapCanvas, mapOptions);
// }
// </script>
  <script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 50.075, lng: 14.43},
          zoom: 12
        });
      }

    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8_KdphsI_6UAwKW3DI8mhsMs8oQQg8MU&callback=initMap"></script>

<style>
#marketing {
    text-align: center;
    font-size: 18px;
    padding: 4em 0 2em 0;
}

</style>

<div id="marketing">
        <p>Smaller cities offer a warmer and a more genuine experience than the hustle and bustle of the big ones. We'll show you wonderful insights into unexpected places!</p>

        <form class="form-inline" role="form" action="http://www.123contactform.com/form-699358/Journey-To-Timisoara" method="post">
            <div class="form-group">
                <label class="sr-only" for="email-main">Email address</label>
                <input type="email" class="form-control input-lg" id="email-main" name="control5375894" placeholder="Type your email" required>
            </div>
            <input type="hidden" name="action" value="verify">
            <input type="hidden" name="special_autoresponder" id="special_autoresponder" value="">
            <input type="hidden" name="language" value="en"><input type="hidden" name="languageChanged" value="no">
            <button type="submit" class="btn btn-default btn-success btn-lg">Reserve my seat!</button>
        </form>

    </div>











    @endsection