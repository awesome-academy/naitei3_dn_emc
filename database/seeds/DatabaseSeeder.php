<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        factory(App\User::class, 10)->create();
        $this->call(CategoriesTableSeeder::class);
        factory(App\Models\Product::class, 30)->create();
        $this->call(ProductCategoryTableSeeder::class);
    }
}
