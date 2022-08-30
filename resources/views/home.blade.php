@extends('layouts.app')

@section('content')


<h1>home</h1>

    @include('components.carousel');

    <h2 class="text-3xl font-bold mb-12 text-center">Eventos activos</h2>
    @foreach ($events as $event)
        @if(!$event->favorite && $event->date > date('Y-m-d'))
            @include('components.card')
        @endif
    @endforeach

    <h2 class="text-3xl font-bold mb-12 text-center">Eventos pasados</h2>
    @foreach ($events as $event)
        @if($event->date <= date('Y-m-d'))
            @include('components.card')
        @endif
    @endforeach
@endsection
