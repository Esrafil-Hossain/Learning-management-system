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

Route::prefix('admin')->group(function() {

    //course
    Route::get('/course', 'CourseController@course')->name('admin.course');
    Route::post('/course/store', 'CourseController@create')->name('course.store');
    Route::get('/course/delete/{id}', 'CourseController@delete')->name('course.delete');
    Route::get('/course/edit/{id}', 'CourseController@edit')->name('course.edit');
    Route::put('/course/update/{id}', 'CourseController@update')->name('Course.update');

    //certificate
    Route::get('/certificate', 'CertificateController@certificate')->name('admin.certificate');
    Route::post('/certificate/store', 'CertificateController@create')->name('certificate.store');
    Route::get('/certificate/delete/{id}', 'CertificateController@delete')->name('certificate.delete');

    //exam
    Route::get('/exam', 'ExamController@exam')->name('admin.exam');
    Route::post('/exam/store', 'ExamController@create')->name('exam.store');
    Route::get('/exam/delete/{id}', 'ExamController@delete')->name('exam.delete');
    Route::get('/exam/edit/{id}', 'ExamController@edit')->name('exam.edit');
    Route::put('/exam/update/{id}', 'ExamController@update')->name('exam.update');
    Route::get('/answer-download/{answer}', 'ExamController@answerdownload')->name('answer.download');



    //student
    Route::get('/student', 'StudentController@student')->name('admin.student');
    Route::get('/student/dellete/{id}', 'StudentController@delete')->name('student.delete');

    //instructor
    Route::get('/instructor', 'InstructorController@instructor')->name('admin.instructor');
    Route::post('/instructor/store', 'InstructorController@create')->name('instructor.store');
    Route::get('/instructor/delete/{id}', 'InstructorController@delete')->name('instructor.delete');
    Route::get('/instructor/edit/{id}', 'InstructorController@edit')->name('instructor.edit');
    Route::put('/instructor/update/{id}', 'InstructorController@update')->name('instructor.update');

    //order
    Route::get('/order', 'OrderController@order')->name('admin.order');
    Route::get('/order/delete/{id}', 'OrderController@delete')->name('order.delete');
    Route::get('/order/changestatus/{id}', 'OrderController@changestatus')->name('order.status');

});
