<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->count(10)->create();

        // DB::table('categories')->insert([
        //     'name' => 'Versity',
        // ]);
        // DB::table('categories')->insert([
        //     'name' => 'Study',
        // ]);

        // DB::table('categories')->insert([
        //     'name' => 'Sports',
        // ]);
    }
}
