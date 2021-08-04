@extends('app')
@section('account')
    <style>
        .bg-side {
            background-size: cover;
            position: relative;
        }

        .bg-login {
            background-image: url("{{ asset('/images/login.jpg') }}");
        }

        .bg-signup {
            background-image: url("{{ asset('/images/signup.jpg') }}");
        }

        .my-radius {
            border-radius: 10px;
        }

        .left-radius {
            border-radius: 10px 0px 0px 10px;
        }

        .overlay {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.604);
            z-index: 1;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 10px 0px 0px 10px;
        }

    </style>
    @if (Request::is('signup'))
        <div class="">
            @include('signup');
        </div>
    @endif
    @if (Request::is('account'))
        <div class="">
            @include('login');
        </div>
    @endif


@endsection
