<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Profile\UserprofileController;
use App\Http\Controllers\Program\ProgramsController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\Crud\InsertController;


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
//     return view('signup');
//  });

// // Route::get('/login', [App\Http\Controllers\LoginController::class,'index'])->name('login.index');

// Route::get('/signup', [App\Http\Controllers\SignupController::class,'index'])->name('signup.index');
// Route::post('/signup',[SignupController::class,'signupSubmit'])->name('signup.Submit');

// Route::get('/login', [LoginController::class,'index'])->name('login.index');
// Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.Submit');
// Route::post('add',[SignupController::class,'addData']);

Route::get('homepage',[HomepageController::class, 'home']);

Route::middleware(['guest-user'])->group(function () {
Route::get('user-signup', [SignupController::class, 'index']);
Route::post('user-store', [SignupController::class, 'addData']);


Route::get('user-login', [LoginController::class, 'loginIndex'])->name('login');
Route::post('login', [LoginController::class, 'userlogin']);
});


Route::middleware(['auth-user'])->group(function () {

    Route::get('dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');

    Route::get('logout', [logoutController::class, 'logout']);

    Route::get('Clang',[DashboardController::class,'clang']);

    Route::get('C++',[DashboardController::class,'Cplus']);
    Route::get('Java',[DashboardController::class,'Java']);

    Route::get('my-profile',[UserprofileController::class, 'myprofile']);
    Route::post('profile-update',[UserprofileController::class, 'profileupdate']);
});


//Contact us page routes;

Route::get('ContactUs', [ContactUsController::class, 'createForm']);

Route::post('contact-us', [ContactUsController::class, 'contactUs'])->name('contact.store');

//

Route::get('Programs', [InsertController::class, 'index']);

// Crud operation

// Route::get('insert',[ProgramsController::class, 'insert']);
// Route::post('add-program',[ProgramsController::class, 'addprogram']);

Route::get('insert',[InsertController::class, 'create']);
Route::post('add-program',[InsertController::class, 'store']);
