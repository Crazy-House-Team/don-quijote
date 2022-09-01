@extends('layouts.app')

@section('content')
<div class="text-center mt-2.5 mb-3">
<h1 class= "mt-2 mb-2">Asociación Cultural Don Quijote</h1>
<p class=" text-justify-center mt-3 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque recusandae natus porro obcaecati accusamus doloremque totam, et mollitia minus consequatur pariatur fuga ipsa modi architecto error ad! Nam, quo unde.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi placeat unde facere quaerat dolore eum sapiente labore amet error voluptas nobis doloremque quidem rem, deserunt ut incidunt! Sed, eius dolor!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, omnis quas culpa at optio, dolores ea voluptates nostrum voluptatum doloribus officia aut quisquam, voluptatibus velit doloremque consequatur neque beatae libero!
</p>
</div>

@include('components.carousel')

<h2 class="text-white text-start bg-primary mt-6 mb-6 pt-2 pb-2 ps-2 ">Próximos eventos</h2>
<div class="grid grid-cols-1 gap-4 md:grid-cols-2  auto-rows-max">

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
