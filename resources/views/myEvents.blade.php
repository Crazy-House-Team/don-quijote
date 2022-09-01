@extends('layouts.app')

@section('content')
<h1>mis eventos</h1>
<h2 class="text-3xl font-bold mb-12 text-center">Eventos activos</h2>
<div class="cards-container">
    @foreach ($events as $event)
    @include('components.card')
    @endforeach
</div>
@endsection

