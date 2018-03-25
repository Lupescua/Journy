@extends('layouts/booking')

@section('bookingcontent')

@section('header')
Booking & Contact
@endsection

<form action="" class="form-group booking-style">
  <!--  General -->
      <label for="name">Name</label></br>
      <input type="text" name="name" placeholder="First"><input type="text" name="name" placeholder="Last">
    <div class="controls">
      <label for="email">Email</label>
      <input type="text" id="email" class="form-control" name="email">
    </div>
    <div class="controls">
      <label for="phone">Phone</label>
      <input type="tel" id="phone" class="floatLabel" name="phone">
    </div>
    <div class="grid">
      <div class="col-2-3">
        <div class="controls">
          <label for="street">Street</label>
          <input type="text" id="street" class="floatLabel" name="street">
        </div>
      </div>
      <div class="col-1-3">
        <div class="controls">
          <label for="street-number">Number</label>
          <input type="number" id="street-number" class="floatLabel" name="street-number">
        </div>
      </div>
    </div>
    <div class="grid">
      <div class="col-2-3">
        <div class="controls">
          <label for="city">City</label>
          <input type="text" id="city" class="floatLabel" name="city">
        </div>
      </div>
      <div class="col-1-3">
        <div class="controls">
          <label for="post-code">Post Code</label>
          <input type="text" id="post-code" class="floatLabel" name="post-code">
        </div>
      </div>
    </div>
    <div class="controls">
      <label for="country">Country</label>
      <input type="text" id="country" class="floatLabel" name="country">
    </div>
</form>
@endsection