<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Travel','Tour','Destination','Drinks','Foods'];
        foreach ($categories as $category) {
            \Illuminate\Support\Facades\DB::table('categories')->insert([
                'category'=>$category,
                'slug'=> \Illuminate\Support\Str::slug($category)
            ]);
        }
    }
}
