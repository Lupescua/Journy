@extends('layouts/booking') @section('bookingcontent') @section('header') Payment Details @endsection

<div class="container">
    <div class="row">
        <!-- You can make it whatever width you want. I'm making it full width
on <= small devices and 4/12 page width on >= medium devices -->
        <div class="col-sm-8 col-md-8 col-lg-8">
            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table">
                    <div class="row display-tr">
                        <div class="display-td">
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">

                        </div>
                    </div>
                </div>
                <br />


                <form>

                <div class="form-group row">

                        <label for="CREDIT CARD NUMBER">CREDIT CARD NUMBER</label>
                        <input type="text" class="form-control" placeholder="0000 0000 0000 0000">
                    </div>
                    <div class="form-group row">
                        <div class="col col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <label for="inputEmail4">EXP DATE</label>
                            <input type="text" class="form-control" placeholder="MM/YY">
                        </div>
                        <div class="col col-lg-4 col-md-8 col-sm-8 col-xs-12">
                            <label for="CD CODE">CV CODE</label>
                            <input type="text" class="form-control" placeholder="000">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail4">COUPON CODE</label>
                        <input type="text" class="form-control" placeholder="0000000">
                    </div>


                </form>
                <a href="/new_user"><button type="submit" class="pull-right">Submit</button></a>
                <!-- <hr>
    <form role="form" id="payment-form">
                        <div class="form-group row">
                            <div class="col-xs-12">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required
                                            autofocus />
                                        <span class="input-group-addon">
                                            <i class="fa fa-credit-card"></i>
                                        </span>
                                    </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry">
                                        <span class="hidden-xs">EXPIRATION</span>
                                        <span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="tel" class="controls" name="cardExpiry" placeholder="MM / YY" autocomplete="cc-exp" required />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input type="tel" class="controls" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">COUPON CODE</label>
                                    <input type="text" class="controls" name="couponCode" />
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form> -->

            </div>
            <!-- CREDIT CARD FORM ENDS HERE -->
        </div>
    </div>
</div>

@endsection