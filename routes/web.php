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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about', function(){
// 		return view('pages.about');
// });


// Route::get('/about', function(){
// 		return view('pages.about');
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/encodercalc', 'EncoderCalcController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/send_email', 'SendEmailController@index');
Route::post('/send_email/send', 'SendEmailController@send');
Route::post('/sendemail', function (\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer){
		$mailer
		->to($request->input('mail'))
		->send(new \App\Mail\MyMail($request->input('title')));
		return redirect()->back();
})->name('sendmail');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('sendMarch', 'mailControllerMarch@send');
