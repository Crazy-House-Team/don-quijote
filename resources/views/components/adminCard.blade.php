<form action="{{ route('delete', $event->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-gray-900" data-inactive-classes="text-gray-900">
        <h2 id="accordion-flush-heading-{{ $event->id }}">
            <button type="button" class="flex items-center justify-between w-full p-3 rounded font-medium text-left text-gray-900 bg-white border border-gray-200" data-accordion-target="#accordion-flush-body-{{ $event->id }}" aria-expanded="false" aria-controls="accordion-flush-body-{{ $event->id }}">
                <span>Título : {{ $event->title }}</span>
                <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-{{ $event->id }}" class="hidden" aria-labelledby="accordion-flush-heading-{{ $event->id }}">
            <div class="p-3 bg-white font-light rounded mb-2 border border-gray-200">
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

                <div class="flex justify-between items-end">
                    <div class="flex space-x-4" >
                        <button type="button" data-modal-toggle="pop" class=" text-white bg-red-400 hover:bg-red-700 text-white font-bold w-24 py-2 px-2 rounded">
                            Borrar
                        </button>
                        <button type="button" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded w-24">
                            <a href="{{route('editEvent',$event->id)}}" class='no-underline text-white font-bold '>Modificar</a>
                        </button>
                    </div>
                    <label for="default-toggle-{{$event->id}}" class="inline-flex relative py-0 items-center cursor-pointer">
                    <span >Destacado </span>
                    <input type="checkbox" id='default-toggle-{{$event->id}}' disabled {{($event->favorite == true ? 'checked' : '')}}>
                    </label>
                </div>
            </div>
        </div>
    </div>

<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="popup-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500">¿Seguro que quieres eliminar este evento?</h3>
                <button data-modal-toggle="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Sí
                </button>
                <button data-modal-toggle="pop" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                    No
                </button>
            </div>
        </div>
    </div>
</div>
</form>
