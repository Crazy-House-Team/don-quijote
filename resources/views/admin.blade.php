@extends('layouts.app')

@section('content')
<h1>admin</h1>

<button type="button" class="btn btn-primary">
    <a href="{{ route('createEvent')}}">Nuevo Evento</a>
</button>

@foreach ($events as $event)
<div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
    <h2 id="accordion-flush-heading-{{ $event->id }}">
        <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-accordion-target="#accordion-flush-body-{{ $event->id }}" aria-expanded="true" aria-controls="accordion-flush-body-{{ $event->id }}">
            <span>{{ $event->title }}</span>
            <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </h2>
    <div id="accordion-flush-body-{{ $event->id }}" class="" aria-labelledby="accordion-flush-heading-{{ $event->id }}">
        <div>
            <button type="submit">Borrar</button>
            <!-- <a href="{{route('editEvent',['id'->$event->id])}}">Modificar</a> -->
            <label for="default-toggle" class="inline-flex relative items-center cursor-pointer">
                <input type="checkbox" value="" id="default-toggle" class="sr-only peer">
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Destacado</span>
            </label>
        </div>
        <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
            <h3 class="mb-2 text-gray-500 dark:text-gray-400">{{ $event->resume }}</h3>
            <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $event->description }}</p>
            <p class="mb-2 text-gray-500 dark:text-gray-400">
                <span class="text-gray-700 font-bold dark:text-gray-400">Lugar: </span> {{ $event->place }}
            </p>
            <p class="mb-2 text-gray-500 dark:text-gray-400">
                <span class="text-gray-700 font-bold dark:text-gray-400">Dirección: </span> {{ $event->address }}
            </p>
            <p class="mb-2 text-gray-500 dark:text-gray-400">
                <span class="text-gray-700 font-bold dark:text-gray-400">Fecha y hora: </span> {{ $event->date }} a las {{ $event->time }}.
            </p>
        </div>
    </div>
</div>

@endforeach
@endsection
