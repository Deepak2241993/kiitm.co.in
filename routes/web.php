<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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


Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/blog-list',[HomeController::class,'blog']);
Route::get('/blog-list/{id}',[HomeController::class,'blogAsPerCategory']);
Route::get('/blog/{slug?}',[HomeController::class,'blog_details']);
Route::get('/blog_search',[HomeController::class,'blog_search']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/service-list',[HomeController::class,'services']);
Route::get('/category/{slug}',[HomeController::class,'category']);
Route::get('/services/{slug}',[HomeController::class,'services_details']);
Route::get('/faq',[HomeController::class,'faq']);
Route::get('/programs/{cat_slug}/{slug}',[HomeController::class,'course_details']);
Route::get('/programs/{slug}',[HomeController::class,'course_list']);



Route::post('/contactform',[HomeController::class,'contactform']);
Route::post('/blog-comment',[HomeController::class,'blogCommentStore']);
Route::post('/newsletter-subscribe',[HomeController::class,'subscribe']);
Route::get('/terms',[HomeController::class,'terms']);
Route::get('/privacy',[HomeController::class,'privacy']);
Route::get('/thank-you',[HomeController::class,'thankyou']);

Route::get('/login',[AdminController::class,'login']);
Route::get('/logout',[AdminController::class,'logout']);
Route::post('/login',[AdminController::class,'login_post']);


Route::prefix('admin')->middleware('login')->group(function () {
    Route::resource('/dashboard',DashboardController::class);
    Route::resource('/teams',TeamController::class);
    Route::resource('/sliders',SliderController::class);
    Route::resource('/blogs',BlogController::class);
    Route::resource('/blogs-comments',BlogcommentController::class);
    Route::resource('/pages',PageController::class);
    Route::resource('/settings',WebsitesettingController::class);
    Route::resource('/portfolios',PortfolioController::class);
    Route::resource('/contents',StaticPageController::class);
    Route::resource('/enquirys',EnquiryController::class);
    Route::resource('/faqs',FaqController::class);
    Route::resource('/categories',CategoriesController::class);
    Route::resource('/clients',ClientController::class);
    Route::resource('/newsletters',NewsletterController::class);
    Route::get('/career','EnquiryController@career')->name('career');
    Route::get('/subscribers','EnquiryController@subscriber')->name('subscribers');
    Route::get('/subscribers/{id}','EnquiryController@subscriber_delete')->name('subscriber_delete');
    Route::get('/career/{id}','EnquiryController@career_delete')->name('career_delete');
    Route::post('/newsletters-send','NewsletterController@sendmail')->name('newsletters-send');
    Route::resource('/testimonials',TestimonialController::class);
    Route::resource('/jobs',JobController::class);

});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear ');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    echo Artisan::output();
});

Route::get('/command', function() {

    Artisan::call('make:model Language -mcr');
    Artisan::call('db:seed');
    Artisan::call('db:seed');
    echo Artisan::output();
});


