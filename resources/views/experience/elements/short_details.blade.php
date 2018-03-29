<section class="short_details">
    <a>
        <img src="https://png.icons8.com/metro/1600/marker.png" alt="place marker" height="12"
             width="12">{{ $experience->location_id }}

    </a>
    <br>
    <a>
        <img src="https://www.shareicon.net/download/2015/08/10/83156_clock_512x512.png"
             alt="place marker" height="12" width="12">{{ $experience->duration }}
         hours total</a>
    <br>
    <a>
        <img src="https://cdn4.iconfinder.com/data/icons/user-interface-33/80/Menu-512.png"
             alt="place marker" height="12" width="12">{{ $experience->offered }}

    </a>
    <br>
    <a>
        <img src="https://image.flaticon.com/icons/png/512/103/103626.png" alt="place marker"
             height="12" width="12"> Offered in {{ $experience->language }}
        </a>
    <br>
</section>