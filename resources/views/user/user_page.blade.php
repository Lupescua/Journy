@extends('layout') @section('title') {{$user->name}} @endsection @section('content')
    <div class="container">
        <style>
            .slideshow-images {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            .media-photo {
                backface-visibility: hidden;
                position: relative;
                display: inline-block;
                vertical-align: bottom;
                overflow: hidden;
            }

            .img-responsive {
                width: 100%;
                height: auto;
            }
        </style>
        <div class="header">
            <h1>Hey {{$user->name}},</h1>
            <h2> Is this you? If yes, just click next</h2></div>
        <hr>
        {{--THE PHOTO--}}
        <section class="d-flex">
            <section class="col-sm-3 col-md-3 ">
                {{--<div class="col-auto">--}}

                <ul class="slideshow-images column">
                    <li class="media-photo col">
                        <img alt='{{$user->name}}' class="img-responsive"
                             src="https://a0.muscache.com/im/users/30582800/profile_pic/1428153696/original.jpg?aki_policy=profile_x_medium"
                             title='{{$user->name}}'>
                    </li>
                    <li class="media-photo col">
                        {{--<div class="input-group mb-3">--}}
                            {{--<div class="input-group-prepend">--}}
                                {{--<span class="input-group-text">Upload</span>--}}
                            {{--</div>--}}
                            {{--<div class="custom-file">--}}
                                {{--<input type="file" class="custom-file-input" id="inputGroupFile01">--}}
                                {{--<label class="custom-file-label" for="inputGroupFile01">Choose file</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02">Choose picture</label>
                            </div>
                            {{--<div class="input-group-append">--}}
                                {{--<span class="input-group-text" id="">Upload</span>--}}
                            {{--</div>--}}
                        </div>

                        {{--<div class="input-group mb-3">--}}
                            {{--<div class="input-group-prepend">--}}
                                {{--<button class="btn btn-outline-secondary" type="button">Button</button>--}}
                            {{--</div>--}}
                            {{--<div class="custom-file">--}}
                                {{--<input type="file" class="custom-file-input" id="inputGroupFile03">--}}
                                {{--<label class="custom-file-label" for="inputGroupFile03">Choose file</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="input-group">--}}
                            {{--<div class="custom-file">--}}
                                {{--<input type="file" class="custom-file-input" id="inputGroupFile04">--}}
                                {{--<label class="custom-file-label" for="inputGroupFile04">Choose file</label>--}}
                            {{--</div>--}}
                            {{--<div class="input-group-append">--}}
                                {{--<button class="btn btn-outline-secondary" type="button">Button</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </li>
                </ul>
            </section>

            {{-- THE INPUT FORM--}}
            {{--<div class="col-sm-9 col-md-9 ">--}}
            <section class="col-auto">
                <form method="post" action="{{ action('UserController@store') }}">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="validationDefault01">Name</label>
                            <input name="name" type="text" class="form-control" id="validationDefault01"
                                   placeholder={{$user->name}} required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefaultEmail">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    {{--<span class="input-group-text" id="inputGroupPrepend2">@</span>--}}
                                </div>
                                <input name="email" type="email" class="form-control" id="validationDefaultEmail"
                                       placeholder={{$user->email}} aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault05">Country</label>
                            <input name="adress_country" type="text" class="form-control" id="validationDefault05"
                                   placeholder={{$user->adress_country}} >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">City</label>
                            <input name="adress_city" type="text" class="form-control" id="validationDefault03"
                                   placeholder={{$user->adress_city}} >
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="inputState">State</label>
                            <select name="adress_state" id="inputState" class="form-control"
                                    placeholder={{$user->adress_state}}>
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-9 mb-3">
                            <label for="inputAddress">Home Address</label>
                            <input name="adress_street" type="text" class="form-control" id="validationDefault05"
                                   placeholder={{$user->adress_street}} >
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault05">Zip</label>
                            <input name="adress_zip" type="text" class="form-control" id="validationDefault05"
                                   placeholder={{$user->adress_zip}}>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" checked>
                            <label name="agree_to_terms" class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Prefered Language</label>
                            <select name="prefered_language" class="custom-select mr-sm-2" id="inlineFormCustomSelect"
                                    placeholder={{$user->prefered_language}}>
                                <option selected>Choose...</option>
                                <option value="1">English</option>
                                <option value="2">French</option>
                                <option value="3">Czech</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Prefered Description</label>
                            <small id="emailHelp" class="form-text text-muted">Press Ctrl/Cmd to select multiple.
                            </small>
                            <select name="user_tags" class="selectpicker" multiple placeholder={{$user->user_tags}}>
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
                    <button class="btn btn-primary" type="submit">Next</button>
                </form>
            </section>
        </section>
    </div>
@endsection