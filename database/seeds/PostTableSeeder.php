<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['ham sandwich on white surface','White and red ceramic plate','Tasty & Delicious Foods'];

        foreach ($titles as $title){
            \Illuminate\Support\Facades\DB::table('posts')->insert([
                'category_id'=> rand(1,5),
                'title' => $title,
                'slug' => \Illuminate\Support\Str::slug($title),
                'content' => 'Molestiae  laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!'
  ,              'img' => 'placeholder'
            ]);
        }
    }
}
