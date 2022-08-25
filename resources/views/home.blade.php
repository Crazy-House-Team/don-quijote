@extends('layouts.app')

@section('content')
<h1>home</h1>

<h2>Eventos favoritos</h2>
@foreach ($events as $event)
@if($event->favorite && $event->date > date('Y-m-d'))
<a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://i.guim.co.uk/img/media/423d3ddf306e98864c1d887c1dcf290421cd21a7/0_169_4912_6140/master/4912.jpg?width=700&quality=85&auto=format&fit=max&s=864393ed1c322fc5ddcb2766c3c945e6" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$event->title}}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </div>
</a>
@endif
@endforeach

<h2 class="text-3xl font-bold mb-12 text-center">Eventos activos</h2>
@foreach ($events as $event)
@if(!$event->favorite && $event->date > date('Y-m-d'))
<div class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" title="{{$event->title}}" src="{{$event->img}}" alt="{{$event->title}}">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$event->title}}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$event->resume}}</p>
            <button type="button" class="px-6 py-2.5 w-36 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg ">Me apunto</button>
            <a href="{{route('detail',$event->id)}}" class="inline-flex items-center py-2 px-3 w-36 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Mas info...
            <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
        </div>
    </div>
@endif
@endforeach

<h2 class="text-3xl font-bold mb-12 text-center">Eventos pasados</h2>
@foreach ($events as $event)
@if($event->date <= date('Y-m-d')) 
    <div class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" title="{{$event->title}}" src="{{$event->img}}" alt="{{$event->title}}">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$event->title}}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$event->resume}}</p>
            <button type="button" class="px-6 py-2.5 w-36 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg ">Me apunto</button>
            <a href="{{route('detail',$event->id)}}" class="inline-flex items-center py-2 px-3 w-36 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Mas info...
            <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
        </div>
    </div>
@endif
@endforeach
@endsection