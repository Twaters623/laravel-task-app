@extends('layouts.app')
@section('content')

    <h1 class="text-2xl font-bold text-gray-800 mb-2 text-center">Task Details</h1>
    <main class="m-2 flex flex-col text-white  border-4 border-black shadow-md">
        <div class="bg-purple-500 shadow-md hover:bg-purple-700 p-4 border border-black">
            <strong>Task Name:</strong> {{ $task->task_name }}
        </div>
        <div class="bg-purple-500 shadow-md hover:bg-purple-700 p-4 border border-black">
            <strong>Location:</strong> {{ $task->task_location }}
        </div>
        <div class="bg-purple-500 shad-md hover:bg-purple-700 p-4 border border-black">
            <strong>Time Complexity:</strong> {{ $task->time_complexity }}
        </div>
        <div class="bg-purple-500 shadow-md hover:bg-purple-700 p-4 border border-black">
            <strong>Materials Required:</strong> {{ $task->materials_required }}
        </div>
        <div class="bg-purple-500 shadow-md hover:bg-purple-700 p-4 border border-black">
            <strong>Deadline:</strong> {{ $task->deadline }}
        </div>
        <div class="bg-purple-500 shadow-md hover:bg-purple-700 p-4 border border-black">
            <strong>Priority:</strong> {{ $task->priority }}
        </div>
        <div class="bg-purple-500 shadow-md hover:bg-purple-700 p-4 border border-black">
            <strong>Category:</strong> {{ $task->category }}
        </div>
    </main>

    <section style="margin-top:20px;">
    <a href="{{ route('tasks.edit', $task->id) }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Edit Task</a>
    <a href="{{ route('tasks.index') }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Back to List</a>
    </section>

@endsection