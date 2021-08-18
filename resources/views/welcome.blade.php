@extends('app')
@section('home')
    <div class="container">
        @include('includes.post-mini-carousel',$posts)
        @include('includes.header-one')
    </div>
    
    <div class="row m-0 p-0">
        <div class="col-md-3">
            <h3>Some Related Posts here</h3>
        </div>
        <div class="col-md-9 m-0">
            @include('includes.postcard',$posts)
        </div>
    </div>
    
   
@endsection