@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Create New Task</h1>
    <form action="" method="POST">
        @csrf

        {{-- Task Name --}}
        <div class="mb-4">
            <label for="task_name" class="block text-sm font-medium text-gray-700">Task Name</label>
            <input type="text" name="task_name" id="task_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="e.g., Take out trash" required>
        </div>

        {{-- Task Location --}}
        <div class="mb-4">
            <label for="task_location" class="block text-sm font-medium text-gray-700">Location</label>
            <input type="text" name="task_location" id="task_location" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Kitchen, Garage" optional>
        </div>

        {{-- Time Estimate (or Time Complexity) --}}
        <div class="mb-4">
            <label for="time_complexity" class="block text-sm font-medium text-gray-700">Time Estimate</label>
            <select name="time_complexity" id="time_complexity" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="10">10 min</option>
                <option value="30">30 min</option>
                <option value="60">1 hour</option>
                <option value="120">2 hours</option>
                <option value="180">3 hours</option>
            </select>
        </div>

        {{-- Materials Required (Optional) --}}
        <div class="mb-4">
            <label for="materials_required" class="block text-sm font-medium text-gray-700">Materials Required</label>
            <input type="text" name="materials_required" id="materials_required" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="e.g., Trash Bags, Broom" optional>
        </div>

        {{-- Deadline (Optional) --}}
        <div class="mb-4">
            <label for="deadline" class="block text-sm font-medium text-gray-700">Deadline</label>
            <input type="datetime-local" name="deadline" id="deadline" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        {{-- Priority (Optional) --}}
        <div class="mb-4">
            <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
            <select name="priority" id="priority" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="1">Low (1)</option>
                <option value="2">Medium (2)</option>
                <option value="3">High (3)</option>
            </select>
        </div>

        {{-- Category (Optional) --}}
        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
            <input type="text" name="category" id="category" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="e.g., chores, work, health" optional>
        </div>

        {{-- Submit and Cancel Buttons --}}
        <div class="flex gap-4">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create Task</button>
            <a href="{{ route('tasks.index') }}" class="px-4 py-2 bg-gray-300 text-black rounded-md">Cancel</a>
        </div>

    </form>
</div>
@endsection
