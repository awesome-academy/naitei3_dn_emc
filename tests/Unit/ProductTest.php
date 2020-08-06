<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Product;
use App\Models\Rating;
use App\Models\User;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    protected $product;
    private $faker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Faker::create();
        $this->product = factory(Product::class)->create();
    }

    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_it_has_many_ratings(){
        $user = factory(User::class)->create();
        $rating = factory(Rating::class)->create([
            'user_id' => $user->id,
            'product_id' => $this->product->id,
            'rating_star' => rand(1, 5),
        ]);

        $this->assertTrue($this->product->ratings->contains($rating));
    }

    public function test_it_has_many_comments(){
        $user = factory(User::class)->create();
        $comment = factory(Comment::class)->create([
            'user_id' => $user->id,
            'product_id' => $this->product->id,
        ]);

        $this->assertTrue($this->product->comments->contains($comment));
    }

    public function test_it_has_many_categories(){
        $category = Category::find(rand(1, Category::all()->count() - 1));
        if(!$this->product->categories()->get()->contains($category)){
            $this->product->categories()->attach($category);
        }

        $this->assertInstanceOf(BelongsToMany::class, $this->product->categories());
        $this->assertTrue($this->product->categories()->get()->contains($category));
    }

    public function test_it_has_many_orderItems(){
        if(Order::all()->first() !== null){
            $orderItem = Order::all()->first()->orderItems()->create();
            $orderItem->product_id = $this->product->id;
            $orderItem->save();
        }

        $this->assertEquals($this->product->id, $orderItem->product_id);
    }

}
