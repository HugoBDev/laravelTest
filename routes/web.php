<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/accueil', [HelloController::class, "index"]);




Route::prefix('/blog')->group(function () {
    Route::get('/', function () {

        $post = new Post();
        $post->title = 'mon premier article'; 
        $post->slug = 'mon premier-article';
        $post->content = 'Mon contenu';
        $post->save();

     return $post ;



     
        return view('welcome');
    });
    Route::get('/test', function () {
        return 'ceci est le test';
    })->name('blog.show');
});
