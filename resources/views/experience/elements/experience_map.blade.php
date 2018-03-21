<div id="map" style="height:400px; "></div>

<script>
    function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: {
                lat: 50.0745,
                lng: 14.431
            }
        });

        if (navigator.geolocation) { // we check if the browser supports geolocation
            navigator.geolocation.getCurrentPosition(function (location) {
                // stuff to do with the location

                console.log(location);

                var marker = new google.maps.Marker({
                    position: {
                        lat: 50.0745,
                        lng: 14.431
                        // lat: location.coords.latitude,
                        // lng: location.coords.longitude
                    },
                    map: map
                });


            }, function (error) {
                // stuff to do with an error
            });
        }

    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXQ_qbFwunNmKz7WW9jUY8jV3eUao3uhI&callback=initMap"></script>
