@extends('layout') @section('title') !!your experiance
<-- In php I need to create a function to dump the info from the get-->
    @endsection @section('content')
    <style>
        .container {
            width: 80vw;
            margin: auto;
            padding: 0;
        }

        .jumbotron {
            background: url('https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg');
            height: 80vh;
            margin: 0;
            text-align: center;
            /*
        position: absolute;
        background-size: cover;
        display: flex; */
        }
    </style>
    <div class="container">

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Long is the night we've been waiting for</h1>
                <!-- <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> -->
            </div>
        </div>
    </div>


    @endsection