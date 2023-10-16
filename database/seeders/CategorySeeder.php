<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('categories')->upsert([
//            [
//                'name' => 'Women',
//                'slug' => 'women',
//                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor',
//            ], [
//                'name' => 'Men',
//                'slug' => 'men',
//                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor',
//            ], [
//                'name' => 'Kid',
//                'slug' => 'kid',
//                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor',
//            ], [
//                'name' => 'Accessories',
//                'slug' => 'accessories',
//                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor',
//            ]
//        ], 'slug');
        Category::factory(10)->create();
    }
}
