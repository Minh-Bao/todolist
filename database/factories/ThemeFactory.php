<?php

namespace Database\Factories;

use App\Models\Theme;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThemeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Theme::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraphs(3, true),
            'task_url' => 'bao.dwwm.ovh' .rand(10, 255),
            'project_id' => Project::all()->random()->id

        ];
    }
}
