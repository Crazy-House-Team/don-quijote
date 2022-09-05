@extends('layouts.app')

@section('content')
<div class="w-auto border-2 border-gray-300 p-2.5 rounded dark:border-gray-700 ">
<h2 class="block bg-blue-200 py-1 px-1 rounded" >Creación de nuevo evento</h2>

<form action="{{route('storeEvent')}}" method = 'post'>
    @csrf
  <div class="mb-6">
    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título del evento</label>
    <input maxlength="100" type="text" id="title"  name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
  </div>

  <div class="mb-6">
    <label for="resume" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sinopsis</label>
    <textarea  rows="4" maxlength="150" id="resume" name="resume" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required=""></textarea>
  </div>

  <div class="mb-6">
    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descripción</label>
    <textarea  rows="4" maxlength="500" id="description" name="description" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required=""></textarea>
  </div>

  <div class="mb-6">
    <label for="place" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Localización del evento</label>
    <input maxlength="150" type="text" id="place" name="place" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
  </div>

  <div class="mb-6">
    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dirección del evento</label>
    <input maxlength="150" type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
  </div>


  <div class="flex justify-start ">
  <div class="mb-6">
    <label for="date" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fecha del evento</label>
    <input type="date" id="date" name="date" class="w-48 pr-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
    </div>

    <div class="mb-6">
    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hora del evento</label>
    <input type="time" id="time" name="time" class=" w-48 pl-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
  </div>
</div>

  <div class="mb-6">
    <label for="img" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Imagen del evento</label>
    <input maxlength="250" type="text" id="img" name="img" placeholder="Imagen del evento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
  </div>

  <div class="mb-6">
    <label for="max_participants" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Máximo de participantes</label>
    <input type="number" id="max_participants" name="max_participants" class="w-48 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
  </div>

  <div class="mb-6">
    <label for="favorite" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 pr-4">Evento destacado</label>
    <input type="checkbox" id="favorite" name="favorite" 
    class="bg-gray-50 border border-gray-300 rounded-lg w-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>

  <div class="flex justify-center">
    <button type="submit" class="mr-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
    <a href= "{{route('admin')}}">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">  
      Cancelar
      </button>
    </a>
    
  </div>
</form>
</div>

@endsection
