<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
          'Star Wars',
          'Transformers',
          'Los Simpsons',
          'Funko',
          'Tienda Geek'
        ];

        factory(User::class)->times(10)->create()->each(function ($user) {
            factory(Product::class)->times(10)->create([
                'user_id' => $user->id
            ]);
        });
    }
}
