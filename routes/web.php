<?php

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

Route::group(['middleware' => 'auth'],function(){
    Route::get('/posts', 'PostController@index')
    ->name('posts.index')
    ;
Route::get('posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

});

// class Person {
//     protected function run()
//     {
        
//     }

//     private function ay7aga()
//     {
        
//     }
// }

// class Student extends Person
// {

//     public function dailyRoutine()
//     {
//         $this->wakeUp();
//         $this->eat();
//         $this->walk();
//         $this->run();
//     }



//     private function wakeUp()
//     {

//     }

//     function eat()
//     {

//     }

//     function walk()
//     {

//     }
// }

// $ahmed = new Student;
// // $ahmed->wakeUp();
// // $ahmed->eat();
// // $ahmed->walk();
// $ahmed->dailyRoutine(); //


// $ahmed->wakeUp(); // throw exception cause it's private
// $ahmed->run(); // throw exception cause it's protected



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');