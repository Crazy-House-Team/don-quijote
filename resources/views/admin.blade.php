@extends('layouts.app')

@section('content')
<h1>admin</h1>

<button type="button" class="btn btn-primary">
    <a href="{{ route('createEvent')}}" class='text-white font-bold'>Nuevo Evento</a>
</button>
<h2>Eventos activos</h2>
    @foreach ($events as $event)

        @if($event->date >= date('Y-m-d'))
            @include('components.adminCard')
        @endif

    @endforeach
<h2>Eventos pasados</h2>
    @foreach ($events as $event)

        @if($event->date < date('Y-m-d'))
            @include('components.adminCard')
        @endif

    @endforeach

@endsection
