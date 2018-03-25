@extends('layout') @section('title') Journy @endsection @section('content')
<div class="jumbotron location_main_picture p-md-4 text-white rounded bg-dark">
  <div class="row">
    <h1 class="col-md-5">Locations Gallery and Choice</h1>
    <p class="col-md-2">The Journey have many options of spending free time with Friendly Locals !</p>
    <p class="col-md-2">You can just click interested you photo and see what attractions are waiting for you and who can be your guide in chosen
      time. </p>
    <p class="col-md-2 p">Click on the images to see the details.</p>
    <form class="form-inline" action="{{ action('LocationController@index') }}"
      method="get">
      <div class="form-group">
        <label for="exampleInputName2"></label>
        <input type="text" name="search" class="form-rounded" id="exampleInputName1" placeholder="Place from homepage"
          value="{{ $search }}">
      </div>

      @if(isset($search))
      <span class="badge badge-secondary">
        <i class="fa fa-plus"></i>
      </span>
      <div class="form-group">
        <label for="exampleInputName2"></label>
        <input type="text" name="filter1" class="form-rounded" id="exampleInputName2" placeholder="Activity" value="{{ $filter1 }}">
      </div>
      @endif

      @if(isset($filter1))
      <span class="badge badge-secondary">
        <i class="fa fa-plus"></i>
      </span>
      <div class="form-group">
        <label for="exampleInputName2"></label>
        <input type="text" name="filter2" class="form-rounded" id="exampleInputName3" placeholder="Additional activity"
          value="{{ $filter2 }}">
      </div>
      @endif

      @if(isset($filter2))
      <span class="badge badge-secondary">
        <i class="fa fa-plus"></i>
      </span>
      <div class="form-group">
        <label for="exampleInputName2"></label>
        <input type="text" name="filter3" class="form-rounded" id="exampleInputName4" placeholder="More activities"
          value="{{ $filter3 }}">
      </div
      >@endif
      <div class="form-group">
        <button type="submit" class="btn btn-outline-light">
          <i class="fa fa-search"></i>
        </button>
      </div>
      <!-- <a class="btn btn-secondary" href="#" role="button">Link</a>
      <br>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a>
      <a class="btn btn-secondary" href="#" role="button">Link</a> -->


    </form>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-2 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\harajuku.jpg" alt="harajuku" style="width:100%">
          <div class="caption">
            <p class="dx">Shopping with Harajuku Girls in Tokio.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-2 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\harajuku.jpg" alt="harajuku" style="width:100%">
          <div class="caption">
            <p class="dx">Shopping with Harajuku Girls in Tokio.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-2 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\harajuku.jpg" alt="harajuku" style="width:100%">
          <div class="caption">
            <p class="dx">Shopping with Harajuku Girls in Tokio.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-2 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\harajuku.jpg" alt="harajuku" style="width:100%">
          <div class="caption">
            <p class="dx">Shopping with Harajuku Girls in Tokio.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-2 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\harajuku.jpg" alt="harajuku" style="width:100%">
          <div class="caption">
            <p class="dx">Shopping with Harajuku Girls in Tokio.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-2 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\harajuku.jpg" alt="harajuku" style="width:100%">
          <div class="caption">
            <p class="dx">Shopping with Harajuku Girls in Tokio.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-2 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\harajuku.jpg" alt="harajuku" style="width:100%">
          <div class="caption">
            <p class="dx">Shopping with Harajuku Girls in Tokio.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-2 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\harajuku.jpg" alt="harajuku" style="width:100%">
          <div class="caption">
            <p class="dx">Shopping with Harajuku Girls in Tokio.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-2 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\harajuku.jpg" alt="harajuku" style="width:100%">
          <div class="caption">
            <p class="dx">Shopping with Harajuku Girls in Tokio.</p>
          </div>
        </a>
      </div>
    </div>
</div>

<div class="row">
  <div class="col-md-2 img_prop rounded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\normand.jpg" alt="Normandie" style="width:100%">
        <div class="caption">
          <p class="dx">Normandie Sightseeing with Antoine</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-2 img_prop rounded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\bali_local.jpg" alt="Bali" style="width:100%">
        <div class="caption">
          <p class="dx">Trip on Bali with Yaya</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-2 img_prop rounded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\philipina.jpg" alt="Phillipina" style="width:100%">
        <div class="caption">
          <p class="dx">Phillipina Heights with Coco</p>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-2 img_prop rounded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\PolandMarket.jpg" alt="Agnieszka" style="width:100%">
        <div class="caption">
          <p class="dx">Paths of finding Polish healthy food with Agnieszka</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-2 img_prop rounded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\camodia-bike.jpg" alt="Cambodia" style="width:100%">
        <div class="caption">
          <p>Cambodia from the scooter with Brad</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-2 img_prop raunded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\mongolia_for_hipsters.jpg" alt="Mongolia" style="width:100%">
        <div class="caption">
          <p class="dx">Mongolia for hipsters with Kris</p>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-2 img_prop rounded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\harajuku.jpg" alt="harajuku" style="width:100%">
        <div class="caption">
          <p class="dx">Shopping with Harajuku Girls in Tokio.</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-2 img_prop rounded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\locals_siberia.jpg" alt="siberia" style="width:100%">
        <div class="caption">
          <p class="dx">Siberian trekking with Nikita and Sasha</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-2 img_prop rounded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\newzealand.jpg" alt="New Zealand" style="width:100%">
        <div class="caption">
          <p class="dx">New Zealand experience with Aria and Samuel</p>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-2 img_prop rounded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\normand.jpg" alt="Normandie" style="width:100%">
        <div class="caption">
          <p class="dx">Normandie Sightseeing with Antoine</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-2 img_prop rounded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\bali_local.jpg" alt="Bali" style="width:100%">
        <div class="caption">
          <p class="dx">Trip on Bali with Yaya</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-2 img_prop rounded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\philipina.jpg" alt="Phillipina" style="width:100%">
        <div class="caption">
          <p class="dx">Phillipina Heights with Coco</p>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-2 img_prop rounded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\PolandMarket.jpg" alt="Agnieszka" style="width:100%">
        <div class="caption">
          <p class="dx">Paths of finding Polish healthy food with Agnieszka</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-2 img_prop rounded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\camodia-bike.jpg" alt="Cambodia" style="width:100%">
        <div class="caption">
          <p>Cambodia from the scooter with Brad</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-2 img_prop raunded bg-dark">
    <div class="thumbnail">
      <a href="" target="_blank">
        <img src="\img\mongolia_for_hipsters.jpg" alt="Mongolia" style="width:100%">
        <div class="caption">
          <p class="dx">Mongolia for hipsters with Kris</p>
        </div>
      </a>
    </div>
  </div>
</div>
</div>

@endsection