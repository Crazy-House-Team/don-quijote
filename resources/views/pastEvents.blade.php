@extends('layouts.app')

@section('content')
    
<h2 class="text-3xl font-bold mb-12 text-center">Eventos pasados</h2>
<div class="cards-container">
    @foreach ($events as $event)
        @if($event->date <= date('Y-m-d'))
            @include('components.card')
        @endif
    @endforeach
</div>
@endsection
