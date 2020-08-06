<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Chatbox;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Product;
use App\Models\Rating;
use App\Models\Suggestion;
use App\Models\User;

use Faker\Factory as Faker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    protected $user;
    private $faker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
        $this->faker = Faker::create();
    }

    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_it_has_many_orders(){
        $order = factory(Order::class)->create([
            'user_id' => $this->user->id
        ]);
        $this->assertTrue($this->user->orders->contains($order));
    }

    public function test_it_has_many_comments(){
        $product = factory(Product::class)->create();
        $comment = factory(Comment::class)->create([
            'user_id' => $this->user->id,
            'product_id' => $product->id,
        ]);

        $this->assertTrue($this->user->comments->contains($comment));
    }

    public function test_it_has_many_ratings(){
        $product = factory(Product::class)->create();
        $rating = factory(Rating::class)->create([
            'user_id' => $this->user->id,
            'product_id' => $product->id,
            'rating_star' => rand(1,5),
        ]);

        $this->assertTrue($this->user->ratings->contains($rating));
    }

    public function test_it_has_many_suggestions(){
        $suggestion = factory(Suggestion::class)->create([
            'user_id' => $this->user->id,
            'category_id' => Category::all()[rand(1, Category::all()->count()-1)],
            'product_name' => $this->faker->name,
            'description' =>  $this->faker->text,
            'image' => 'default.png',
            'status' => rand(1,3),
        ]);
        $this->assertTrue($this->user->suggestions->contains($suggestion));
    }

    public function test_it_has_many_chatboxes(){
        $chatbox = factory(Chatbox::class)->create([
            'sender_id' => $this->user->id,
            'receiver_id' => User::all()[rand(1, User::all()->count()-1)]
        ]);
        $this->assertEquals($chatbox->sender_id, $this->user->id);
    }

}
