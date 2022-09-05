@extends('layouts.app')

@section('content')

@php $suscribed = false @endphp

@foreach( $suscriptions as $suscription )
    @if($suscription->id == $event->id)
        @php $suscribed = true @endphp
    @endif
@endforeach


<div class="m-auto max-w-xl sm:w-screen bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <img class="rounded-t-lg" src="{{$event->img}}" title="{{$event->title}}" src="{{$event->img}}" alt="{{$event->title}}" />

    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$event->title}}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$event->description}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lugar del evento : {{$event->address}} - {{$event->place}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Fecha y hora : 📅 {{ date('d-m-Y',strtotime($event->date)) }} / ⏰ {{date('H:i', strtotime($event->time))}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$event->max_participants - count($suscriptions)}} plazas disponibles</p>
        @if(isset($suscribed)
        && !$suscribed
        && $event->max_participants - count($suscriptions)
        && $event->date > date('Y-m-d'))
        <a href="{{route('suscribe', $event->id)}}">
            <button type="button" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Me apunto
            </button>
        </a>
        @endif
        @if(isset($suscribed) && $suscribed && $event->date > date('Y-m-d'))
        <button type="button" data-modal-toggle="popup-modal" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
            Ya no quiero ir
        </button>
        @endif
        <a href="{{route('home')}}" class="inline-flex items-center pl-4">
            Volver a inicio
        </a>
    </div>
</div>
@include('components.modals.modalUnsuscribe')
@endsection
