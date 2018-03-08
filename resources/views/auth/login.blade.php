@extends('layout')

@section('title')
Journy-login
@endsection


@section('content')

    <div class="jumbotron ">
        <div class="transbox">
            <div class="column">
                <form>
                    <div class="center">
                        <a href="{{url('/redirect')}}"><img src="/img/fb.png" alt="facebook login" height="70rem"></a>
                        <br><br>
                        <img src="/img/google.png" alt="google login" height="71rem">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection