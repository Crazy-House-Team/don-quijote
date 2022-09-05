@extends('layouts.app')

@section('content')
<div class="text-center mt-2.5 mb-3">
    <h1 class= "mt-2 mb-2">Asociación Cultural Don Quijote</h1>
    <p class=" text-justify-center mt-3 mb-3">La Asociación Cultural Don Quijote es una agrupación sin
        ánimo de lucro que apoya la lectura, la creación literaria y la cultura en general.
        Nuestro objetivo es fomentar la cultura y la creatividad. Tenemos en común la afición y el
        gusto de escribir, así como la promoción de artistas y autores.
        Como asociación cultura moderna, no nos olvidamos del mundo digital y disponemos de talleres
        de iniciación a tecnologías digitales. En definitiva, proponemos talleres que fomenten la cultura, el arte,
        el arte digital, y cualquier otro proyecto que implique la socialización.
</div>

@include('components.carousel')

<h2 class="text-white text-start bg-primary mt-6 mb-6 pt-2 pb-2 ps-2 ">Próximos eventos</h2>
<div class="grid grid-cols-1 gap-4 md:grid-cols-2  auto-rows-max">

    @foreach ($events as $event)
        @if($event->date > date('Y-m-d'))
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
