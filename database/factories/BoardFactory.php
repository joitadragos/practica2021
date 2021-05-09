<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

=======
use App\Models\Board;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class BoardFactory
 *
 * @package Database\Factories
 */
>>>>>>> upstream/master
class BoardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $model = Post::class;
=======
    protected $model = Board::class;
>>>>>>> upstream/master

    /**
     * Define the model's default state.
     *
     * @return array
     */
<<<<<<< HEAD
    public function definition()
=======
    public function definition(): array
>>>>>>> upstream/master
    {
        return [
            'name' => $this->faker->name,
            'user_id' => User::factory(),
        ];
    }
}
