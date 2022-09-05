<form action="{{ route('delete', $event->id) }}" method="post">
    @method('delete')
    @csrf
    <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-gray-900" data-inactive-classes="text-gray-900">
        <h2 id="accordion-flush-heading-{{ $event->id }}">
            <button type="button" class="flex items-center justify-between w-full p-3 rounded font-medium text-left text-gray-900 bg-white border border-gray-200" data-accordion-target="#accordion-flush-body-{{ $event->id }}" aria-expanded="false" aria-controls="accordion-flush-body-{{ $event->id }}">
                <span>Título : {{ $event->title }}</span>
                <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-{{ $event->id }}" class="hidden" aria-labelledby="accordion-flush-heading-{{ $event->id }}">
            <div class="p-3 bg-white font-light rounded mb-2 border border-gray-200">
                <div class="flex justify-between items-end mb-3 border-b border-gray-200">
                    <div class="flex space-x-4 mb-3">
                        <button type="button" data-modal-toggle="modal-delete-{{ $event->id }}" 
                        class="bg-red-400 hover:bg-red-700 text-white font-bold w-24 py-2 px-2 rounded">
                            Borrar
                        </button>
                        
                        <a href="{{route('editEvent',$event->id)}}">
                            <button type="button" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded w-24">    
                            Modificar
                            </button>
                        </a>
                        
                    </div>
                    <label for="default-toggle-{{$event->id}}" class="inline-flex relative py-0 items-center cursor-pointer mb-3">
                        <span class="mr-2">Destacado </span>
                        <input type="checkbox" id='default-toggle-{{$event->id}}' disabled {{($event->favorite == true ? 'checked' : '')}}>
                    </label>
                </div>
                <h3 class="mb-2 leading-9 text-gray-500">{{ $event->resume }}</h3>
                <p class="mb-2 leading-6 text-gray-500">{{ $event->description }}</p>
                <p class="mb-2 leading-9 text-gray-500">
                    <span class="text-gray-700 font-bold ">Lugar: </span> {{ $event->place }}
                </p>
                <p class="mb-2 leading-9  text-gray-500">
                    <span class="text-gray-700 font-bold">Dirección: </span> {{ $event->address }}
                </p>
                <p class="mb-2 leading-9  text-gray-500">
                    <span class="text-gray-700 font-bold">Fecha y hora: </span> {{ date('d-m-Y',strtotime($event->date)) }} a las {{date('H:i', strtotime($event->time))}}
                </p>
            </div>
        </div>
    </div>
    @include('components.modals.modalDelete')
</form>
