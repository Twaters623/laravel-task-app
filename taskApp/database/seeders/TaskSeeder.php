<?php
namespace Database\Seeders;
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
'materials_required'=> 'Trash bags',
'deadline' => '2025-02-20 ',
'priority' => 2, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);

Task::create([
'task_name' => 'Do homework',
'task_location' => 'Study room',
'time_complexity' => 2, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Books, notebook, pen',
'deadline' => '2025-02-20 ',
'priority' => 3, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);

Task::create([
'task_name' => 'Clean room',
'task_location' => 'Bedroom',
'time_complexity' => 2, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Cleaning supplies, vacuum',
'deadline' => '2025-02-20 ',
'priority' => 2, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);

Task::create([
'task_name' => 'Wash dishes',
'task_location' => 'Kitchen',
'time_complexity' => 1, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Dish soap, sponge',
'deadline' => '2025-02-20 ',
'priority' => 2, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);

Task::create([
'task_name' => 'Fold laundry',
'task_location' => 'Living room',
'time_complexity' => 1, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Clothes',
'deadline' => '2025-02-20 ',
'priority' => 2, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);

Task::create([
'task_name' => 'Vacuum the floor',
'task_location' => 'Living room',
'time_complexity' => 2, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Vacuum cleaner',
'deadline' => '2025-02-20 ',
'priority' => 3, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);



}
}
