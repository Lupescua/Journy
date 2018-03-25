<!doctype html>
<html amp lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="description" content="Journey connects travelers with local tour guides, worldwide. Local guides will share the passion for their city!">
    <meta name="keywords" content="journey, www.journy.com, local tourist guide, local attraction, city tour, ethical tourism, private tour, private guide, personal tour, tour guide, best tour, best local guide">

    <!-- Mobile amp data -->
    <link rel="canonical" href="http://example.ampproject.org/article-metadata.html">
    <script async src="https://cdn.ampproject.org/v0.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google fonts -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700' type='text/css'>
    <!-- Our CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/location.css">
    <link rel="stylesheet" href="/css/booking.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!-- Mobile amp scripts -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "headline": "Open-source framework for publishing content",
            "datePublished": "2015-10-07T12:02:41Z",
            "image": [
                "logo.jpg"
            ]
        }
    </script>
    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }
    </style>
    <noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none;
                overflow: hidden;
            }
        </style>
    </noscript>


    <title> @yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top panel-transparent p-2 ">
        <!--This like create a fixed element that does not change with switching the browser size
            <a class="navbar-brand" href="#">Navbar</a> -->

        <!-- if you delete the next button, they will not unite when the window shrinks -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">

            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">
                        <span class="navbar-toggler-icon">
                            <img id="logo" src="\img\profile_picture_green.jpg" width="30" height="30" alt="Logo">
                    </a>
                </li>
                <!--Optional Elements
        <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
            </ul>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="https://www.atomix.com.au/media/2015/06/atomix_user31.png" width="30" height="30" alt="Logo">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left:-10vw">
                    <a class="dropdown-item active">
                        <button class="btn btn-primary" id="modal-button">Log in / Sign up</button>
                    </a>
                    <a class="dropdown-item" href="/experience">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/">Log out</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <script>
        $('#modal-button').click(function () {

            $.ajax({
                url: 'modal',
                method: 'get'
            }).done(function (data) {

                var modal = $(data);

                $('body').append(modal);
                modal.modal('show');
            })

        })
    </script>

    <footer>
    <div class="d-flex justify-content-between">
    <a class="nav-link" href="/">
    <img id="logo" src="\img\profile_picture_green.jpg" width="30" height="30" alt="Logo">
    </a>
    <p>&copy; 2018 Journy All rights reserved
    </div>
    </footer>
</body>

</html>