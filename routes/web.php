<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Services\MailchimpNewsletter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Validation\ValidationException;

/*Home*/
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('/posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::post('newsletter',NewsletterController::class);


/*Authentication*/
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


/*Admin*/
//Dashboard
Route::get('admin/posts',[AdminPostController::class,'index'])->middleware('admin');
//New Posts
Route::post('admin/posts',[AdminPostController::class,'store'])->middleware('admin');
Route::get('admin/posts/create',[AdminPostController::class,'create'])->middleware('admin');
Route::get('admin/posts/{post:id}/edit',[AdminPostController::class,'edit'])->middleware('admin');
Route::patch('admin/posts/{post:id}',[AdminPostController::class,'update'])->middleware('admin');
Route::delete('admin/posts/{post:id}',[AdminPostController::class,'destroy'])->middleware('admin');






















// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'posts' => $category->posts,
//         'currentCategory' => $category,
//         'categories' => Category::all()
//     ]);
// })->name('category');


// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts.index', [
//         'posts' => $author->posts
//     ]);
// });
