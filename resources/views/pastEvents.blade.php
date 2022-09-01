@extends('layouts.app')

@section('content')

<h2 class="text-white text-start bg-primary mt-6 mb-6 pt-2 pb-2 ps-2 ">Eventos pasados</h2>
<div class="grid grid-cols-1 gap-4 md:grid-cols-2  auto-rows-max">
    @foreach ($events as $event)
        @if($event->date <= date('Y-m-d'))
            @include('components.card')
        @endif
    @endforeach
</div>
@endsection
