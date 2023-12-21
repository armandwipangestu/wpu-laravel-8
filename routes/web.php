<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome', [
        'title' => 'Welcome'
    ]);
});

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Arman Dwi Pangestu",
        "email" => "armandwi.pangestu7@gmail.com",
        "image" => "arman.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Arman Dwi Pangestu',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi aliquid perspiciatis possimus. Quae sapiente molestiae perferendis ut dolorum illum fugit corrupti! Ratione pariatur quis odio! Explicabo quo incidunt velit aliquam iure, doloribus natus molestiae ab officiis, ea distinctio fugit dolores eos quam magni aliquid libero nihil ex iusto unde? Voluptates!'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Sandhika Galih',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus, nobis qui. Officia eius, debitis eveniet nisi culpa quas, voluptate enim impedit ipsa corrupti sapiente nesciunt mollitia facilis at cumque laudantium.'
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});

// Halaman Single Post
Route::get('posts/{slug}', function ($slug) {
    $blog_post = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Arman Dwi Pangestu',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi aliquid perspiciatis possimus. Quae sapiente molestiae perferendis ut dolorum illum fugit corrupti! Ratione pariatur quis odio! Explicabo quo incidunt velit aliquam iure, doloribus natus molestiae ab officiis, ea distinctio fugit dolores eos quam magni aliquid libero nihil ex iusto unde? Voluptates!'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Sandhika Galih',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus, nobis qui. Officia eius, debitis eveniet nisi culpa quas, voluptate enim impedit ipsa corrupti sapiente nesciunt mollitia facilis at cumque laudantium.'
        ]
    ];

    $new_post = [];

    foreach ($blog_post as $post) {
        if ($post['slug'] === $slug) {
            $new_post += $post;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
