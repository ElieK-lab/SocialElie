<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate(); //to make the table empty
        $user = User::factory()->create([ //this will make random data dor one user except the name
            'name' => 'Elie Karra'
        ]);
        Post::factory(100)->create([
            'user_id' => $user->id
        ]);
    }
}
