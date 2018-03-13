<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking</title>
    <link href="/css/bookingpage.css" rel="stylesheet">

</head>

<body>

    <div class="breadcrumb">
        <a href="{{route('bookingstep')}}" class="active">Review guest requirements </a>
        <a href="{{route('bookingstep',[2])}}"> Who is coming </a>
        <a href="{{route('bookingstep',[3])}}"> Order Confirmation </a>
    </div>
    <br />
    <br />

    @yield('content')

</body>

</html>