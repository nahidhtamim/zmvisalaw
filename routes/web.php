<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MetaTagController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TeamController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'index']);
Route::get('/our-services/{slug}',[HomeController::class, 'service_details']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/blog-details/{slug}',[HomeController::class, 'blog_details']);
Route::get('/attorney-bios',[HomeController::class, 'team']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::post('/send-email', [MailController::class, 'contactMail'])->name('contact.send');

Auth::routes(['login' => false, 'register' => false]);
Route::get('admin-do-create', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm');
Route::post('admin-do-create', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');

Route::get('admin-do-login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('admin-do-login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');

Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard',[AdminController::class, 'dashboard']);
    Route::post('/update-password', [AdminController::class, 'updatePassword']);

    // Route::post('/add-video',[VideoController::class, 'addVideo']);
    Route::get('/edit-about/{id}',[AboutController::class, 'editAbout']);
    Route::post('/update-about/{id}',[AboutController::class, 'updateAbout']);

    Route::get('/view-services',[ServiceController::class, 'viewAllServices']);
    Route::post('/add-service',[ServiceController::class, 'addService']);
    Route::get('/edit-service/{id}',[ServiceController::class, 'editService']);
    Route::post('/update-service/{id}',[ServiceController::class, 'updateService']);
    Route::get('/delete-service/{id}',[ServiceController::class, 'deleteService']);
    Route::get('/make-service-active/{id}', [ServiceController::class, 'activeService']);
    Route::get('/make-service-deactive/{id}', [ServiceController::class, 'deactiveService']);

    Route::get('/view-socials',[SocialController::class, 'viewAllSocials']);
    Route::post('/add-social',[SocialController::class, 'addSocial']);
    Route::get('/edit-social/{id}',[SocialController::class, 'editSocial']);
    Route::post('/update-social/{id}',[SocialController::class, 'updateSocial']);
    Route::get('/delete-social/{id}',[SocialController::class, 'deleteSocial']);
    Route::get('/make-social-active/{id}', [SocialController::class, 'activeSocial']);
    Route::get('/make-social-deactive/{id}', [SocialController::class, 'deactiveSocial']);

    Route::get('/view-blogs',[BlogController::class, 'viewAllBlogs']);
    Route::post('/add-blog',[BlogController::class, 'addBlog']);
    Route::get('/edit-blog/{id}',[BlogController::class, 'editBlog']);
    Route::post('/update-blog/{id}',[BlogController::class, 'updateBlog']);
    Route::get('/delete-blog/{id}',[BlogController::class, 'deleteBlog']);
    Route::get('/make-blog-active/{id}', [BlogController::class, 'activeBlog']);
    Route::get('/make-blog-deactive/{id}', [BlogController::class, 'deactiveBlog']);
    // Route::get('/make-blog-featured/{id}', [BlogController::class, 'makeBlogFeatured']);
    // Route::get('/make-blog-not-featured/{id}', [BlogController::class, 'makeBlogNotFeatured']);

    Route::get('/view-pages',[PageController::class, 'viewAllPages']);
    Route::post('/add-page',[PageController::class, 'addPage']);
    Route::get('/edit-page/{id}',[PageController::class, 'editPage']);
    Route::post('/update-page/{id}',[PageController::class, 'updatePage']);
    Route::get('/delete-page/{id}',[PageController::class, 'deletePage']);
    Route::get('/make-page-active/{id}', [PageController::class, 'activePage']);
    Route::get('/make-page-deactive/{id}', [PageController::class, 'deactivePage']);

    Route::get('/view-teams',[TeamController::class, 'viewAllTeams']);
    Route::post('/add-team',[TeamController::class, 'addTeam']);
    Route::get('/edit-team/{id}',[TeamController::class, 'editTeam']);
    Route::post('/update-team/{id}',[TeamController::class, 'updateTeam']);
    Route::get('/delete-team/{id}',[TeamController::class, 'deleteTeam']);
    Route::get('/make-team-active/{id}', [TeamController::class, 'activeTeam']);
    Route::get('/make-team-deactive/{id}', [TeamController::class, 'deactiveTeam']);

    Route::get('/view-reviews',[ReviewController::class, 'viewAllReviews']);
    Route::post('/add-review',[ReviewController::class, 'addReview']);
    Route::get('/edit-review/{id}',[ReviewController::class, 'editReview']);
    Route::post('/update-review/{id}',[ReviewController::class, 'updateReview']);
    Route::get('/delete-review/{id}',[ReviewController::class, 'deleteReview']);
    Route::get('/make-review-active/{id}', [ReviewController::class, 'activeReview']);
    Route::get('/make-review-deactive/{id}', [ReviewController::class, 'deactiveReview']);

    Route::get('/view-sliders',[SliderController::class, 'viewAllSliders']);
    Route::post('/add-slider',[SliderController::class, 'addSlider']);
    Route::get('/edit-slider/{id}',[SliderController::class, 'editSlider']);
    Route::post('/update-slider/{id}',[SliderController::class, 'updateSlider']);
    Route::get('/delete-slider/{id}',[SliderController::class, 'deleteSlider']);
    Route::get('/make-slider-active/{id}', [SliderController::class, 'activeSlider']);
    Route::get('/make-slider-deactive/{id}', [SliderController::class, 'deactiveSlider']);

    Route::get('/view-metatags',[MetaTagController::class, 'viewMetaTags']);
    Route::post('/add-metatag',[MetaTagController::class, 'addMetaTag']);
    Route::get('/edit-metatag/{id}',[MetaTagController::class, 'editMetaTag']);
    Route::post('/update-metatag/{id}',[MetaTagController::class, 'updateMetaTag']);
    Route::get('/delete-metatag/{id}',[MetaTagController::class, 'deleteMetaTag']);
    Route::get('/make-metatag-active/{id}', [MetaTagController::class, 'activeMetaTag']);
    Route::get('/make-metatag-deactive/{id}', [MetaTagController::class, 'deactiveMetaTag']);

    
 });

 Route::get('/license',[HomeController::class, 'license']);