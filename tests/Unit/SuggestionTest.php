<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Suggestion;
use App\Models\User;
use Faker\Factory as Faker;
use Tests\TestCase;

class SuggestionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    protected function setUp(): void
    {
        parent::setUp();
    }

    public function test_belongsTo_user_and_category()
    {
        $user = factory(User::class)->create();
        $faker = Faker::create();
        $category = Category::create([
            'name' => $faker->company,
            'description' => $faker->text,
            'parent_id' => Category::all()[rand(1, Category::all()->count() -1)]->id,
        ]);
        $suggestion = factory(Suggestion::class)->create([
            'user_id' => $user->id,
            'category_id' => $category->id,
            'product_name' => $faker->name,
            'description' =>  $faker->text,
            'image' => 'default.png',
            'status' => rand(1,3),
        ]);

        $this->assertInstanceOf(Category::class, $suggestion->category);
        $this->assertInstanceOf(User::class, $suggestion->user);
    }
}
