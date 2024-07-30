<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLogoController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\cart\AddToCartController;
use App\Http\Controllers\designer\CategoryController;
use App\Http\Controllers\designer\DesignerDashboardController;
use App\Http\Controllers\designer\LogoController;
use App\Http\Controllers\email\EmailController;
use App\Http\Controllers\favorite\FavoriteLogoController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\stripe\Stripecontroller;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\UserProfile\UserProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Jobs\SendEmailJob;

Route::get('/event', function () {
    return view('api.test-localstorage');
});
Route::get('/step', function () {
    return view('api.step');
});
// testing purpose route define

Route::get('user-profile',[UserProfileController::class,'userProfile']);




// Route::get('events', [AuthController::class, 'index']);

// end testing route area
//*************************Login Route ***********************//

Route::get('/watermark', [ImageController::class,'waterMArk']);
Route::post('image-process',[ImageController::class,'imageProcc']);
Route::get('/login', [AuthController::class, 'loginpage'])->name('login');
Route::post('/login-process', [AuthController::class, 'loginProcess'])->name('login_process');

//****************************Register Route *********************//
Route::get('/register', [AuthController::class, 'registrationPage']);
Route::post('/register', [AuthController::class, 'registrationProcess'])->name('register');

//*****************************LogOut Route **********************//
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//**************************Designer Route****************************//
Route::group(['middleware' => 'designer'], function () {
    Route::get('/designer-dashboard', [DesignerDashboardController::class, 'designerDashboard'])->name('designer_dashboard');
    Route::get('/designer-dashboard/add-logo', [LogoController::class, 'addlogoPage'])->name('logo_page');
    Route::post('/designer-dashboard/add-logo-process', [LogoController::class, 'addLogoProcess'])->name('add_logo_process');
    Route::get('designer-dashboard/categories', [CategoryController::class, 'categoriesPage'])->name('category_page');
    Route::post('/designer-dashboard/add-categories', [CategoryController::class, 'addCategoriesProcess'])->name('add_categories');
});

//****************************Admin Route Protected *******************************//
Route::group(['middleware' => 'admin'], function () {

    Route::get('admin-dashboard', [AdminController::class, 'adminDashboard'])->name('admin-dashboard');
    Route::get('admin-dashboard/logo-request', [AdminLogoController::class, 'logoRequest'])->name('logo_request');
    Route::get('admin-dashboard/logo-approve', [AdminLogoController::class, 'logoApprove'])->name('logo_approve');
    Route::get('admin-dashboard/logo-disapprove', [AdminLogoController::class, 'logoDisapprove'])->name('logo_disapprove');
    Route::get('admin-dashboard/approve-logo', [AdminLogoController::class, 'approvedLogo'])->name('approve_logo');
    Route::get('admin-dashboard/disaaprove-logo', [AdminLogoController::class, 'disapprovedLogo'])->name('disapprove_logo');
    Route::get('change-password',[AdminLogoController::class,'changepassword']);
    Route::post('change-pass-procc',[AdminLogoController::class,'changePassProcc']);
});

//****************************************User Route *************************************//
Route::get('/', [UserDashboardController::class, 'index'])->name('index');
Route::get('logo-details{slug?}', [UserDashboardController::class, 'logoDetails'])->name('logo_details');
Route::get('search', [UserDashboardController::class, 'searchLogo'])->name('search');
Route::post('add-review',[UserDashboardController::class,'addreview'])->name('add_review');


Route::get('check-api', [UserDashboardController::class, 'check_api']);
Route::post('store',[UserDashboardController::class,'store']);


//************************Forgot Password With OTP functinality*********************** //
Route::post('email-varify',[UserDashboardController::class,'emailVerify'])->name('email_verify');

//************************Cart Route*********************** //
Route::get('add-to-cart', [AddToCartController::class, 'addToCartPage'])->name('add_to_cart');
Route::get('user-cart-item', [AddToCartController::class, 'userCartitem'])->name('user_cart_item');
Route::get('category', [UserDashboardController::class, 'category'])->name('category');
Route::get('single-category-logo', [UserDashboardController::class, 'singleCategoryLogo']);

//******************************Stripe Route***********************************************//
Route::get('check-out', [Stripecontroller::class, 'checkout'])->name('check_out');;
Route::post('check-out', [Stripecontroller::class, 'checkout'])->name('check_out');;
Route::post('stripe-post', [Stripecontroller::class, 'stripePost'])->name('stripe_post');

//******************************Favorite Logo**************************//
Route::get('favorite-logo', [FavoriteLogoController::class, 'addToFavorite']);
Route::get('user-favorite-logo', [FavoriteLogoController::class, 'userFavoriteLogo']);

//**************************Remove Cart Logo **************************//
Route::get('remove-cart-logo', [AddToCartController::class, 'removeCartLogo']);

//************************Language Route*********************** //
// Route::get('/{locale}', [UserDashboardController::class, 'switchLang'])->name('switchLang');

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => ['setlocale']], function () {
    // Route::get('/', [UserDashboardController::class, 'switchLang'])->name('changeLang');
    Route::get('/', [UserDashboardController::class, 'switchLang']);
    Route::get('/', [UserDashboardController::class, 'index'])->name('index');
    Route::get('logo-details/{slug?}', [UserDashboardController::class, 'logoDetails'])->name('logo_details');
    Route::get('favorite-logo', [FavoriteLogoController::class, 'addToFavorite'])->name('add_to_favorite');
    Route::get('user-favorite-logo', [FavoriteLogoController::class, 'userFavoriteLogo'])->name('user_favorite_logo');
    Route::get('single-category-logo', [UserDashboardController::class, 'singleCategoryLogo'])->name('single_category');
    Route::get('search', [UserDashboardController::class, 'searchLogo'])->name('search');
    Route::get('category', [UserDashboardController::class, 'category'])->name('category');
    Route::get('user-cart-item', [AddToCartController::class, 'userCartitem']);
    Route::get('check-out', [Stripecontroller::class, 'checkout'])->name('check_out');
    Route::post('check-out', [Stripecontroller::class, 'checkout'])->name('check_out');
    Route::get('/register', [AuthController::class, 'registrationPage'])->name('register');
    Route::post('/register', [AuthController::class, 'registrationProcess'])->name('register');
    Route::get('/login', [AuthController::class, 'loginpage'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('add-to-cart', [AddToCartController::class, 'addToCartPage'])->name('add_to_cart');
    Route::get('user-cart-item', [AddToCartController::class, 'userCartitem'])->name('user_cart_item');
    Route::post('stripe-post', [Stripecontroller::class, 'stripePost'])->name('stripe_post');
    Route::get('remove-cart-logo', [AddToCartController::class, 'removeCartLogo']);

    
    //***************************************Designer Route Localization***********************//
    Route::get('designer-dashboard', [DesignerDashboardController::class, 'designerDashboard'])->name('designer_dashboard');
    Route::get('/designer-dashboard/add-logo', [LogoController::class, 'addlogoPage'])->name('logo_page');
    Route::post('/designer-dashboard/add-logo-process', [LogoController::class, 'addLogoProcess'])->name('add_logo_process');
    Route::get('designer-dashboard/categories', [CategoryController::class, 'categoriesPage'])->name('category_page');
    Route::post('/designer-dashboard/add-categories', [CategoryController::class, 'addCategoriesProcess'])->name('add_categories');


    //***************************************Admin Route Localization**************************//

    Route::get('admin-dashboard', [AdminController::class, 'adminDashboard'])->name('admin_dashboard');
    Route::get('admin-dashboard/logo-request', [AdminLogoController::class, 'logoRequest'])->name('logo_request');
    Route::get('admin-dashboard/logo-approve', [AdminLogoController::class, 'logoApprove'])->name('logo_approve');
    Route::get('admin-dashboard/logo-disapprove', [AdminLogoController::class, 'logoDisapprove'])->name('logo_disapprove');
    Route::get('admin-dashboard/approve-logo', [AdminLogoController::class, 'approvedLogo'])->name('approve_logo');
    Route::get('admin-dashboard/disaaprove-logo', [AdminLogoController::class, 'disapprovedLogo'])->name('disapprove_logo');
});

// Route::group(['prefix' => '{lang}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => ['setlocaledesigner']], function () {
//     Route::get('/', [DesignerDashboardController::class, 'switchLanguage']);
//     Route::get('/designer-dashboard', [DesignerDashboardController::class, 'designerDashboard'])->name('designer_dashboard');
// });

//*********************************Email Route*******************//
Route::get('/email-page', [EmailController::class, 'emailPage']);
Route::post('/email-process', [EmailController::class, 'emailProcess'])->name('email');

//*****************************pusher Nofity***************************//
Route::get('pusher', [EmailController::class, 'pusherNotifyPage']);
Route::Post('pusher-process', [EmailController::class, 'pusherNotifyProcess'])->name('pusher');
