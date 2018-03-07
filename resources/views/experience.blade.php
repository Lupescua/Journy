@extends('layout') @section('title') !!your experiance
<!-- In php I need to create a function to dump the info from the get-->
@endsection @section('content')
<style>
    .checked {
        color: orange;
    }
    .container {
        width: 80vw;
        margin: auto;
        padding: 0;
    }

    .experience_main_picture {
        background: url('https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg');
        height: 80vh;
        margin: 0;
        text-align: center;
    }

    /* .ticket-panel {
        transition: box-shadow .3s linear;
        margin-top: -10px;
    } */

    /* .price-holder {
        transition: box-shadow .3s linear;
        margin-top: -10px;
    } */
</style>



<div class="container">

<div class="jumbotron experience_main_picture welconp-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Long is the night we've been waiting for</h1>
        <!-- <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> -->
    </div>
</div>

<div class="row ">

<!--we need a jquerry to change the stars when giving a new rating-->
    <div class="col-sm-6 col-md-2 ">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
    </div>

<!--This number is Jquery, it may come from the database-->
    <div class="col-sm-6 col-md-2">
        <div class="review">
            <a href="#" class="btn btn-default" role="button">&55 people used it</a>
        </div>
    </div>


<!--These tags come from the database-->
    <div class="col-sm-6 col-md-4">
        <div class="tags">
            <p>
                <a href="/define_action" class="btn btn-primary" role="button">Tag1</a>
                <a href="/define_action" class="btn btn-primary" role="button">Tag2</a>
                <a href="/define_action" class="btn btn-primary" role="button">Tag3</a>
            </p>
        </div>
    </div>

    <div class="col-sm-6 col-md-2">
        <div class="price">
        <span>Price</span>
            <a href="/booking" class="btn btn-default" role="button">USD 22.5</a>
        </div>
    </div>

</div>
</div>

@endsection