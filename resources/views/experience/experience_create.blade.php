@extends('layout') @section('title') Journy @endsection @section('content')
    <div class="container">
        <form method="post" action="{{ action('ExperienceController@store') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <label>Select experience image:</label>
            <input type="file" name="image" id="file">
            <input type="hidden" value="{{$user_id}}" name="user_id">

            <div class="">
                <label for="inputName">Name</label>
                <input name="name" type="text" class="form-control" id="inputName"
                       placeholder="Experience Name" value="Sight Seeing in Prague" required>
            </div>
            <div class="form-row">

                <div class="col-md-3 mb-3">
                    <label for="inputContinent_region">Region</label>
                    <select name="continent_region" class="selectpicker form-control" id="inputContinent_region"
                            required>
                        <optgroup label="Asia">
                            <option value="1 1">East</option>
                            <option value="1 2">West</option>
                            <option value="1 3">Central</option>
                        </optgroup>
                        <optgroup label="Europe">
                            <option value="2 1">Eastern</option>
                            <option value="2 2">Western</option>
                        </optgroup>
                        <optgroup label="America">
                            <option value="3 1">North</option>
                        </optgroup>
                        <optgroup label="Africa">
                            <option value="4 1">South</option>
                        </optgroup>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="inputActivity_id">Activity</label>
                    <select name="activity_id" id="inputActivity_id" class="form-control" required>
                        <option value="1">trekking</option>
                        <option value="2">hunting</option>
                        <option value="3">spa</option>
                        <option value="4">motorbike</option>
                        <option value="5">dragon</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="inputLocation_id">City</label>
                    <input name="location_id" type="text" class="form-control" id="inputLocation_id"
                           placeholder="Prague" value="Prague" required>
                </div>
            </div>
            <div class="">
                <label for="inputPlace">Adress</label>
                <input name="place" type="text" class="form-control" id="inputPlace"
                       placeholder="Krakovska 1" value="Krakovska 1">
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label>Upload experience picture</label>
                    <div class="custom-file">
                        <label class="custom-file-label" for="inputImage">Choose file</label>
                        <input name="image" type="file" class="custom-file-input" id="inputImage">
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="inputVideo_id">Video Url</label>
                    <input name="video_id" type="text" class="form-control" id="inputVideo_id"
                           placeholder="Video Url" value="www..." required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-8 mb-6">
                    <label for="inputDescription">Short Experience Description</label>
                    <textarea name="description" class="form-control" id="inputDescription" rows="3"
                              required></textarea>
                </div>
                <div class="col-md-4 mb-3">
                    {{--<label class="mr-sm-2" for="inlineFormCustomSelect">Main Tags</label>--}}
                    <small id="tagHelp" class="form-text text-muted">Press Ctrl/Cmd to select multiple.</small>
                    <select name="user_tags" class="selectpicker" multiple>
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
                    <label for="inputPrice">Price</label>
                    <input name="price" type="text" class="form-control" id="inputPrice"
                           placeholder="22.00">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="mr-sm-2" for="inputCurrency">Currency</label>
                    <select name="currency" class="custom-select mr-sm-2" id="inputCurrency">
                        <option value="EUR">EUR</option>
                        <option value="USD">USD</option>
                        <option value="CZK">CZK</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label class="mr-sm-2" for="inputLanguage">Language</label>
                    <select name="prefered_language" class="custom-select mr-sm-2" id="inputLanguage">
                        <option value="English">English</option>
                        <option value="French">French</option>
                        <option value="Czech">Czech</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputMax_participants">Maximum number of participants</label>
                    <input name="max_participants" type="text" class="form-control" id="inputMax_participants"
                           placeholder="22.00">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="inputDuration">Duration</label>
                    <input name="duration" type="text" class="form-control" id="inputDuration"
                           placeholder="3.5 hours">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputOffered">Offered</label>
                    <input name="offered" type="text" class="form-control" id="inputOffered"
                           placeholder="1 meal, Drinks and Equipment">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="inputSport_level">Sport Level</label>
                    <select name="sport_level" class="custom-select mr-sm-2" id="inputSport_level">
                        <option value="1">Easy</option>
                        <option value="2">Medium</option>
                        <option value="3">Advanced</option>
                        <option value="4">Hard</option>
                        <option value="5">Requires previous Training</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleWhat_we_do">Long Experience Desctiption</label>
                <textarea name="what_we_do" class="form-control" id="exampleWhat_we_do" rows="4"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 mb-6">
                    <label for="exampleAbout_host">Description of Host</label>
                    <textarea name="about_host" class="form-control" id="exampleAbout_host" rows="3"></textarea>
                </div>
                <div class="form-group col-md-6 mb-6">
                    <label for="exampleWhat_we_provide">What will the guest gain</label>
                    <textarea name="what_we_provide" class="form-control" id="exampleWhat_we_provide"
                              rows="3"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 mb-6">
                    <label for="exampleWho_can_come">Who can come</label>
                    <textarea name="who_can_come" class="form-control" id="exampleWho_can_come" rows="3"></textarea>
                </div>
                <div class="form-group col-md-6 mb-6">
                    <label for="exampleWhere_we_be">Where will we meet/Where will we go</label>
                    <textarea name="where_we_be" class="form-control" id="exampleWhere_we_be" rows="3"></textarea>
                </div>
            </div>

            <label for="inputCoordinates">Coordinates</label>
            <div class="form-row">

                <div class="col-md-6 mb-6">
                    <label for="inputLongitude">Longitude</label>
                    <input name="gps_lng" type="text" class="form-control" id="inputLongitude"
                           placeholder="14.431">
                </div>

                <div class="col-md-6 mb-6">
                    <label for="inputLatitude">Latitude</label>
                    <input name="gps_lat" type="text" class="form-control" id="inputLatitude"
                           placeholder="50.0745">
                </div>

            </div>
            .
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
@endsection