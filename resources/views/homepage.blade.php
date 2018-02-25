@extends('layout') @section('title') Journy @endsection @section('content')
<style>
    .jumbotron {
        background: url('https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg');
        width:100%;
        height:80%;
        position : absolute;
    }
</style>
<div class="jumbotron jumbotron-fluid">
    <form class="form-inline" style="position:relative; " method="post">
        <input class="form-control  font-weight-bold mr-auto " style="background: #fff; margin-left:auto; margin-right:0;" type="search"
            placeholder="Search" aria-label="Search">
    </form>
</div>


@endsection