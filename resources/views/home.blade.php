@extends('layouts.app')

@section('content')

<h1>Asociación Cultural Don Quijote</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque recusandae natus porro obcaecati accusamus doloremque totam, et mollitia minus consequatur pariatur fuga ipsa modi architecto error ad! Nam, quo unde.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi placeat unde facere quaerat dolore eum sapiente labore amet error voluptas nobis doloremque quidem rem, deserunt ut incidunt! Sed, eius dolor!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, omnis quas culpa at optio, dolores ea voluptates nostrum voluptatum doloribus officia aut quisquam, voluptatibus velit doloremque consequatur neque beatae libero!
</p>
@include('components.carousel')

<h2 class="text-3xl font-bold mb-12 text-center">Próximos eventos</h2>
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
</div>

@endsection
