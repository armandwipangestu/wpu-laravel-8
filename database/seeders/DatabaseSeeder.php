<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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

        User::create([
            'name' => 'Arman Dwi Pangestu',
            'email' => 'armandwi.pangestu7@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Sandhika Galih',
            'email' => 'sandhikagalih@gmail.com',
            'password' => bcrypt('54321')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sed quis, perferendis adipisci placeat, quidem rem mollitia quam voluptate, excepturi voluptas soluta quos. Officiis similique nihil unde quibusdam, iste quae cupiditate iure maxime! Fugiat doloremque dignissimos adipisci omnis saepe rem possimus tenetur! Voluptates omnis eaque facere architecto asperiores a odio illo nemo quam alias repellat praesentium aspernatur, soluta voluptate sapiente doloremque minus quisquam dolores. Voluptate sit blanditiis odio quos. Ipsa error nam distinctio! Illo voluptatibus, quia tempore eos fuga vero consequatur libero fugiat enim consectetur facilis sint corporis delectus illum, eius nemo tempora dolor iusto eligendi rem eum veritatis. Voluptatibus?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sed quis, perferendis adipisci placeat, quidem rem mollitia quam voluptate, excepturi voluptas soluta quos. Officiis similique nihil unde quibusdam, iste quae cupiditate iure maxime! Fugiat doloremque dignissimos adipisci omnis saepe rem possimus tenetur! Voluptates omnis eaque facere architecto asperiores a odio illo nemo quam alias repellat praesentium aspernatur, soluta voluptate sapiente doloremque minus quisquam dolores. Voluptate sit blanditiis odio quos. Ipsa error nam distinctio! Illo voluptatibus, quia tempore eos fuga vero consequatur libero fugiat enim consectetur facilis sint corporis delectus illum, eius nemo tempora dolor iusto eligendi rem eum veritatis. Voluptatibus?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sed quis, perferendis adipisci placeat, quidem rem mollitia quam voluptate, excepturi voluptas soluta quos. Officiis similique nihil unde quibusdam, iste quae cupiditate iure maxime! Fugiat doloremque dignissimos adipisci omnis saepe rem possimus tenetur! Voluptates omnis eaque facere architecto asperiores a odio illo nemo quam alias repellat praesentium aspernatur, soluta voluptate sapiente doloremque minus quisquam dolores. Voluptate sit blanditiis odio quos. Ipsa error nam distinctio! Illo voluptatibus, quia tempore eos fuga vero consequatur libero fugiat enim consectetur facilis sint corporis delectus illum, eius nemo tempora dolor iusto eligendi rem eum veritatis. Voluptatibus?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sed quis, perferendis adipisci placeat, quidem rem mollitia quam voluptate, excepturi voluptas soluta quos. Officiis similique nihil unde quibusdam, iste quae cupiditate iure maxime! Fugiat doloremque dignissimos adipisci omnis saepe rem possimus tenetur! Voluptates omnis eaque facere architecto asperiores a odio illo nemo quam alias repellat praesentium aspernatur, soluta voluptate sapiente doloremque minus quisquam dolores. Voluptate sit blanditiis odio quos. Ipsa error nam distinctio! Illo voluptatibus, quia tempore eos fuga vero consequatur libero fugiat enim consectetur facilis sint corporis delectus illum, eius nemo tempora dolor iusto eligendi rem eum veritatis. Voluptatibus?',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
