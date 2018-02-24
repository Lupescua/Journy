<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


    <title> @yield('title')</title>
</head>

<body>

    <div class="pos-f-t d-flex p-2 panel-transparent sticky-top sticky sticky scrollable exploring stuck">

        <nav class="container navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-around pos-f-t panel-transparent sticky-top ">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <a class="mr-auto " href="{{action('HomepageController@index')}}">
                    <img src="http://www.ryanhamilton.ca/Logos/logo_18.jpg" width="30" height="30" alt="Logo">
                </a>


                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="nav-item dropdown my-2 my-lg-0">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="navbar-toggler-icon" href="#" style="background-image: url('https://www.atomix.com.au/media/2015/06/atomix_user31.png'); width: 30px; height: 30px;">
                        </span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left:-10vw">
                        <a class="dropdown-item active" href="#">Log in / Sign up</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>

                </div>

            </div>
        </nav>

    </div>

    <!-- I'd like this button, when it gets pushed to go to the Home page. It's set now to go to Location, just to test it. it does not seem to work -->
    <div class="container navbar d-none">
        <div class="pos-f-t panel-transparent sticky-top sticky sticky scrollable exploring stuck">
            <div class="collapse" id="navbaractor">
                <div class="p-4 text-left">
                    <a class="nav-link text-dark font-weight-bold text-shadow" href="Homepage.html">Home
                        <span class="sr-only">(current)</span>
                    </a>
                    <a class="nav-link text-dark font-weight-bold" href="felicity_jones.html">Best Actor</a>
                    <a class="nav-link text-dark font-weight-bold" href="rogue_one.html">Best Movie
                    </a>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 font-weight-bold" type="search" placeholder="Search" aria-label="Search" style="background-color:rgba(0,0,0,0);">
                    </form>
                </div>
            </div>
            <nav class="navbar navbar-dark ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbaractor" aria-controls="navbaractor"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <img src="http://www.ryanhamilton.ca/Logos/logo_18.jpg" width="30" height="30" alt="Rick & Morty">
                    </span>
                </button>
            </nav>
        </div>
    </div>


    @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>