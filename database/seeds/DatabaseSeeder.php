<?php

use Illuminate\Database\Seeder;
use App\Product;
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
        // factory(User::class)->times(30)->create();
        // factory(Product::class)->times(30)->create();

        // Del archivo de Jeff
        factory(User::class)->times(10)->create()->each(function ($user) {
            factory(Product::class)->times(10)->create([
                'user_id' => $user->id
            ]);
        });
    }
}
