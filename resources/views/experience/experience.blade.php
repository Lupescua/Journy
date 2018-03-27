@extends('../layout') @section('title') !!your experiance
<!-- In php I need to create a function to dump the info from the get-->
@endsection @section('content')

<link rel="stylesheet" href="/css/experience.css">

<!-- This is the main jumbotron -->
<div class="experience_main_picture welconp-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Long is the night we've been waiting for</h1>
    </div>
</div>


<!-- This container contains : Rating, Review Nr, Tags, and Price -->
<div class="container">
    <div class="row star_review_tags_price">

        <!--we need a jquerry to change the stars when giving a new rating-->
        <div class="col-sm-6 col-md-2">
            @include('experience.elements.stars')
        </div>

        <!--This number is Jquery, it may come from the database-->
        <div class="col-sm-6 col-md-2">
            @include('experience.elements.number_bookings')
        </div>

        <!--These tags come from the database-->
        <div class="col-sm-12 col-md-4">
            @include('experience.elements.experience_main_tags')
        </div>

    </div>

    <!-- Desciption and User pics -->
    <div class="row short_desc_user">

        <div class="col-sm-6 col-md-8">
            <div class="short_desc">
                <div class="row">
                    <a href="#" class="btn btn-default user_pic" role="button">
                        <img src="http://www.animationxpress.com/wp-content/uploads/2015/11/Jon-Snow.jpg" alt="John Snow profile picture">
                        <br>Jon Snow</a>
                    <p>Experience Short description</p>
                </div>
                @include('experience.elements.one_paragraph_exp_desc')
                <hr> @include('experience.elements.short_details')
                <hr> @include('experience.elements.about_host')
                <hr> @include('experience.elements.experience_description')
                <hr>
                <section class="contact_host">
                    <a class="small_title" href="#">Contact Host</a>
                </section>
                <hr>
                <section class="contact_host">
                    <p class="small_title">Reviews:</p>
                </section>
                <hr> @include('experience.elements.review')
            </div>
        </div>
        @include('experience.elements.aside_video')
                <p>data3you</p>
    </div>
</div>


@endsection