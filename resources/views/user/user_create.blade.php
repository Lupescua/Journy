@extends('layout') @section('title') Journy @endsection @section('content')
    <div class="container">

        <form method="post" action="{{ action('UserController@store') }}">
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-8 mb-3">
                    <label for="validationDefault01">Name</label>
                    <input name="name" type="text" class="form-control" id="validationDefault01"
                           placeholder="First name" value="Mark Zuckerberg" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefaultEmail">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            {{--<span class="input-group-text" id="inputGroupPrepend2">@</span>--}}
                        </div>
                        <input name="email" type="email" class="form-control" id="validationDefaultEmail"
                               placeholder="Email" aria-describedby="inputGroupPrepend2" value="gmail@chuck.norris"
                               required >
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Country</label>
                    <input name="adress_country" type="text" class="form-control" id="validationDefault05"
                           placeholder="Country" >
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">City</label>
                    <input name="adress_city" type="text" class="form-control" id="validationDefault03"
                           placeholder="City" >
                </div>
                <div class="col-md-3 mb-3">
                    <label for="inputState">State</label>
                    <select name="adress_state" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-9 mb-3">
                    <label for="inputAddress">Home Address</label>
                    <input name="adress_street" type="text" class="form-control" id="validationDefault05"
                           placeholder="Adress" >
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Zip</label>
                    <input name="adress_zip" type="text" class="form-control" id="validationDefault05" placeholder="Zip"
                           >
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" >
                    <label name="agree_to_terms" class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                    </label>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Prefered Language</label>
                    <select name="prefered_language" class="custom-select mr-sm-2" id="inlineFormCustomSelect" >
                        <option selected>Choose...</option>
                        <option value="1">English</option>
                        <option value="2">French</option>
                        <option value="3">Czech</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Prefered Description</label>
                    <small id="emailHelp" class="form-text text-muted">Press Ctrl/Cmd to select multiple.</small>
                    <select name="user_tags" class="selectpicker" multiple >
                        <optgroup label="Condiments" data-max-options="2">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </optgroup>
                        <optgroup label="Breads" data-max-options="2">
                            <option>Plain</option>
                            <option>Steamed</option>
                            <option>Toasted</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>

    </div>
@endsection