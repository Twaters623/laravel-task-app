<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([

            'task_name' => 'Take out trash',
            'task_location' => 'Kitchen',
            'time_complexity' => 1, // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required' => 'Trash bags',
            'deadline' => '2025-02-20 10:00:00',
            'priority' => 2, // (1 => low, 2 => medium, 3 => high)
            'category' => 'chores'
        ]);
        // add another Task::create([]); array for each item to seed
        Task::create([
            'task_name' => 'Wash dishes',
            'task_location' => 'Kitchen',
            'time_complexity' => 2,
            'materials_required' => 'Dish soap, Sponge',
            'deadline' => '2025-02-20 11:00:00',
            'priority' => 3,
            'category' => 'chores'
        ]);

        Task::create([
            'task_name' => 'Vacuum living room',
            'task_location' => 'Living room',
            'time_complexity' => 3,
            'materials_required' => 'Vacuum cleaner',
            'deadline' => '2025-02-20 13:00:00',
            'priority' => 2,
            'category' => 'chores'
        ]);

        Task::create([
            'task_name' => 'Complete project report',
            'task_location' => 'Office',
            'time_complexity' => 2,
            'materials_required' => 'Computer, Documents',
            'deadline' => '2025-02-20 14:00:00',
            'priority' => 1,
            'category' => 'work'
        ]);

        Task::create([
            'task_name' => 'Fold laundry',
            'task_location' => 'Bedroom',
            'time_complexity' => 3,
            'materials_required' => 'Clean clothes',
            'deadline' => '2025-02-20 14:00:00',
            'priority' => 1,
            'category' => 'chores'
        ]);

        Task::create([
            'task_name' => 'Take a walk',
            'task_location' => 'Park',
            'time_complexity' => 2,
            'materials_required' => 'Comfortable shoes',
            'deadline' => '2025-02-20 15:00:00',
            'priority' => 3,
            'category' => 'health'
        ]);

        Task::create([
            'task_name' => 'Schedule dentist appointment',
            'task_location' => 'Phone',
            'time_complexity' => 2,
            'materials_required' => 'Phone, Calendar',
            'deadline' => '2025-02-20 16:00:00',
            'priority' => 3,
            'category' => 'health'
        ]);


    }
}