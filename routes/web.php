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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Alvin willian",
        "email" => "alvinwillian299.com",
        "image" => "img.jpg"
    ]);
});




Route::get('/blog', function () {$blog_post = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Alvin Willian",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque error atque odio ipsum itaque est commodi possimus quod minima, pariatur numquam ducimus explicabo quos, distinctio autem consequatur similique optio harum tempora magnam odit facilis culpa illo consectetur. Eligendi sit unde qui mollitia commodi beatae temporibus tempore quod odio rerum sed, pariatur amet minus? Libero tempore ipsa facilis quasi magnam porro debitis sed animi similique ea expedita impedit quod architecto facere accusantium harum aspernatur natus repudiandae, velit dolores, reiciendis quam exercitationem."
    ],
    [
        "title" => "Judul Post kedua",
        "slug" => "judul-post-kedua",
        "author" => "Nivla Nailliw",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque error atque odio ipsum itaque est commodi possimus quod minima, pariatur numquam ducimus explicabo quos, distinctio autem consequatur similique optio harum tempora magnam odit facilis culpa illo consectetur. Eligendi sit unde qui mollitia commodi beatae temporibus tempore quod odio rerum sed, pariatur amet minus? Libero tempore ipsa facilis quasi magnam porro debitis sed animi similique ea expedita impedit quod architecto facere accusantium harum aspernatur natus repudiandae, velit dolores, reiciendis quam exercitationem."
    ],
    ];
    return view('post', [
        "title" => "Post",
        "post" => $blog_post
    ]);
});
//Halaman single post
Route::get('post/{slug}', function($slug){$blog_post = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Alvin Willian",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque error atque odio ipsum itaque est commodi possimus quod minima, pariatur numquam ducimus explicabo quos, distinctio autem consequatur similique optio harum tempora magnam odit facilis culpa illo consectetur. Eligendi sit unde qui mollitia commodi beatae temporibus tempore quod odio rerum sed, pariatur amet minus? Libero tempore ipsa facilis quasi magnam porro debitis sed animi similique ea expedita impedit quod architecto facere accusantium harum aspernatur natus repudiandae, velit dolores, reiciendis quam exercitationem."
    ],
    [
        "title" => "Judul Post kedua",
        "slug" => "judul-post-kedua",
        "author" => "Nivla Nailliw",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque error atque odio ipsum itaque est commodi possimus quod minima, pariatur numquam ducimus explicabo quos, distinctio autem consequatur similique optio harum tempora magnam odit facilis culpa illo consectetur. Eligendi sit unde qui mollitia commodi beatae temporibus tempore quod odio rerum sed, pariatur amet minus? Libero tempore ipsa facilis quasi magnam porro debitis sed animi similique ea expedita impedit quod architecto facere accusantium harum aspernatur natus repudiandae, velit dolores, reiciendis quam exercitationem."
    ],
    ];

    $new_post = [];
    foreach($blog_post as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('pos',[
        "title" => "Single post",
        "post" => $new_post
    ]);
});