@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">Mis Tareas</h1>
        <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition">
            Nueva Tarea
        </a>
    </div>

    <ul class="space-y-4">
        @if ($tasks->isNotEmpty())
            @foreach ($tasks as $task)
            <li class="bg-white shadow-md rounded-lg p-4 flex justify-between items-center">
                <div>
                    <h2 class="font-semibold text-lg text-gray-800">{{ $task->title }}</h2>
                    <p class="text-gray-600">{{ $task->description }}</p>
                </div>
                <div class="flex space-x-2">
                    <a href="{{ route('tasks.edit', $task) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-md shadow-md hover:bg-yellow-600 transition">
                        Editar
                    </a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 text-white px-3 py-1 rounded-md shadow-md hover:bg-red-600 transition">
                            Eliminar
                        </button>
                    </form>
                </div>
            </li>
            @endforeach
        @else
            <li class="text-center text-gray-500">No hay tareas disponibles.</li>
        @endif
    </ul>
</div>
@endsection
