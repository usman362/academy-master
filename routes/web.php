<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\EnrollController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', [HomeController::class,'home']);
Route::get('about_us', [HomeController::class,'about_us']);
Route::get('privacy_policy', [HomeController::class, 'privacy_policy']);
Route::get('terms_and_condition', [HomeController::class,'terms_and_condition']);
Route::get('home', [HomeController::class, 'home']);
Route::get('course-detail/{id}', [HomeController::class,'course']);
Route::get('all_course', [HomeController::class,'all_course']);
Route::post('search_query', [HomeController::class,'search_course']);
Route::get('start_lesson/{id}', [HomeController::class,'start_lesson']);
Route::get('lesson/{id}', [HomeController::class,'lesson']);
Route::get('quiz/{id}', [HomeController::class,'quizpage']);
Route::get('question/{id}', [HomeController::class,'questionpage']);
Route::post('course_remove/{id}',[HomeController::class,'remove_course']);
Route::get('my_wishlist', [HomeController::class,'my_wishlist']);
Route::get('my_messages', [HomeController::class,'my_message']);
Route::get('user_profile', [HomeController::class,'my_profile']);
Route::get('user_profile_pic', [HomeController::class,'my_profile_pic']);
Route::get('user_profile_login', [HomeController::class,'my_profile_login']);
Route::post('profile_update/{id}',[HomeController::class,'profile_update']);
Route::post('profileinfo_update/{id}',[HomeController::class,'profileinfo_update']);
Route::post('wishlist', [HomeController::class,'wishlist']);
Route::post('enrollto', [HomeController::class,'enroll']);
Route::get('wishlist_remove/{id}',[HomeController::class,'wishlist_remove']);
Route::get('/instructor_detail/{id}',[HomeController::class,'instructor_detail']);
Route::post('review',[HomeController::class,'review']);
Route::post('reviewupdate/{id}',[HomeController::class,'reviewupdate']);
Route::post('Student-Register',[StudentController::class, 'storestudent']);

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

// Route::get('password/reset', Email::class)
//     ->name('password.request');

// Route::get('password/reset/{token}', Reset::class)
//     ->name('password.reset');

// Route::middleware('auth')->group(function () {
//     Route::get('email/verify', Verify::class)
//         ->middleware('throttle:6,1')
//         ->name('verification.notice');

//     Route::get('password/confirm', Confirm::class)
//         ->name('password.confirm');
// });

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');




        Route::get('/dashboard', [CourseController::class,'dashboard']);
        // Route::get('/', 'CourseController@dashboard');
        
        Route::resource('Course',CourseController::class);
        Route::get('messages',[CourseController::class,'message']);
        Route::post('messagedel/{id}',[CourseController::class,'messagedel']);
        Route::resource('Student',StudentController::class);
        Route::resource('Teacher',TeacherController::class);
        Route::resource('Enroll',EnrollController::class);
        Route::resource('Category',CategoryController::class);
        Route::resource('Curriculum', CurriculumController::class);
        Route::get('my_courses', [HomeController::class,'my_course']);
        Route::get('addsection/{id}',[CurriculumController::class,'section']);
        Route::get('addlesson/{id}',[CurriculumController::class,'lesson']);
        Route::post('lessonstore',[CurriculumController::class,'lessonstore']);
        Route::post('lessonstore/{id}',[CurriculumController::class,'lessonupdate']);
        Route::get('addquiz/{id}',[CurriculumController::class,'quiz']);
        Route::post('quizstore',[CurriculumController::class,'quizstore']);
        Route::post('quizstore/{id}',[CurriculumController::class,'quizupdate']);
        Route::post('lessonupdate',[CurriculumController::class,'lessonupdate']);
        
        
        
        Route::get('editlesson/{id}',[CurriculumController::class,'editlesson']);
        Route::get('editquiz/{id}',[CurriculumController::class,'editquiz']);
        
        
        Route::get('deletelesson/{id}',[CurriculumController::class,'deletelesson']);
        Route::get('deletequiz/{id}',[CurriculumController::class,'deletequiz']);
        
        Route::get('question/{id}',[CurriculumController::class,'question']);
        Route::get('addquestion/{id}',[CurriculumController::class,'addquestion']);
        Route::post('storequestion', [CurriculumController::class,'storequestion']);
        Route::get('editquestion/{id}',[CurriculumController::class,'editquestion']);
        Route::post('updatequestion/{id}',[CurriculumController::class,'updatequestion']);
        Route::get('deletequestion/{id}',[CurriculumController::class,'deletequestion']);
    
    
        // Route::get('admin-revenue', function(){
        //     return view('pages.Reports.admin_revenue');
        // });
    
        // Route::resource('instructor-revenue', 'ReportController');
    
        // Route::get('manage-profile/{id}','StudentController@profile');
        // Route::post('update-profile/{id}','StudentController@profileupdate');
    
        // Route::get('become-instructor/{id}','StudentController@instructor');
        // Route::post('storeinstructor','StudentController@storeinstructor');

});

Route::view('Chat', 'chat')
        ->middleware('auth');
