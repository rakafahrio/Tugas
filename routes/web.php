<?php

use App\Models\Post;

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatAlternate;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;


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
        "title" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        "title" => "All Post",
        'active' => 'blog',
        "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
    ]);
});


Route::get('/about', function () {
    return  view ('about' , [
        "title" => "About",
        'active' => 'about',
        "nama" => "Raka Fahrio",
        "email" => "yorutefu@gmail.com",
        "image" => "teru.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

// Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
// Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth')->middleware('admin');

Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin');
Route::get   ('/dashboard/categories/{category:slug}/edit', [AdminCategoryController::class, 'edit'])->name('employer.categories.edit');
Route::put   ('/dashboard/categories/{category:slug}', [AdminCategoryController::class, 'update'])->name('employer.categories.update');
Route::get   ('/dashboard/categories/{category:slug}', [AdminCategoryController::class, 'show'])->name('employer.categories.show');
Route::get   ('/dashboard/categories',[AdminCategoryController::class, 'index'])->name('employer.categories.index');
Route::delete('/dashboard/categories/{category:slug}', [AdminCategoryController::class, 'destroy'])->name('employer.categories.destroy');



    // $new_post = [];
   // foreach($blog_posts as $post) {
   // if($post["slug"] === $slug) {
   //     $new_post = $post;
   // }
   //  }

