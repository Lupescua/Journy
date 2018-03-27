<div class="col-sm-6 col-md-2 position-relative">
    <div class="position-fixed float-left">
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
                    <a href="/booking" class="booking_btn btn btn-info" role="button">Book
                        <br>USD 22.5</a>
                </div>
                <div class="chose_time">
                    <button class="calendar-toggler calendar_btn btn btn-info" type="button" data-toggle="collapse" data-target="#calendarSupportedContent"
                        aria-controls="calendarSupportedContent" aria-expanded="false" aria-label="Toggle calendar">Check
                        <br>the time</button>
                    <div class="collapse calendar-collapse" id="calendarSupportedContent">
                        @include ('experience.elements.calendar')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>