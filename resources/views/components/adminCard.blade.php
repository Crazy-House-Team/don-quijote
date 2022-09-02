<div class="border-2 m-4 border-gray-300 dark:border-gray-700 rounded">
    <div id="accordion-flush" data-accordion="collapse" data-active-classes="shadow bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
        <h2 id="accordion-flush-heading-{{ $event->id }}">
            <button type="button" class="flex items-center justify-between w-full p-2.5 rounded font-medium text-left bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-accordion-target="#accordion-flush-body-{{ $event->id }}" aria-expanded="true" aria-controls="accordion-flush-body-{{ $event->id }}">
                <span>Título : {{ $event->title }}</span>
                <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-{{ $event->id }}" class=" p-2.5" style="background-color: rgb(255, 255, 255);" aria-labelledby="accordion-flush-heading-{{ $event->id }}">
            <div class="py-5 font-light">
                <h3 class="mb-2 text-gray-500 dark:text-gray-400">{{ $event->resume }}</h3>
                <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $event->description }}</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">
                    <span class="text-gray-700 font-bold dark:text-gray-400">Lugar: </span> {{ $event->place }}
                </p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">
                    <span class="text-gray-700 font-bold dark:text-gray-400">Dirección: </span> {{ $event->address }}
                </p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">
                <span class="text-gray-700 font-bold dark:text-gray-400">Fecha y hora: </span> {{ date('d-m-Y',strtotime($event->date)) }} a las {{date('H:i', strtotime($event->time))}}
                </p>

                <div>
                        <button type="button" data-modal-toggle="popup-modal" class=" text-white bg-blue-400 hover:bg-blue-700 text-white font-bold w-24 py-2 px-2 rounded">
                            Borrar
                        </button>
                        <button type="button" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded w-24">
                            <a href="{{route('editEvent',$event->id)}}" class='visited:no-underline link:no-underline active:no-underline no-underline hover:no-underline text-white font-bold '>Modificar</a>
                        </button>
                        <label for="default-toggle-{{$event->id}}" class="inline-flex relative items-center cursor-pointer">
                        <span >Destacado </span>
                        <input type="checkbox" id='default-toggle-{{$event->id}}' disabled {{($event->favorite == true ? 'checked' : '')}}>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.modals.modalDelete')
