@extends('layouts.app')
@section('content')
<h1 class="text-2xl font-bold text-gray-800 mb-2">Task Details</h1>

<div class="rounded-lg bg-blue-500 shadow-md mb-2 hover:bg-sky-700">
<strong>Task Name:</strong> {{ $task->task_name }}
</div>
<div class="rounded-lg bg-blue-500 shadow-md mb-2">
<strong>Location:</strong> {{ $task->task_location }}
</div>
<div class="rounded-lg bg-blue-500 shadow-md mb-2">
<strong>Time Complexity:</strong> {{ $task->time_complexity }}
</div>
<div class="rounded-lg bg-blue-500 shadow-md mb-2">
<strong>Materials Required:</strong> {{ $task->materials_required }}
</div>
<div class="rounded-lg bg-blue-500 shadow-md mb-2">
<strong>Deadline:</strong> {{ $task->deadline }}
</div>
<div class="rounded-lg bg-blue-500 shadow-md mb-2">
<strong>Priority:</strong> {{ $task->priority }}
</div>
<div class="rounded-lg bg-blue-500 shadow-md mb-2">
<strong>Category:</strong> {{ $task->category }}
</div>
<div style="margin-top:20px;">
<a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
<a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
