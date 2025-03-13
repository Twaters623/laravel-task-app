@extends('layouts.app')
@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white text-gray-900 rounded-lg shadow-lg">

    <h1 class="text-purple-700 block font-bold mt-2 text-center text-3xl ">Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT') {{-- Important for updating (PUT/PATCH) --}}
    <div>
    <label for="task_name" class="block text-sm font-medium text-purple-600">Task Name:</label>
    <input type="text" name="task_name" id="task_name" class="mt-2 mb-2 block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 placeholder-gray-500 px-px"
    value="{{ old('task_name', $task->task_name) }}">
    @error('task_name')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>
    <div>
    <label for="task_location" class="block text-sm font-medium text-purple-600">Location:</label>
    <input type="text" name="task_location" id="task_location" class="mt-2 mb-2 block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 placeholder-gray-500 px-px"
    value="{{ old('task_location', $task->task_location) }}">
    @error('task_location')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>
    <div>
    <label for="time_complexity" class="block text-sm font-medium text-purple-600">Time Complexity:</label>
    <input type="number" name="time_complexity" id="time_complexity" class="mt-2 mb-2  block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 placeholder-gray-500 px-px"
    value="{{ old('time_complexity', $task->time_complexity) }}" min="1" max="5">
    @error('time_complexity')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>
    <div>
    <label for="materials_required" class="block text-sm font-medium text-purple-600">Materials Required:</label>
    <input type="text" name="materials_required" id="materials_required" class= "mt-2 mb-2 block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 placeholder-gray-500 px-px"
    value="{{ old('materials_required', $task->materials_required) }}">
    @error('materials_required')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>
    <div>
    <label for="deadline" class="block text-sm font-medium text-purple-600">Deadline:</label>
    <input type="date" name="deadline" id="deadline" class="mt-2 mb-2  block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 placeholder-gray-500 px-px"
    value="{{ old('deadline', $task->deadline) }}">
    @error('deadline')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>
    <div>
    <label for="priority" class="block text-sm font-medium text-purple-600">Priority:</label>
    <input type="number" name="priority" id="priority"class="mt-2 mb-2  block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 placeholder-gray-500 px-px"
    value="{{ old('priority', $task->priority) }}" min="1" max="3">
    @error('priority')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>
    <div>
    <label for="category" class="block text-sm font-medium text-purple-600">Category:</label>
    <input type="text" name="category" id="category" class="mt-2 mb-2  block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 placeholder-gray-500 px-px"
    value="{{ old('category', $task->category) }}">
    @error('category')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>

    <div class="flex justify-evenly mt-4">
        <button type="submit" class="px-6 py-3 bg-purple-500 text-white rounded-md shadow-md hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-500 ">
            Update Task
        </button>
    </form>
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-6 py-3 bg-red-500 text-white rounded-md shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                Delete Task
            </button>
        </form>
    </div>


    </div>
@endsection
