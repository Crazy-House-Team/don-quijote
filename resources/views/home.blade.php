@extends('layouts.app')

@section('content')


<h1>home</h1>
@include('components.carousel');

<h2 class="text-3xl font-bold mb-12 text-center">Eventos activos</h2>
<div class="cards-container">


    @foreach ($events as $event)
    @if(!$event->favorite && $event->date > date('Y-m-d'))
    @php $suscribed = false @endphp

    @foreach( $suscriptions as $suscription )
        @if($suscription->id == $event->id)
            @php $suscribed = true @endphp
            @endif
    @endforeach
    @include('components.card')
    @endif
    @endforeach


    @foreach ($events as $event)
    @if($event->date <= date('Y-m-d'))
    @include('components.card')
    @endif
    @endforeach
</div>
@endsection
