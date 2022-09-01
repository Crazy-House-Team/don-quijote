@extends('layouts.app')

@section('content')

<button type="button" class=" bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-2 my-2 rounded">
    <a href="{{ route('createEvent')}}" class='text-white font-bold'>Nuevo Evento</a>
</button>
<h2 class="block bg-blue-200 py-1 px-1 rounded" >Eventos activos</h2>
    @foreach ($events as $event)

        @if($event->date >= date('Y-m-d'))
            @include('components.adminCard')
        @endif

    @endforeach
<h2 class="block bg-blue-200 py-1 px-1 rounded">Eventos pasados</h2>
    @foreach ($events as $event)

        @if($event->date < date('Y-m-d'))
            @include('components.adminCard')
        @endif

    @endforeach

@endsection
