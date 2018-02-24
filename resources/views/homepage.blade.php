@extends('layout')
@section('title')
Journy
@endsection


@section('content')
    <img src="https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg" width="100%" height="80%" style="position : absolute" alt="Boackground" >
    <form class="form-inline" style="position:relative; " method="post">
        <input class="form-control  font-weight-bold" style="background: #fff;margin:auto;"type="search" placeholder="Search" aria-label="Search" style="background-color:rgba(0,0,0,0);">
    </form>

    <form class="form-inline mr-auto ">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
@endsection
