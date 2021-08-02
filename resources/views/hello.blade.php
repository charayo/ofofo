@extends('app')
@section('cont')
<h1>I am a new blade{{$name}}</h1>
@push('scripts')
<script>
    alert()
</script>
@endpush
@endsection
