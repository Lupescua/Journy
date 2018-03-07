@extends('layout')

@section('title')
Journy-login
@endsection


@section('content')

    <div class="jumbotron jumbotron-fluid ">
        <div class="transbox">
            <div class="column">
                <form>
                    <div class="col-md-8 col-md-offset-4">
                        <a href="{{url('/redirect')}}"><img src="/img/rsz_fb.png" alt="facebook login" height="70"></a>

                        <!-- <img src="/img/google.png" alt="google login" height="70"> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection