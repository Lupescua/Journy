@extends('layout') @section('title') Journy @endsection @section('content')
<style>
    .jumbotron {
        background: url('https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg');
        width: 100%;
        height: 80%;
        position: absolute;
        background-size: cover;
        display: flex;
        justify-content: center;
    }
    .column{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .column a{
        margin-bottom: 20px;
    }
    .logo{
        background-size: cover;
    }
</style>
<!-- <div class="container-full-bg"> -->
<div class="jumbotron jumbotron-fluid ">
    <div class="column">
    <a href=""><img src="https://image.ibb.co/c9OsdH/logo_main.png" alt="logo_main" border="0"></a>
    <form class="form-inline" style="position:relative; " method="post">
        <input class="form-control  font-weight-bold mr-auto " style="background: #fff; margin-left:auto; margin-right:0;" type="search"
            placeholder="Search" aria-label="Search">
    </form>
</div>
</div>
<!-- </div> -->


@endsection