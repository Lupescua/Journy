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
                        <br><br>
                        <img src="/img/instagram.png" alt="instagram login" height="71rem" style="border-radius: 5px">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection