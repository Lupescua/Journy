@extends('layout') @section('title') Journy @endsection @section('content')
    <div class="container">
        <h1>File Upload</h1>

        {{--How will I tell the store method that these two forms are for the same element--}}
        <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
            <label>Select image to upload:</label>
            <input type="file" name="file" id="file">
            <input type="submit" value="Upload" name="submit">
            <input type="hidden" value="{{ csrf_token() }}" name="_token">
        </form>

        <form method="post" action="{{ action('UserController@store') }}" >
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Name</label>
                    <input name="name" type="text" class="form-control" id="validationDefault01"
                    placeholder="Full Name" value="Mark Zuckerberg" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefaultEmail">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                     </div>
                        <input name="email" type="email" class="form-control" id="validationDefaultEmail"
                               placeholder="Email" aria-describedby="inputGroupPrepend2" value="gmail@chuck.norris"
                        required >
                    </div>
                </div>

                <div class="col-md-4 mb-3">

                    <label>Select image to upload:</label>
                    <input type="file" name="file" id="file">

                </div>
            </div>



            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Country</label>
                    <input name="adress_country" type="text" class="form-control" id="validationDefault02"
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
                        <option>Timis</option>
                        <option>Olt</option>
                        <option>Dolj</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-9 mb-3">
                    <label for="inputAddress">Home Address</label>
                    <input name="adress_street" type="text" class="form-control" id="validationDefault04"
                           placeholder="Adress" >
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Zip</label>
                    <input name="adress_zip" type="text" class="form-control" id="validationDefault05" placeholder="Zip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required >
                    <label name="agree_to_terms" class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                    </label>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Prefered Language</label>
                    <select name="prefered_language" class="custom-select mr-sm-2" id="inlineFormCustomSelect" >
                        <option value="English">English</option>
                        <option value="French">French</option>
                        <option value="Czech">Czech</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Prefered Description</label>
                    <small id="emailHelp" class="form-text text-muted">Press Ctrl/Cmd to select multiple.</small>
                    <select name="user_tags" class="selectpicker" multiple >
                        <optgroup label="Historic" data-max-options="2">
                            <option value="Trail">Trail</option>
                            <option value="Castles">Castles</option>
                            <option value="Reenactment">Reenactment</option>
                        </optgroup>
                        <optgroup label="Views" data-max-options="2">
                            <option value="Nature">Nature</option>
                            <option value="City">City</option>
                            <option value="Event">Event</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>

    </div>
@endsection