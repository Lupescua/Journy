@extends('layout') @section('title') Journy @endsection @section('content')
    <div class="container">
        <form method="post" action="{{ action('UserController@store') }}">
            {{csrf_field()}}
            <div class="">
                <label for="validationDefault01">Name</label>
                <input name="name" type="text" class="form-control" id="validationDefault01"
                       placeholder="Experience Name" value="Sight Seeing in Prague" required>
            </div>
            <div class="form-row">

                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Region</label>
                <select name="continent_region" class="selectpicker form-control" required>
                    <optgroup label="Asia">
                        <option value="asia east">East</option>
                        <option value="asia west">West</option>
                        <option value="asia central">Central</option>
                    </optgroup>
                    <optgroup label="Europe">
                        <option value="europe east">Eastern</option>
                        <option value="europe west">Western</option>
                    </optgroup>
                    <optgroup label="America">
                        <option value="america north">North</option>
                    </optgroup>
                    <optgroup label="Africa">
                        <option value="africa south">South</option>
                    </optgroup>
                </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="inputState">Activity</label>
                    <select name="activity_id" id="inputState" class="form-control" required>
                        <option selected>Choose</option>
                        <option>trekking</option>
                        <option>hunting</option>
                        <option>spa</option>
                        <option>motorbike</option>
                        <option>dragon</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault01">City</label>
                    <input name="location_id" type="text" class="form-control" id="validationDefault01"
                           placeholder="Prague"  required>
                </div>
            </div>
            <div class="">
                <label for="validationDefault01">Adress</label>
                <input name="place" type="text" class="form-control" id="validationDefault01"
                       placeholder="Prague"  >
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Upload experience picture</label>
                    <div class="custom-file">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <input name="image" type="file" class="custom-file-input" id="customFile">
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="validationDefault01">Video Url</label>
                    <input name="video_id" type="text" class="form-control" id="validationDefault01"
                           placeholder="Experience Name" value="www..." required>
                </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-8 mb-6">
                <label for="exampleTextarea">Short Experience Description</label>
                <textarea name="description" class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
            <div class="col-md-4 mb-3">
                {{--<label class="mr-sm-2" for="inlineFormCustomSelect">Main Tags</label>--}}
                <small id="emailHelp" class="form-text text-muted">Press Ctrl/Cmd to select multiple.</small>
                <select name="user_tags" class="selectpicker" multiple >
                    <optgroup label="Tags" data-max-options="3">
                        <option>Dragon</option>
                        <option>Ice</option>
                        <option>Fire</option>
                        <option>Hike</option>
                        <option>Adrenaline</option>
                        <option>Social</option>
                        <option>Cooking</option>
                        <option>Motor</option>
                        <option>Water</option>
                        <option>Historic</option>
                        <option>Tour</option>
                        <option>Soft Skills</option>
                    </optgroup>
                </select>
            </div>

            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="inputAddress">Price</label>
                    <input name="price" type="text" class="form-control" id="validationDefault04"
                           placeholder="22.00" >
                </div>
                <div class="col-md-3 mb-3">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Currency</label>
                    <select name="currency" class="custom-select mr-sm-2" id="inlineFormCustomSelect" >
                        <option selected>Choose...</option>
                        <option value="English">USD</option>
                        <option value="French">EUR</option>
                        <option value="Czech">CZK</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Language</label>
                    <select name="prefered_language" class="custom-select mr-sm-2" id="inlineFormCustomSelect" >
                        <option selected>Choose...</option>
                        <option value="English">English</option>
                        <option value="French">French</option>
                        <option value="Czech">Czech</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputAddress">Maximum number of participants</label>
                    <input name="max_participants" type="text" class="form-control" id="validationDefault04"
                           placeholder="22.00" >
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="inputAddress">Duration</label>
                    <input name="duration" type="text" class="form-control" id="validationDefault04"
                           placeholder="3.5 hours" >
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputAddress">Offered</label>
                    <input name="offered" type="text" class="form-control" id="validationDefault04"
                           placeholder="1 meal, Drinks and Equipment" >
                </div>
                <div class="col-md-3 mb-3">
                    <label for="inputAddress">Sport Level</label>
                    <select name="sport_level" class="custom-select mr-sm-2" id="inlineFormCustomSelect" >
                        <option selected>Choose...</option>
                        <option value="1">Easy</option>
                        <option value="2">Medium</option>
                        <option value="3">Advanced</option>
                        <option value="4">Hard</option>
                        <option value="5">Requires previous Training</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Long Experience Desctiption</label>
                <textarea name="what_we_do" class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 mb-6">
                    <label for="exampleTextarea">Description of Host</label>
                    <textarea name="about_host" class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
                <div class="form-group col-md-6 mb-6">
                    <label for="exampleTextarea">Long Experience Desctiption</label>
                    <textarea name="description" class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 mb-6">
                    <label for="exampleTextarea">Example textarea</label>
                    <textarea name="description" class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
                <div class="form-group col-md-6 mb-6">
                    <label for="exampleTextarea">Example textarea</label>
                    <textarea name="description" class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
@endsection