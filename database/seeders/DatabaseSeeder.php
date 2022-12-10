<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        // \App\Models\Category::factory(10)->create();
        // \App\Models\Question::factory(100)->create();
        // \App\Models\Comment::factory(100)->create();

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            QuestionSeeder::class,
            CommentSeeder::class,


        ]);
    }
}
