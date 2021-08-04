@extends('app')
@section('home')
    <h1>Welcome to OFOFO</h1>
    <div class="row m-0 p-0">
        <div class="col-md-3">
            <h2>Some Related Posts here</h2>
        </div>
        <div class="col-md-9">
                @include('includes.postcard',$posts)
        </div>
    </div>
    
   
@endsection