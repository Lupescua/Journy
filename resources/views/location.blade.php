@extends('layout') @section('title') Journy @endsection @section('content')



<div class="jumbotron location_main_picture p-md-4 text-white rounded bg-dark">

  <div class="row">


<h1 class="col-md-5">Locations Gallery and Choice</h1>
  <p class="col-md-2">The Journey have many options of spending free time with Friendly Locals!</p>
  <p class="col-md-2">You can just click interested you photo and see what attractions are waiting for you and who can be your guide in chosen
    time.
  </p>
  <p class="col-md-2 p">Click on the images to see the details.</p>


  <form class="form-inline">
  <div class="form-group">
    <label for="exampleInputName2"></label>
    <input type="text" class="form-control" id="exampleInputName1" placeholder="Find Place or Activity!">
    <button type="submit" class="btn btn-outline-light">
  <i class="fa fa-search"></i>
   </button>
   <button class="btn btn-sm disabled"><i class="fa fa-plus"></i></button>
  </div>
  <div class="form-group">
    <label for="exampleInputName2"></label>
    <input type="email" class="form-control" id="exampleInputName2" placeholder="More">
    <button type="submit" class="btn btn-outline-light">
  <i class="fa fa-search"></i>
   </button>
   <button class="btn btn-sm disabled"><i class="fa fa-plus"></i></button>
  </div>
  <div class="form-group">
    <label for="exampleInputName2"></label>
    <input type="email" class="form-control" id="exampleInputName3" placeholder="More">
    <button type="submit" class="btn btn-outline-light">
  <i class="fa fa-search"></i>
   </button>
   <button class="btn btn-sm disabled"><i class="fa fa-plus"></i></button>
  </div>
  <div class="form-group">
    <label for="exampleInputName2"></label>
    <input type="email" class="form-control"  id="exampleInputName4" placeholder="More">
  </div>
  <button type="submit" class="btn btn-outline-light">
  <i class="fa fa-search"></i>
   </button>

</form>








  </div>

</div>

<div class="container">

  <div class="row">
    <div class="col-md-4 img_prop rounded bg-dark">
      <div class="thumbnail">

        <a href="" target="_blank">
          <img src="\img\harajuku.jpg" alt="harajuku" style="width:100%">
          <div class="caption">
            <p class="dupa">Shopping with Harajuku Girls in Tokio.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\locals_siberia.jpg" alt="siberia" style="width:100%">
          <div class="caption">
            <p class="dupa">Siberian trekking with Nikita and Sasha</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\newzealand.jpg" alt="New Zealand" style="width:100%">
          <div class="caption">
            <p class="dupa">New Zealand experience with Aria and Samuel</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\normand.jpg" alt="Normandie" style="width:100%">
          <div class="caption">
            <p class="dupa">Normandie Sightseeing with Antoine</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\bali_local.jpg" alt="Bali" style="width:100%">
          <div class="caption">
            <p class="dupa">Trip on Bali with Yaya</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\philipina.jpg" alt="Phillipina" style="width:100%">
          <div class="caption">
            <p class="dupa">Phillipina Heights with Coco</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\PolandMarket.jpg" alt="Agnieszka" style="width:100%">
          <div class="caption">
            <p class="dupa">Paths of finding Polish healthy food with Agnieszka</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 img_prop rounded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\camodia-bike.jpg" alt="Cambodia" style="width:100%">
          <div class="caption">
            <p>Cambodia from the scooter with Brad</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 img_prop raunded bg-dark">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="\img\mongolia_for_hipsters.jpg" alt="Mongolia" style="width:100%">
          <div class="caption">
            <p class="dupa">Mongolia for hipsters with Kris</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

@endsection