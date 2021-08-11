@extends('app')
@section('edit-page')
    @include('includes.postboard',['myPath'=>'edit','data'=>$data]);
@endsection