@extends('../layout') @section('title') Booking
@endsection
@section('content')
<body>

    <div class="breadcrumb">
        <a href="{{route('bookingstep')}}" class="active">Review guest requirements </a>
        <a href="{{route('bookingstep',[2])}}"> Who is coming </a>
        <a href="{{route('bookingstep',[3])}}"> Order Confirmation </a>
    </div>
    <br />
    <br />

    @yield('bookingcontent')

</body>
@endsection