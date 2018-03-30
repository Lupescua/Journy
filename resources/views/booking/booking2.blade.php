@extends('layouts/booking')

@section('bookingcontent')

@section('header')
Booking & Contact
@endsection


<form action="">
  <div class="form-group">
  <!--  General -->
      <label for="name">Name</label></br>
      <input type="text" name="name" class="form-control" placeholder="First">
      <input type="text" name="name" class="form-control" placeholder="Last">

      <label for="email">E-mail</label>
      <input type="text" id="email" class="form-control" name="email" placeholder="E-mail">

      <label for="phone">Phone number</label>
      <input type="tel" id="phone" class="form-control" name="phone" placeholder="Phone">


      <label for="street">Address</label>
      <input type="text" class="form-control" placeholder="Street address">
      <input type="text" class="form-control" placeholder="Street address line 2">
      <input type="text" class="form-control" placeholder="City">
      <input type="text" class="form-control" placeholder="Region">
      <input type="text" class="form-control" placeholder="Postal / Zip Code">
      <input type="text" class="form-control" placeholder="Country">

      <label for="comments">Comments</label>
      <textarea class="form-control" rows="3" placeholder="Your comments come here.."></textarea>



  </div>
</form>
<a href="{{route('bookingstep',[3])}}"><button type="submit" class="pull-right">Forward</button></a>
@endsection