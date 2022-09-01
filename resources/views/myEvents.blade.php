@extends('layouts.app')

@section('content')
<h1>Mis eventos</h1>

<div class="grid grid-cols-1 gap-4 md:grid-cols-2  auto-rows-max">
    @foreach ($events as $event)
    @include('components.card')
    @endforeach
</div>
@endsection

