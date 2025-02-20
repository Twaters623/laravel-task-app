@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white text-gray-900 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold mb-6 text-purple-600">Create New Task</h1>

    {{-- Progress Indicator --}}
    <div class="mb-6">
        <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div id="progress-bar" class="bg-purple-500 h-2.5 rounded-full" style="width: 0%"></div>
        </div>
        <p id="progress-text" class="text-sm text-purple-600 mt-2">Progress: 0% completed</p>
    </div>

    <form action="" method="POST" id="task-form">
        @csrf

        {{-- Task Name --}}
        <div class="mb-6">
            <label for="task_name" class="block text-sm font-medium text-purple-600">Task Name</label>
            <input type="text" name="task_name" id="task_name" class="mt-1 block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 placeholder-gray-500" placeholder="e.g., Take out trash" required>
        </div>

        {{-- Task Location --}}
        <div class="mb-6">
            <label for="task_location" class="block text-sm font-medium text-purple-600">Location</label>
            <input type="text" name="task_location" id="task_location" class="mt-1 block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 placeholder-gray-500" placeholder="Kitchen, Garage">
        </div>

        {{-- Time Estimate --}}
        <div class="mb-6">
            <label for="time_complexity" class="block text-sm font-medium text-purple-600">Time Estimate</label>
            <select name="time_complexity" id="time_complexity" class="mt-1 block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                <option value="10">10 min</option>
                <option value="30">30 min</option>
                <option value="60">1 hour</option>
                <option value="120">2 hours</option>
                <option value="180">3 hours</option>
            </select>
        </div>

        {{-- Materials Required --}}
        <div class="mb-6">
            <label for="materials_required" class="block text-sm font-medium text-purple-600">Materials Required</label>
            <input type="text" name="materials_required" id="materials_required" class="mt-1 block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 placeholder-gray-500" placeholder="e.g., Trash Bags, Broom">
        </div>

        {{-- Deadline --}}
        <div class="mb-6">
            <label for="deadline" class="block text-sm font-medium text-purple-600">Deadline</label>
            <input type="datetime-local" name="deadline" id="deadline" class="mt-1 block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
        </div>

        {{-- Priority --}}
        <div class="mb-6">
            <label for="priority" class="block text-sm font-medium text-purple-600">Priority</label>
            <select name="priority" id="priority" class="mt-1 block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                <option value="1">Low (1)</option>
                <option value="2">Medium (2)</option>
                <option value="3">High (3)</option>
            </select>
        </div>

        {{-- Category --}}
        <div class="mb-6">
            <label for="category" class="block text-sm font-medium text-purple-600">Category</label>
            <input type="text" name="category" id="category" class="mt-1 block w-full bg-gray-100 border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 placeholder-gray-500" placeholder="e.g., chores, work, health">
        </div>

        {{-- Submit and Cancel Buttons --}}
        <div class="flex gap-6">
            <button type="submit" class="px-6 py-3 bg-purple-500 text-white rounded-md shadow-md hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-500">Create Task</button>
            <a href="{{ route('tasks.index') }}" class="px-6 py-3 bg-gray-200 text-gray-900 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500">Cancel</a>
        </div>

    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const formFields = [
            document.getElementById('task_name'),
            document.getElementById('task_location'),
            document.getElementById('time_complexity'),
            document.getElementById('materials_required'),
            document.getElementById('deadline'),
            document.getElementById('priority'),
            document.getElementById('category')
        ];

        const progressBar = document.getElementById('progress-bar');
        const progressText = document.getElementById('progress-text');

        formFields.forEach(field => {
            field.addEventListener('input', updateProgress);
        });

        function updateProgress() {
            let filledFields = formFields.filter(field => field.value.trim() !== '').length;
            let totalFields = formFields.length;
            let progress = (filledFields / totalFields) * 100;

            progressBar.style.width = `${progress}%`;
            progressText.textContent = `Progress: ${Math.round(progress)}% completed`;
        }
    });
</script>
@endsection
