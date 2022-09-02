
<div class="flex items-center bg-white rounded-lg border shadow-md flex-row w-full hover:bg-gray-100 ">
    <div class="hidden w-full h-full rounded-l-lg md:flex bg-cover bg-center " 
    style="background-image: url('{{ $event->img }}');">
    </div>

    <div class="flex flex-col justify-between p-4 h-full w-max w-full leading-normal">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{$event->title}}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$event->resume}}</p>
        <div class="flex justify-between items-end">
            <a href="{{ route('detail',$event->id) }}" class="flex-none inline-flex items-center">
                Mas info...
            </a>
            @if(isset($suscribed) && !$suscribed && $event->date > date('Y-m-d'))
            <a href="{{ route('suscribe', $event->id) }}" class='text-white font-bold'>
                <button type="button" class="flex-init bg-green-400 hover:bg-green-700 py-2 px-2 rounded">
                    Me apunto
                </button>
            </a>
            @endif
        </div>
    </div>
</div>
