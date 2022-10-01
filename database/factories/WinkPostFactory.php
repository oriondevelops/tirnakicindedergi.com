<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Wink\WinkPost;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WinkPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WinkPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // TODO may create relationship factories
        // https://laravel.com/docs/9.x/database-testing#has-many-relationships
        $title = $this->faker->words(2, true);

        return [
            'id' => $this->faker->uuid(),
            'slug' => Str::slug($title),
            'title' => $title,
            'excerpt' => $this->faker->paragraph(1, true),
            'body' => $this->faker->paragraph(6, true),
            'published' => $this->faker->boolean(),
            'publish_date' => $this->faker->dateTimeThisDecade(),
            'featured_image' => $this->faker->imageUrl(),
            'featured_image_caption' => $this->faker->words(3, true),
            'author_id' => $this->faker->uuid(),
        ];
    }
}
