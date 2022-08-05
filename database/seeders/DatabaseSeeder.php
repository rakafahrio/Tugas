<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
           'nama' => 'Raka Fahrio',
           'username' => 'rakafahrio',
           'email' => 'tefu@gmail.com',
           'password' => bcrypt(12345)
        ]);

        // User::create([
        //    'nama' => 'Raka Fahrio Pratama',
        //    'email' => 'yerutefu@gmail.com',
        //    'password' => bcrypt(12345)
        // ]);


        User::factory(3)->create();
 
        Category::create([
            'nama' => 'Web Progamming',
            'slug' => 'web-progamming'
        ]);

        Category::create([
            'nama' => 'Web Design',
            'slug' => 'web-design'
        ]);
 
        Category::create([
            'nama' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //    'title' => 'Judul Pertama',
        //    'slug' => 'judul-pertama',
        //    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.doloremVoluptatem voluptatum totam quod vitae distinctio est at rerum et ratione,dolorem nulla temporibus provident velit? Autem laborum magnam maxime doloremque quasi.',
        //    'category_id' => 1,
        //    'user_id' => 1
        // ]);

        // Post::create([
        //    'title' => 'Judul Ke Dua',
        //    'slug' => 'judul-ke-dua',
        //    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.doloremVoluptatem voluptatum totam quod vitae distinctio est at rerum et ratione,dolorem nulla temporibus provident velit? Autem laborum magnam maxime doloremque quasi.',
        //    'category_id' => 1,
        //    'user_id' => 1
        // ]);

        // Post::create([
        //    'title' => 'Judul Ke Tiga',
        //    'slug' => 'judul-ke-tiga',
        //    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.doloremVoluptatem voluptatum totam quod vitae distinctio est at rerum et ratione,dolorem nulla temporibus provident velit? Autem laborum magnam maxime doloremque quasi.',
        //    'category_id' => 2,
        //    'user_id' => 1
        // ]);

        // Post::create([
        //    'title' => 'Judul Ke Empat',
        //    'slug' => 'judul-ke-empat',
        //    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.doloremVoluptatem voluptatum totam quod vitae distinctio est at rerum et ratione,dolorem nulla temporibus provident velit? Autem laborum magnam maxime doloremque quasi.',
        //    'category_id' => 2,
        //    'user_id' => 2
        //]);


        // \App\Models\User::factory()->create([
        //     'nama' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
