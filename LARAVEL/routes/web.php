<?php

use Illuminate\Http\Request;
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
    return view('welcome');
});

// Route::get('/blog', function () {
//     return "bonjour";
// });


Route::get('/blog', function (Request $request) {
    //obtenir le path de cette lien // "blog"
    // return [
    //     "name" => $request->path(),
    //     "article" => "article 1"
    // ];

    // obtenir le lien copmlet  "http:\/\/127.0.0.1:8000\/blog"
    // return [
    //     "name" => $request->url(),
    //     "article" => "article 1"
    // ];

    //pour obtenir tout les parametre de url --{"name":"adnan"} -- le lien http://127.0.0.1:8000/blog?name=adnan
    // return [
    //     "name" => $request->all(),
    //     "article" => "article 1"
    // ];


    //pour obtenir une seule parametre de url --"name":"adnan"  -- le lien http://127.0.0.1:8000/blog?name=adnan&age=22
    return [
        "name" => $request->input('name', 'lharrak'),  
        "age" => $request->input('age'),  
        "article" => "article 1"
    ];


});
// url = http://127.0.0.1:8000/blog/mon-article-1
//result == ' {"slug":"mon-article","id":"1"} '

//url http://127.0.0.1:8000/blog/mon-article-1?name=adnan
// result == {"slug":"mon-article","id":"1","name":"adnan"}

Route::get('/blog', function (Request $request) {
    return [
        "name" => $request->input('name', 'lharrak'),  
        "age" => $request->input('age'),  
        "article" => "article 1"
    ];


});



Route::get('/blog/{slug}-{id}', function(string $slug, string $id, Request $request){
    return [
        'slug' => $slug,
        'id' => $id,
        "name" => $request->input('name', 'lharrak'),  

    ];
})->where([
    'id' => '[0-9]+',
    'slug' => '[a-z0-9\-]+'
]);
