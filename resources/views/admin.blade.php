@extends('layouts.app')

@section('content')
<h1>admin</h1>
@foreach ($events as $event)
    @include('components.accordeon')
@endforeach
@endsection
