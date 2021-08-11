@extends('app')
@section('allPost')
   <h1>Dash Posts</h1>
   @include('includes.all-post',['posts'=>$posts])
@endsection
