@extends('layout') @section('title') Journy @endsection @section('content')
<div class="jumbotron location_main_picture p-md-4 text-white rounded bg-dark">
  <div class="row">
    {{--<h1 class="col-md-5">Locations Gallery and Choice</h1>--}}
    {{--<p class="col-md-2">The Journey have many options of spending free time with Friendly Locals !</p>--}}
    {{--<p class="col-md-2">You can just click interested you photo and see what attractions are waiting for you and who can be your guide in chosen--}}
      {{--time. </p>--}}
    {{--<p class="col-md-2 p">Click on the images to see the details.</p>--}}
    <form class="form-inline" action="{{ action('LocationController@index') }}"
      method="get">
      <div class="form-group">
        <label for="exampleInputName2" ></label>
        <input type="text" name="continent" class="form-control form-rounded " id="exampleInputName1" placeholder="Place from homepage"
          value="{{ $continent }}">
      </div>

      @if(isset($continent))
      <span class="badge badge-secondary">
        <i class="fa fa-plus"></i>
      </span>
      <div class="form-group">
        <label for="exampleInputName2"></label>
        <input type="text" name="region" class="form-control form-rounded " id="exampleInputName2"
        placeholder="Region" value="{{ $region }}">
      </div>
      @endif

      @if(isset($region))
      <span class="badge badge-secondary">
        <i class="fa fa-plus"></i>
      </span>
      <div class="form-group">
        <label for="exampleInputName2"></label>
        <input type="text" name="activity" class="form-control form-rounded " id="exampleInputName3" placeholder="Additional activity"
          value="{{ $activity }}">
      </div>
      @endif

      <div class="form-group">
        <button type="submit" class="btn btn-outline-light">
          <i class="fa fa-search"></i>
        </button>
      </div>

      <div class="links">
      <a class="btn btn-secondary" href="#" role="button">Asian food</a>
      <a class="btn btn-secondary" href="#" role="button">Asia on bike</a>
      <a class="btn btn-secondary" href="#" role="button">Spa on Bali</a>
      <a class="btn btn-secondary" href="#" role="button">Bali trekking</a>
      <a class="btn btn-secondary" href="#" role="button">Grassland trekking</a>
      <a class="btn btn-secondary" href="#" role="button">Rest on Goa</a>
      <a class="btn btn-secondary" href="#" role="button">Secrets of India</a>
      <a class="btn btn-secondary" href="#" role="button">Day in Delhi</a>
      <a class="btn btn-secondary" href="#" role="button">Phillipina adventure</a>
      <a class="btn btn-secondary" href="#" role="button">Cambodia bikers</a>
      <a class="btn btn-secondary" href="#" role="button">Harajuku Japan</a>
      <a class="btn btn-secondary" href="#" role="button">Polish food</a>
      <a class="btn btn-secondary" href="#" role="button">New Zealand and island</a>
      <a class="btn btn-secondary" href="#" role="button">Siberian roots</a>
      <a class="btn btn-secondary" href="#" role="button">Scooter with Brad</a>
      <a class="btn btn-secondary" href="#" role="button">Trekking in Nepal</a>
      <a class="btn btn-secondary" href="#" role="button">Tea plantation on Java</a>
      <a class="btn btn-secondary" href="#" role="button">Hot Borneo</a>
      <a class="btn btn-secondary" href="#" role="button">Sri Lanka beaches</a>
      </div>

    </form>
  </div>
</div>
<div class="container">
  <div class="row">

  @foreach($experiences as $experience)
    <div class="col-md-2 img_prop rounded bg-dark ">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\{{ $experience->image }}" alt="{{ $experience->name }}" style="width:100%">
          <div class="caption">
            <p class="dx">{{ $experience->name }}</p>
          </div>
        </a>
      </div>
    </div>
  @endforeach
</div>

</div>

@endsection