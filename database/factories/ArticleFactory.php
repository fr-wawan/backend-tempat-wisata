<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Article::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(1),
            'slug' => $this->faker->slug(),
            'category_id' => 1,
            'content' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(fn ($p) => "<p>$p</p>")->implode(''),
            'image' => 'places/01HPEBA11P94ST79NQX8SAPWA5.jpg'
        ];
    }
}
