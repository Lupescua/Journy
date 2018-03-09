@extends('layout') @section('title') !!your experiance
<!-- In php I need to create a function to dump the info from the get-->
@endsection @section('content')
<style>
    .checked {
        color: orange;
    }

    .container {
        /* width: 100vw; */
        margin: auto;
        padding: 0;
    }

    .experience_main_picture {
        background: url('https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg');
        /* height: 100vh; */
        height: 80vh;
        margin: 0;
        text-align: left;
        position: static;
        /* position: absolute; */
        background-size: cover;
    }

    .star_review_tags_price {
        margin: auto;
        display: flex;
        justify-content: space-between;
    }
    .short_desc_user{
        margin: auto;
        display: flex;
        justify-content: space-around;

    }
    .user_pic{
	width: 18vmin;
	height: 22vmin;
    }
</style>

<!-- This is the main jumbotron -->
    <div class="experience_main_picture welconp-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Long is the night we've been waiting for</h1>
            <!-- <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> -->
        </div>
    </div>


<!-- This container contains : Rating, Review Nr, Tags, and Price -->
    <div class="container">
    <div class="row star_review_tags_price">

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
                    <a href="/" class="btn btn-primary" role="button">Tag1</a>
                    <a href="/" class="btn btn-primary" role="button">Tag2</a>
                    <a href="/" class="btn btn-primary" role="button">Tag3</a>
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



    <div class="row short_desc_user">

<div class="col-sm-6 col-md-8">
            <div class="review">
            A personal, face-to-face encounter with this awesome animal, is guaranteed to get the adrenaline going! Dive with the sharks in Gaansbaai!

Getting into the cage with the sharks around, is truly one of the most breath-taking adventure activities you will ever live to remember. When feeding actively around the boat, the sharks may occasionally brush their tail against the cage, but they NEVER attack the cage. They are very curious though and often come close-up to the cage, to take a closer look at the diver.
                <a href="#" class="btn btn-default" role="button">&55 people used it</a>
            </div>
        </div>
        <div class="col-sm-6 col-md-2">
            <div class="user_pic">
                <a href="#" class="btn btn-default" role="button">John Snow</a>
            </div>
        </div>

    </div>
    </div>

@endsection