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


Auth::routes();

Route::get('/home', 'StudentControllers\StudentController@index')->name('home');

//student routes
Route::prefix('student')->group(function () {
    Route::post('/logout','Auth\LoginController@userLogout')->name('user.logout');
    Route::get('/questions/create','StudentControllers\QuestionController@create')->name('students.create.questions');
    Route::post('/questions/create','StudentControllers\QuestionController@store')->name('students.store.questions');
    Route::get('/questions/show/{id}','StudentControllers\QuestionController@show')->name('students.show.questions');
    Route::get('/myquestions','StudentControllers\QuestionController@myquestions')->name('students.myquestions');
    Route::get('/answers/myanswers','StudentControllers\AnswerController@myanswers')->name('answers.myanswers');
    Route::resource('/answers','StudentControllers\AnswerController');
    Route::resource('/comments','StudentControllers\CommentController');
    Route::resource('/replies','StudentControllers\ReplyController');

    Route::get('/studentprofile/{id}','ProfileControllers\StudentProfileController@student_view_student')->name('student_view_student');
    Route::get('/staffprofile/{id}','ProfileControllers\StaffProfileController@student_view_staff')->name('student_view_staff');

    Route::get('/books','BookController@student_index')->name('student.book.index');


    Route::get('/mail','MailController@student_mail')->name('student.mail');
});
//end student routes


//staff routes
Route::prefix('staff')->group(function () {

    Route::get('/login', 'Auth\StaffLoginController@showLoginForm')->name('staff.login');
    Route::post('/login', 'Auth\StaffLoginController@login')->name('staff.login.submit');
    Route::get('/register','Auth\StaffRegisterController@showRegistrationForm')->name('staff.register');
    Route::post('/register','Auth\StaffRegisterController@register')->name('staff.register.submit');
    Route::post('/logout','Auth\StaffLoginController@staffLogout')->name('staff.logout');

    Route::post('password/email','Auth\StaffForgotPasswordController@sendResetLinkEmail')->name('staff.password.email');
    Route::get('password/reset','Auth\StaffForgotPasswordController@showLinkRequestForm')->name('staff.password.request');
    Route::post('password/reset','Auth\StaffResetPasswordController@reset')->name('staff.password.update');
    Route::get('password/reset/{token}','Auth\StaffResetPasswordController@showResetForm')->name('staff.password.reset');

    Route::get('staffForum/MyAnswers','StaffControllers\StaffAnswerController@my_answers')->name('staffForum.my_answers');
    Route::resource('staffForum','StaffControllers\StaffAnswerController');

    Route::resource('announcements','StaffControllers\AnnouncementController');

    Route::get('/studentprofile/{id}','ProfileControllers\StudentProfileController@staff_view_student')->name('staff_view_student');
    Route::get('/staffprofile/{id}','ProfileControllers\StaffProfileController@staff_view_staff')->name('staff_view_staff');
    Route::get('/books','BookController@staff_index')->name('staff.book.index');
    Route::get('/','StaffControllers\StaffController@index')->name('staff.dashboard');

});
//end staff routes


//admin routes
Route::prefix('admin')->group(function () {

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::post('/logout','Auth\AdminLoginController@adminLogout')->name('admin.logout');

    Route::post('password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/reset','Auth\AdminResetPasswordController@reset')->name('admin.password.update');
    Route::get('password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


    Route::get('questions','AdminControllers\QuestionController@index')->name('admin.questions.index');
    Route::get('question/{id}/edit','AdminControllers\QuestionController@edit')->name('admin.edit.question');
    Route::put('question/{id}','AdminControllers\QuestionController@update')->name('admin.update.question');
    Route::resource('AdminForumAnswers','AdminControllers\AnswerController');
    Route::resource('AdminForumComments','AdminControllers\CommentController');

    Route::resource('admin-staff-management','AdminControllers\StaffController');
    Route::resource('admin-student-management','AdminControllers\StudentController');
    Route::get('/','AdminControllers\AdminController@index')->name('admin.dashboard');

    Route::get('/studentprofile/{id}','ProfileControllers\StudentProfileController@admin_view_student')->name('admin_view_student');
    Route::get('/staffprofile/{id}','ProfileControllers\StaffProfileController@admin_view_staff')->name('admin_view_staff');

    Route::get('/mail','MailController@admin_mail')->name('admin.mail');

    Route::resource('/books','BookController');
});
//end admin routes


//superadmin routes
Route::prefix('superadmin')->group(function () {
    //auth routes
    Route::get('/login', 'Auth\SuperadminLoginController@showLoginForm')->name('superadmin.login');
    Route::post('/login', 'Auth\SuperadminLoginController@login')->name('superadmin.login.submit');

    Route::post('/logout','Auth\SuperadminLoginController@superadminLogout')->name('superadmin.logout');

    Route::post('password/email','Auth\SuperadminForgotPasswordController@sendResetLinkEmail')->name('superadmin.password.email');
    Route::get('password/reset','Auth\SuperadminForgotPasswordController@showLinkRequestForm')->name('superadmin.password.request');
    Route::post('password/reset','Auth\SuperadminResetPasswordController@reset')->name('superadmin.password.update');
    Route::get('password/reset/{token}','Auth\SuperadminResetPasswordController@showResetForm')->name('superadmin.password.reset');
    //end auth routes

    Route::resource('departments','SuperadminControllers\DepartmentController');
    Route::resource('courses','SuperadminControllers\CourseController');
    Route::resource('admin-management','SuperadminControllers\AdminController');
    Route::resource('staff-management','SuperadminControllers\StaffController');
    Route::resource('student-management','SuperadminControllers\StudentController');

    Route::get('/studentprofile/{id}','ProfileControllers\StudentProfileController@superadmin_view_student')->name('superadmin_view_student');
    Route::get('/staffprofile/{id}','ProfileControllers\StaffProfileController@superadmin_view_staff')->name('superadmin_view_staff');

    Route::get('/mail','MailController@superadmin_mail')->name('superadmin.mail');

    Route::get('/','SuperadminControllers\SuperadminController@index')->name('superadmin.dashboard');
});
//end superadmin routes

    // Route::resource('questions','QuestionController');
//ajax controllers

        Route::get('ajax/classes_of_dept_id/{id}','AjaxController@classes_of_dept_id');
        Route::get('ajax/staffs_of_dept_id/{id}','AjaxController@staffs_of_dept_id');
        Route::post('ajax/student_on_staffans','AjaxController@student_on_staffans')->name('urlLike');

//end ajax controllers
Route::prefix('profiles')->group(function () {
        Route::resource('/staffprofile','ProfileControllers\StaffProfileController');
        Route::post('/staffprofile/bio','ProfileControllers\StaffProfileController@bio')->name('staff-bio');

        Route::resource('/studentprofile','ProfileControllers\StudentProfileController');
        Route::post('/studentprofile/bio','ProfileControllers\StudentProfileController@bio')->name('student-bio');
        Route::get('/studentprofile/cv','ProfileControllers\StudentProfileController@downloadcv')->name('student-cv');
});

Route::resource('/mail','MailController');
// Route::get("");    