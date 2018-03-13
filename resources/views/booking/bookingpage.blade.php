@extends('layouts/booking') @section('content')
<div class="d-flex column">
  <div class="col-sm-6 col-md-6">
    <h1>
      <strong> Review Guest Requirements </strong>
    </h1>

    <h3> Who can come </h3>

    <p> Guest ages 18 and up can attend. Parents may also bring children under 2 years old for free charges. If you bring a guest
      that's under 18 it is your responsability to make sure the activities they participate in are age-appropriate.</p>
  </div>
  <div class="col-sm-6 col-md-6">
    <p> Guest ages 18 and up can attend. Parents may also bring children under 2 years old for free charges. If you bring a guest
      that's under 18 it is your responsability to make sure the activities they participate in are age-appropriate.</p>
  </div>
</div>


<form class="form-group" action="" method="get">
  <h2 class="heading">Details</h2>
  <div class="grid">
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">
        <label for="arrive" class="label-date">
          <i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
      </div>
    </div>
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
        <label for="depart" class="label-date">
          <i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>
      </div>
    </div>
  </div>
  <div class="grid">
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel">
          <option value="blank"></option>
          <option value="1">1</option>
          <option value="2" selected>2</option>
          <option value="3">3</option>
        </select>
        <label for="fruit">
          <i class="fa fa-male"></i>&nbsp;&nbsp;People</label>
      </div>
    </div>
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel">
          <option value="blank"></option>
          <option value="deluxe" selected>Yes</option>
          <option value="Zuri-zimmer">No</option>
        </select>
        <label for="fruit">Equipement Provided</label>
      </div>
    </div>
  </div>
</form>

<script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript" type="text/javascript"></script>
@endsection