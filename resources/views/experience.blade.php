@extends('layout') @section('title') !!your experiance
<!-- In php I need to create a function to dump the info from the get-->
@endsection @section('content')
<style>
    .checked {
        color: orange;
    }

    .container {
        height: 100%;
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

    .short_desc_user {
        margin: auto;
        display: flex;
        justify-content: space-around;

    }

    .short_desc {
        height: 22vmin;
    }

    .short_desc .row {
        display: flex;
        align-items: center;
    }

    .user_pic img {
        border-radius: 1vmin;
        height: 5vmin;
    }

    .video_time {
        text-align: center;
        display: table-caption;
    }

    .video_time video {
        height: 100%;
        width: 22vw;
        z-index: 0;
        border-radius: 1vmin;
    }

    .small_title {
        font-size: 1.4em;
    }

    .v {
        top: 20vh;
        position: absolute;
        float: right;
    }

    .calendar_btn,
    .booking_btn {
        /* font-size: 1.4rem; */
        /* line-height: 3rem; */
        font-weight: 500;
        margin-top: 1rem;
        background: #f35738;
        color: #fff;
    }
</style>

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
        <div class="col-sm-6 col-md-2 ">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>

        <!--This number is Jquery, it may come from the database-->
        <div class="col-sm-6 col-md-2">
            <div class="people_booked">
                <a href="#" class="btn btn-default" role="button">55 people used it
                    <br> Nobody came back</a>
            </div>
        </div>


        <!--These tags come from the database-->
        <div class="col-sm-6 col-md-4">
            <div class="tags">
                <p>
                    <a href="/" class="btn btn-primary" role="button">Dragons</a>
                    <a href="/" class="btn btn-primary" role="button">Fire</a>
                    <a href="/" class="btn btn-primary" role="button">Ice</a>
                </p>
            </div>
        </div>


    </div>

    <!-- Desciption and User pics -->
    <div class="row short_desc_user">

        <div class="col-sm-6 col-md-8">
            <div class="short_desc">
                <div class="row">
                    <a href="#" class="btn btn-default user_pic" role="button">
                        <img src="http://www.animationxpress.com/wp-content/uploads/2015/11/Jon-Snow.jpg" alt="John Snow profile picture">
                        <br> Jon Snow</a>
                    <p>Experience Short description</p>
                </div>
                <p>A personal, face-to-face encounter with this awesome animal, is guaranteed to get the adrenaline going! Dive
                    with the sharks in Gaansbaai! Getting into the cage with the sharks around, is truly one of the most
                    breath-taking adventure activities you will ever live to remember. When feeding actively around the boat,
                    the sharks may occasionally brush their tail against the cage, but they NEVER attack the cage. They are
                    very curious though and often come close-up to the cage, to take a closer look at the diver.
                </p>
                <hr>
                <section class="short_details">
                    <a>
                        <img src="https://png.icons8.com/metro/1600/marker.png" alt="place marker" height="12" width="12">Praha</a>
                    <br>
                    <a>
                        <img src="https://www.shareicon.net/download/2015/08/10/83156_clock_512x512.png" alt="place marker" height="12" width="12">3.5 hours total</a>
                    <br>
                    <a>
                        <img src="https://cdn4.iconfinder.com/data/icons/user-interface-33/80/Menu-512.png" alt="place marker" height="12" width="12">1 meal, Drinks and Equipment</a>
                    <br>
                    <a>
                        <img src="https://image.flaticon.com/icons/png/512/103/103626.png" alt="place marker" height="12" width="12"> Offered in English</a>
                    <br>
                </section>
                <hr>
                <section class="host_short_details">
                    <p class="small_title">About your host, @Jon</p>
                    <p>We know no king but the King in the North, whose name is Stark.</p>
                </section>
                <hr>
                <section class="activity_short_details">
                    <p class="small_title">What we’ll do</p>
                    <p>First, I'll show you around the SKOBA workshop and we'll perform the basics of handmade notebook production.
                        Then, you will make your own notebook from authentic, locally-sourced materials such as antique Czech
                        magazines, books and posters. You will experience the joys of making something unique with your own
                        hands and creating an original notebook in a sustainable and socially-impactful way. And of course,
                        the notebook is yours to take home and use!</p>
                </section>
                <hr>
                <section class="host_input_short_details">
                    <p class="small_title">What I’ll provide</p>
                    <p>Home made cake 󴀁 Home made lemonade 󲀃 Materials for your book 󳀁 Choose from a great variety of old
                        printed materials relating to Czech history and culture</p>
                </section>
                <hr>
                <section class="restriction_text">
                    <p class="small_title">Who can come</p>
                    <p>Guests ages 12 and up can attend.</p>
                </section>
                <hr>
                <section class="restriction_text">
                    <p class="small_title">Where we’ll be</p>
                    <p>Mordor is not that far, but this is the land of Fire and Ice. We will be camping in the forests of Mithelhime
                        and eat with the Trolls unde the bridge of Happyness. Luckylly, our music will be offered by noneother
                        thatn Tyrion Drake Malfoy and his acompaniament of Jolly Rogers.</p>

                    <div id="map" style="height:400px; "></div>

                    <script>
                        function initMap() {

                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 12,
                                center: {
                                    lat: 50.0745,
                                    lng: 14.431
                                }
                            });

                            if (navigator.geolocation) { // we check if the browser supports geolocation
                                navigator.geolocation.getCurrentPosition(function (location) {
                                    // stuff to do with the location

                                    console.log(location);

                                    var marker = new google.maps.Marker({
                                        position: {
                                    lat: 50.0745,
                                    lng: 14.431
                                            // lat: location.coords.latitude,
                                            // lng: location.coords.longitude
                                        },
                                        map: map
                                    });


                                }, function (error) {
                                    // stuff to do with an error
                                });
                            }

                        }
                    </script>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXQ_qbFwunNmKz7WW9jUY8jV3eUao3uhI&callback=initMap"></script>
                </section>

                <hr>
                <section class="contact_host">
                    <a class="small_title" href="#">Contact Host</a>
                </section>
                <hr>

                <section class="contact_host">
                    <p class="small_title" >Reviews:</p>
                </section>
                <hr>

                <section class="reviews">
                    <div class="new_review">
                        <div class="row">
                            <a href="#" class="btn btn-default user_pic" role="button">
                                <img src="https://pbs.twimg.com/profile_images/378800000769453762/8fbe7ec07f238b8a91fa3962235c5ef2.jpeg" alt="Cersei Lanister profile picture">
                                <br>
                                <p>Cersei Lanister</p>
                            </a>
                            <div>
                                <p class="small_title">I need a dragon instead of my High Sparrow</p>
                                <p>20/07/2017</p>
                            </div>
                        </div>
                        <p>“Oh, shut up, you little fool. Praying for the gods to have mercy on us all? The gods have no mercy,
                            that’s why they are gods. My father told me that when he caught me praying. My mother had just
                            died, you see. I didn’t really understand the concept of death. The finality of it. I thought
                            if I prayed very very hard, the gods would return her to me. I was four.”</p>
                    </div>
                    <hr>

                    <div class="new_review">
                        <div class="row">
                            <a href="#" class="btn btn-default user_pic" role="button">
                                <img src="https://inightswatch.files.wordpress.com/2015/07/tyrion-lannister-profile-pic.jpg" alt="Tyrion Lannister profile picture">
                                <br>
                                <p>Tyrion Lannister</p>
                            </a>
                            <div>
                                <p class="small_title">Assuring his dear old dad that he is ready to perform his duty.</p>
                                <p>21/09/2017</p>
                            </div>

                        </div>
                        <p>“Drinking and lust. No man can match me in these things. I am the god of tits and wine… I shall build
                            a shrine to myself at the next brothel I visit.”</p>
                    </div>
                    <hr>

                    <div class="new_review">
                        <div class="row">
                            <a href="#" class="btn btn-default user_pic" role="button">
                                <img src="https://pbs.twimg.com/profile_images/3737825338/2814622f29cded235c07df6ef3fd8f40_400x400.jpeg" alt="Joffrey Lannister profile picture">
                                <br>
                                <p>Joffrey Lannister</p>
                            </a>
                            <div>
                                <p class="small_title">Should this be higher or lower?</p>
                                <p>10/10/2017</p>
                            </div>
                        </div>
                        <p>“My mother wishes me to let Lord Eddard join the Night's Watch. Stripped of all titles and powers,
                            he would serve the realm in permanent exile. And my Lady Sansa has begged mercy for her father.
                            But they have the soft hearts of women. So long as I am your king, treason shall never go unpunished.
                            Sir Ilyn, bring me his head!”</p>
                    </div>
                    <hr>

                    <div class="new_review">
                        <div class="row">
                            <a href="#" class="btn btn-default user_pic" role="button">
                                <img src="https://files.brightside.me/files/news/part_18/189705/2888655-_0025_5VIFIEU-650-a542d8629a-1480842238.jpg" alt="Sansa Stark profile picture">
                                <br>
                                <p>Sansa Stark</p>
                            </a>
                            <div>
                                <p class="small_title">The snow drifted down and down</p>
                                <p>20/07/2017</p>
                            </div>
                        </div>
                        <p>“The snow drifted down and down, all in ghostly silence, and lay thick and unbroken on the ground.
                            It was a place of whites and blacks and greys. White towers and white snow and white statues,
                            black shadows and black trees, the dark grey sky above. A pure world, Sansa thought. I do not
                            belong here. Yet she stepped out all the same.” </p>
                    </div>
                    <hr>
                    <div class="new_review">

                        <div class="row">
                            <a href="#" class="btn btn-default user_pic" role="button">
                                <img src="https://vignette.wikia.nocookie.net/gameofthrones/images/2/28/Ygritte-promotionals4pic.jpg/revision/latest?cb=20170107042949"
                                    alt="Ygritte profile picture">
                                <br>
                                <p>Ygritte</p>
                            </a>
                            <div>
                                <p class="small_title">to Jon</p>
                                <p>08/01/2018</p>
                            </div>

                        </div>
                        <p>“Do you think I'm as dumb as all those girls in silk dresses you knew growing up? You're loyal and
                            you're brave. You didn't stop being a crow the day you walked into Mance Rayder's tent. But I'm
                            your woman now, Jon Snow. You're going to be loyal to your woman. The Night's Watch don't care
                            if you live or die. Mance Rayder don't care if I live or die. We're just soldiers in their armies
                            and there's plenty more to carry on if we go down. It's you and me that matters to me and you.
                            Don't ever betray me. 'Cause I'll cut your pretty cock right off and wear it 'round my neck.”</p>
                    </div>
                    <hr>

                </section>

            </div>
        </div>

        <div class="col-sm-6 col-md-2 position-relative">
            <div class="position-fixed v">
                <div class="video_time">
                    <div class="video">
                        <video id="main-video" preload="metadata" poster="http://www.criticalcommons.org/Members/MCIMR/clips/playmobil-game-of-thrones-2012.mp4/thumbnailImage"
                            height="360" width="630" playsinline autoplay muted loop src="http://videos.criticalcommons.org/transcoded/http/ccserver.usc.edu/8080/cc/Members/MCIMR/clips/playmobil-game-of-thrones-2012.mp4/webm-low/playmobil-game-of-thrones-2012-mp4.webm">
                            <source type="video/webm" src="http://videos.criticalcommons.org/transcoded/http/ccserver.usc.edu/8080/cc/Members/MCIMR/clips/playmobil-game-of-thrones-2012.mp4/webm-low/playmobil-game-of-thrones-2012-mp4.webm">
                            <source type="video/mp4" src="http://videos.criticalcommons.org/transcoded/http/ccserver.usc.edu/8080/cc/Members/MCIMR/clips/playmobil-game-of-thrones-2012.mp4/mp4-low/playmobil-game-of-thrones-2012-mp4.mp4">
                        </video>
                    </div>

                    <div class="row d-flex justify-content-around">
                        <div class="price">
                            <!-- <span></span> -->
                            <a href="/booking" class="booking_btn btn btn-info" role="button">Book
                                <br>USD 22.5</a>
                        </div>
                        <div class="chose_time">
                            <!-- This is the button to show the calendar -->
                            <button class="calendar-toggler calendar_btn btn btn-info" type="button" data-toggle="collapse" data-target="#calendarSupportedContent"
                                aria-controls="calendarSupportedContent" aria-expanded="false" aria-label="Toggle calendar">Check
                                <br>the time</button>

                            <!-- This is the calendar -->
                            <div class="collapse calendar-collapse" id="calendarSupportedContent">

                            @include ('experience/calendar')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection