@extends('../layout')

@section('title')
Booking
@endsection

@section('content')
    <div class="breadcrumb">
        <a href="{{route('bookingstep')}}" class="active">Review guest requirements</a>
        <a href="{{route('bookingstep',[2])}}"> Who is coming</a>
        <a href="{{route('bookingstep',[3])}}"> Order Confirmation</a>
    </div>
    <br />
    <br />


<div class="booking-style">
  <div class="d-flex column">


    @yield('bookingcontent')


    <div class="col-sm-6 col-md-6 details_box">
    <div class="d-flex column">
      <div class="col">
        <p class="bigger_text">
          Private room, good connection to the center
        </p>
        <p>
          Private room in Prague
        </p>
      </div>
      <div class="col booking_image">
        <img src="https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg" alt="Listing cover image">
      </div>
    </div>
    <hr>
        <p>
          1 guest
          Mar 15, 2018Mar 16, 2018
          €20.22 x 1 night
          €20.22
          Service fee

          €3.21
          Total (EUR)
          €23.43
          The quoted fees include any applicable exchange rate.
        </p>
    </div>
  </div>
</div>
<button type="submit" class="booking-style">Forward</button>

@yield('details')

@endsection