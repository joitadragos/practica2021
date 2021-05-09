<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

=======
use App\Models\Board;
use App\Models\BoardUser;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class TaskFactory
 *
 * @package Database\Factories
 */
>>>>>>> upstream/master
class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $model = Post::class;
=======
    protected $model = Task::class;
>>>>>>> upstream/master

    /**
     * Define the model's default state.
     *
     * @return array
     */
<<<<<<< HEAD
    public function definition()
    {
        return [
            'board' => Board::factory(),
            'name' => $this->faker->text(20),
            'description' => $this ->faker->text,
=======
    public function definition(): array
    {
        return [
            'board_id' => Board::factory(),
            'name' => $this->faker->text(20),
            'description' => $this->faker->text,
>>>>>>> upstream/master
            'status' => $this->faker->randomElement([Task::STATUS_CREATED, Task::STATUS_IN_PROGRESS, Task::STATUS_DONE]),
            'assignment' => $this->faker->randomElement([
                User::factory(), null, User::inRandomOrder()->first()->id, User::inRandomOrder()->first()->id, User::inRandomOrder()->first()->id
            ])
<<<<<<< HEAD
            ];
    }
=======
        ];
    }

>>>>>>> upstream/master
    /**
     * @return TaskFactory
     */
    public function configure(): TaskFactory
    {
        return $this->afterCreating(function (Task $task) {
            if ($task->assignment) {
                BoardUser::firstOrCreate([
                    'board_id' => $task->board_id,
                    'user_id' => $task->assignment
                ]);
            }
        });
    }
}
