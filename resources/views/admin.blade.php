@extends('layouts.app')

@section('content')

<a href="{{ route('createEvent')}}" class='no-underline text-lg text-blue hover:text-blue-700 font-bold'>Nuevo Evento +</a>

<h2 class="block bg-blue-200 py-1 px-3 rounded my-3 mt-5" >Eventos activos</h2>
    @foreach ($events as $event)

        @if($event->date >= date('Y-m-d'))
            @include('components.adminCard')
        @endif

    @endforeach
<h2 class="block bg-blue-200 py-1 px-3 rounded my-3 mt-5">Eventos pasados</h2>
    @foreach ($events as $event)

        @if($event->date < date('Y-m-d'))
            @include('components.adminCard')
        @endif

    @endforeach

@endsection
