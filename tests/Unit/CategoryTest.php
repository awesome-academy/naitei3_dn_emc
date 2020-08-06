<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Product;
use App\Models\Suggestion;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tests\TestCase;


class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    protected $category;
    private $faker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Faker::create();
        $this->category = Category::create([
            'name' => $this->faker->company,
            'description' => $this->faker->text,
            'parent_id' => Category::all()[rand(1, Category::all()->count() -1)]->id,
        ]);
    }

    public function test_it_has_many_products(){
        $product = Product::find(rand(1, Product::all()->count() - 1));
        if(!$this->category->products()->get()->contains($product)){
            $this->category->products()->attach($product);
        }

        $this->assertInstanceOf(HasMany::class, $this->category->suggestions());
        $this->assertTrue($this->category->products()->get()->contains($product));
    }

    public function test_it_has_many_suggestions(){
        $user = User::all()->first();
        $suggestion = factory(Suggestion::class)->create([
            'user_id' => $user->id,
            'category_id' => $this->category->id,
            'product_name' => $this->faker->name,
            'description' =>  $this->faker->text,
            'image' => 'default.png',
            'status' => rand(1,3),
        ]);

        //Kiem tra co phai la instance cua hasMany hay ko
        $this->assertInstanceOf(HasMany::class, $this->category->suggestions());
        //kiem tra Foreign Key
        $this->assertEquals('category_id', $this->category->suggestions()->getForeignKeyName());
        //kiem tra co chua suggestion vua tao hay khong
        $this->assertTrue($this->category->suggestions->contains($suggestion));
    }

    public function test_it_has_many_child_and_its_child(){
        $category_child = Category::create([
            'name' => $this->faker->company,
            'description' => $this->faker->text,
            'parent_id' => $this->category->id,
        ]);

        $category_parent = Category::findOrFail($this->category->parent_id);

        $this->assertEquals($this->category->parent_id, $category_parent->id);
        $this->assertEquals($this->category->id, $category_child->parent->id);
    }

}
