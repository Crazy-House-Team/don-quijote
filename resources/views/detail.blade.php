@extends('layouts.app')

@section('content')

<div class="m-auto w-1/2 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="{{$event->img}}" title="{{$event->title}}" src="{{$event->img}}" alt="{{$event->title}}" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$event->title}}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$event->description}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lugar del evento : {{$event->address}} - {{$event->place}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Fecha y hora : 📅 {{$event->date}} / ⏰ {{$event->time}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Nº máximo de participantes : {{$event->max_participants}}</p>
        <a href="{{route('home')}}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Me apunto
        </a>
        <a href="{{route('home')}}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Volver a inicio
        </a>
    </div>
</div>

@endsection
