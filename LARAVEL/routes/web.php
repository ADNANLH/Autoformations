<?php

use App\Models\Post;
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





// Route::get('/blog', function (Request $request) {
//     //obtenir le path de cette lien // "blog"
//     // return [
//     //     "name" => $request->path(),
//     //     "article" => "article 1"
//     // ];

//     // obtenir le lien copmlet  "http:\/\/127.0.0.1:8000\/blog"
//     // return [
//     //     "name" => $request->url(),
//     //     "article" => "article 1"
//     // ];

//     //pour obtenir tout les parametre de url --{"name":"adnan"} -- le lien http://127.0.0.1:8000/blog?name=adnan
//     // return [
//     //     "name" => $request->all(),
//     //     "article" => "article 1"
//     // ];


//     //pour obtenir une seule parametre de url --"name":"adnan"  -- le lien http://127.0.0.1:8000/blog?name=adnan&age=22
//     return [
//         "name" => $request->input('name', 'lharrak'),  
//         "age" => $request->input('age'),  
//         "article" => "article 1"
//     ];


// });





// Route::get('/blog', function (Request $request) {
//     return [
//         "link" => \route('blog.show', ['slug' => 'article', 'id' => 13]),
//         // display =  {"link":"http:\/\/127.0.0.1:8000\/blog\/article-13"}
      
//     ];


// })->name('blog.index');




// url = http://127.0.0.1:8000/blog/mon-article-1
//result == ' {"slug":"mon-article","id":"1"} '

//url http://127.0.0.1:8000/blog/mon-article-1?name=adnan
// result == {"slug":"mon-article","id":"1","name":"adnan"}




// Route::get('/blog/{slug}/{id}', function(string $slug, string $id, Request $request){
//     return [
//         'slug' => $slug,
//         'id' => $id,
//         "name" => $request->input('name', 'lharrak'),  

//     ];
// })->where([
//     'id' => '[0-9]+',
//     'slug' => '[a-z0-9\-]+'
// ])->name('blog.show');

Route::prefix('/blog')->name('blog.')->group(function (){
    Route::get('/', function (Request $request) {


        //pour ajouter les post sur la base de donnee

        // $post = new Post();
        // $post->title = 'Mon premier article';
        // $post->slug = 'Mon-premier-article';
        // $post->content = 'Mon content';
        // $post->save();
        // return $post;

        //pour aficher tout les donnee sur la database
        // return Post::all();
        //display == [{"id":1,"title":"Mon premier article","slug":"Mon-premier-article","content":"Mon content","created_at":"2023-10-24T21:33:42.000000Z","updated_at":"2023-10-24T21:33:42.000000Z"}]

        //pour aficher une spesific donnee sur la database
        // return Post::all(['id', 'title']);
        //display ==  [{"id":1,"title":"Mon premier article"}]


        //pour aficher une spesific donnee avec une ID
        // return Post::find(1);
        // {"id":1,"title":"Mon premier article","slug":"Mon-premier-article","content":"Mon content","created_at":"2023-10-24T21:33:42.000000Z","updated_at":"2023-10-24T21:33:42.000000Z"}


        //pour aficher des donnee avec une pagination
        // return Post::paginate(1);
        // {"current_page":1,"data":[{"id":1,"title":"Mon premier article","slug".......

        //pour aficher une specific donne avec une id
        // return Post::where('id', '>' , 0)->limit(1)->get() ; // OR return Post::where('id', '>' , 0)->first();

        //pour modifier une element avec un ID
        // $post = Post::find(1);
        // $post->title = 'New title';
        // $post->save();

        //pour supprimer une element 
        // $post->delete();

        //pour créer une nouvelle element 
         $post = Post::create([
            'title' => 'create title',
            'slug' => 'create-slug',
            'content' => 'create content',
         ]);

         
         //pour modifier
         $post = Post::where('id', '>' , 0)->update([
            'title' => 'create title',
            'slug' => 'create-slug',
            'content' => 'create content',
         ]);



        
        return [
            "link" => \route('blog.show', ['slug' => 'article', 'id' => 13]),
            // display == {"link":"http:\/\/127.0.0.1:8000\/blog\/article-13"}
        
        ];


    })->name('index');

    Route::get('/{slug}/{id}', function(string $slug, string $id, Request $request){
        return [
            'slug' => $slug,
            'id' => $id,
            "name" => $request->input('name', 'lharrak'),  

        ];
    })->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ])->name('show');

});
