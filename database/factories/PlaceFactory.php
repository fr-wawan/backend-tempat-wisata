<?php

namespace Database\Factories;

use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Place::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(1),
            'slug' => $this->faker->slug(),
            'description' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(fn ($p) => "<p>$p</p>")->implode(''),
            'image' => 'places/01HPEBA11P94ST79NQX8SAPWA5.jpg',
            'address' => $this->faker->sentence(1),
            'maps' => '<p><iframe id="map-canvas" class="map_part"  height="800" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=England, UK&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com">google maps embed</a> and <a href="https://allabeviljas.se/">allabeviljas.se</a></iframe></p>',
        ];
    }
}
