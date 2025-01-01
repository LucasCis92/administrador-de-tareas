@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">Editar Tarea</h1>
        <a href="{{ route('tasks.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-gray-600 transition">
            Volver
        </a>
    </div>

    <form action="{{ route('tasks.update', $task) }}" method="POST" class="bg-white shadow-md rounded-lg p-6 space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="block text-lg font-semibold text-gray-800">Título</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}" class="w-full mt-2 p-2 border rounded-md focus:ring focus:ring-yellow-200 focus:outline-none" required>
        </div>
        <div>
            <label for="description" class="block text-lg font-semibold text-gray-800">Descripción</label>
            <textarea name="description" id="description" rows="5" class="w-full mt-2 p-2 border rounded-md focus:ring focus:ring-yellow-200 focus:outline-none">{{ $task->description }}</textarea>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-yellow-600 transition">
                Actualizar
            </button>
        </div>
    </form>
</div>
@endsection
