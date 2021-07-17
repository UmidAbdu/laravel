<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        $user = User::factory()->create([
            'name' => 'Umid Abdugaffarov'
        ]);

        Post::factory(5)->create([
            'user_id' => $user -> id
            ]
        );

//        $user = User::factory()->create();
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family -> id,
//            'title' => 'My Family Post',
//            'slug' => 'my-family-post',
//            'excerpt' => 'Lorem ipsum dolar amet',
//            'body' => '<p>Praesent vitae eleifend massa. Mauris porttitor commodo tellus, eu mollis
//            tortor vehicula luctus. Suspendisse potenti. Cras velit ante, gravida nec nunc in, consequat
//            fringilla diam. Proin quis mollis libero, vitae sollicitudin metus. Morbi nec libero ut ante
//            tempor dictum ut et massa. Nam posuere id nulla tristique convallis. Donec condimentum lacus et
//            nulla laoreet facilisis. Quisque semper, turpis quis pharetra fringilla, libero arcu congue libero, nec
//            placerat ante purus a quam. Phasellus sapien lacus, efficitur id nisi sit amet, aliquam bibendum justo.
//            Pellentesque maximus a dui nec sagittis.</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work -> id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt' => 'Lorem ipsum dolar amet',
//            'body' => '<p>Praesent vitae eleifend massa. Mauris porttitor commodo tellus, eu mollis
//            tortor vehicula luctus. Suspendisse potenti. Cras velit ante, gravida nec nunc in, consequat
//            fringilla diam. Proin quis mollis libero, vitae sollicitudin metus. Morbi nec libero ut ante
//            tempor dictum ut et massa. Nam posuere id nulla tristique convallis. Donec condimentum lacus et
//            nulla laoreet facilisis. Quisque semper, turpis quis pharetra fringilla, libero arcu congue libero, nec
//            placerat ante purus a quam. Phasellus sapien lacus, efficitur id nisi sit amet, aliquam bibendum justo.
//            Pellentesque maximus a dui nec sagittis.</p>'
//        ]);

    }
}
