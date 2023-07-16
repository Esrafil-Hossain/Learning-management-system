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
    return redirect()->route('home');
});


    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/signup/store', 'LoginController@usersingup')->name('user.signup');
    Route::get('/user-logout', 'LoginController@logout')->name('user.logout');

    //aboutus
    Route::get('/about-us', 'AboutusController@aboutus')->name('website.aboutus');

    //contactus
    Route::get('/contact-us', 'ContactusController@contactus')->name('website.contactus');

    //course
    Route::get('/courses', 'CourseController@course')->name('website.course');

    //instructor
    Route::get('/instructor', 'InstructorController@instructor')->name('website.instructor');

    //order
    Route::group(['middleware' => 'check_user'], function () {

    Route::get('/checkout/{courseId}', 'OrderController@checkout')->name('website.checkout');
    Route::post('/order/store', 'OrderController@order')->name('website.order');

});

    //Profile
    Route::get('/user-profile', 'ProfileController@userprofile')->name('user.profile');
    Route::get('/download/{question}', 'ProfileController@download')->name('question.download');
    Route::post('/answer/store', 'ProfileController@answersubmit')->name('answer.submit');
    Route::get('/certificate-download/{certificate}', 'ProfileController@cirtificatedownload')->name('certificate.download');
    Route::get('/material-download/{material}', 'ProfileController@materialdownload')->name('material.download');

//error message
Route::get('/error-message', 'ErrorController@examerror')->name('exam.error');

