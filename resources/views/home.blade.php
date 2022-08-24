@extends('layouts.app')

@section('content')
<h1>home</h1>

<h2>Eventos favoritos</h2>
    @foreach ($events as $event)
        @if($event->favorite && $event->date > date('Y-m-d'))
        {{$event->date}} - {{$event->title}}<br/>
        @endif
    @endforeach

<h2>Eventos activos</h2>
    @foreach ($events as $event)
        @if(!$event->favorite && $event->date > date('Y-m-d'))
        {{$event->date}} - {{$event->title}}<br/>
        @endif
    @endforeach

<h2>Eventos pasados</h2>
    @foreach ($events as $event)
        @if($event->date <= date('Y-m-d'))
        {{$event->date}} - {{$event->title}}<br/>
        @endif
    @endforeach




        



    

@endsection
