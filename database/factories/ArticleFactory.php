<?php

namespace Database\Factories;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        $title = $this->faker->sentence;

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'status' => StatusEnum::Published->value,
            'image' => asset('storage/images/articles/01HTDPYQT6FZFP523D6DVNR9QP.jpg'),
            'meta_title' => $this->faker->text(60),
            'meta_description' => $this->faker->text(160),
            'excerpt' => $this->faker->paragraph,
            'content' => collect($this->faker->paragraphs(5))->map(fn ($p) => "<p>$p</p>")->implode(''),
        ];
    }
}
