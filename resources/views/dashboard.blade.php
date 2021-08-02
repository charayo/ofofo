@extends('app')
@section('dashboard')
@section('nav')
@stop

<style>
    .bg-black {
        background-color: black;
    }

    .bg-new {
        background-color: rgb(138, 248, 11)
    }

</style>
<div>
    <nav class="navbar navbar-expand-md bg-black navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Ofofo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </nav>
    <div class="row vh-100 m-0 p-0">
        <div class="col-md-2 bg-black text-light">
            <h3>Naa me sabi</h3>
        </div>
        <div class="col-md-10"> 
            @include('includes.postboard')
        </div>
    </div>
    <div>
    @endsection
