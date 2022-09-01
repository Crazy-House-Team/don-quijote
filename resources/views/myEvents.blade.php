@extends('layouts.app')

@section('content')
<h1>Mis eventos</h1>

<div class="cards-container">
    @foreach ($events as $event)
    @include('components.card')
    @endforeach
</div>
@endsection

