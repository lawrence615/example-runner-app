<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\TaskItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $position = 0;

        return [
            'title' => $this->faker->word(),
            // 'description' => $this->faker->text(),
            // 'position' => $position++
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Task $task) {
            TaskItem::factory($this->faker->numberBetween(5, 10))->sequence(fn ($sequence) => ['position' => $sequence->index])->create([
                'task_id' => $task->id
            ]);
        });
    }
}
