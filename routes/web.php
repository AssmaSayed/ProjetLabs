<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactContactUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMainOfficeController;
use App\Http\Controllers\ContactPlaceholderController;
use App\Http\Controllers\HomeCardSectionController;
use App\Http\Controllers\HomeCarouselController;
use App\Http\Controllers\HomeCarouselIntroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePromotionController;
use App\Http\Controllers\HomeSectionController;
use App\Http\Controllers\HomeServiceController;
use App\Http\Controllers\HomeTestimonialController;
use App\Http\Controllers\HomeTitreController;
use App\Http\Controllers\HomeTitreSpanController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\NewsletterMailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicesFeatureController;
use App\Http\Controllers\ServicesFeatureImgController;
use App\Http\Controllers\ServicesServiceController;
use App\Http\Controllers\ServicesServicesCardController;
use App\Http\Controllers\ServicesTitreSpanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfilController;
use App\Http\Controllers\ValidateController;
use App\Models\HomePromotion;
use App\Models\UserProfil;
use Illuminate\Support\Facades\Auth;
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

//VALIDATE 
Route::get('validationUser', [ValidateController::class, 'index']);
Route::resource('validate', ValidateController::class);


// RESOURCE PAGES
Route::resource('/', HomeController::class);
Route::resource('services', ServiceController::class);
Route::resource('blog', BlogController::class);
Route::resource('contact', ContactController::class);

Route::resource('post', PostController::class);

//BACK OFFICE 
Route::resource('user', UserController::class);
Route::resource('userProfil', UserProfilController::class);

//MAILTRAP
Route::resource('newsletterMail', NewsletterMailController::class);

//EDIT HOME
Route::resource('user', UserController::class);
Route::resource('homeCard', HomeCardSectionController::class);
Route::resource('homeCarouselIntro', HomeCarouselIntroController::class);
Route::resource('homeCarousel', HomeCarouselController::class);
Route::resource('homePromotion', HomePromotionController::class);
Route::resource('homeSection', HomeSectionController::class);
Route::resource('homeServices', HomeServiceController::class);
Route::resource('homeTestimonial', HomeTestimonialController::class);
Route::resource('homeTitreSpan', HomeTitreSpanController::class);
Route::resource('homeTitre', HomeTitreController::class);

//EDIT SERVICES
Route::resource('servicesFeatures', ServicesFeatureController::class);
Route::resource('servicesFeaturesImg', ServicesFeatureImgController::class);
Route::resource('servicesServices', ServicesServiceController::class);
Route::resource('servicesServicesCard', ServicesServicesCardController::class);
Route::resource('servicesTitreSpan', ServicesTitreSpanController::class);

//EDIT NEWSLETTER
Route::resource('newsletter', NewsletterController::class);


//EDIT CONTACT
Route::resource('contactUs', ContactContactUsController::class);
Route::resource('contactMainOffice', ContactMainOfficeController::class);
Route::resource('contactPlaceholder', ContactPlaceholderController::class);

//EDIT BLOG


//POST
Route::post('/mail', [MailController::class, 'store']);





//AUTH MIDDLEWARE
Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


// Auth::routes();
Auth::routes();

