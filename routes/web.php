<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeImageController;
use App\Http\Controllers\SubProjectController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WhychooseusController;
use App\Http\Controllers\DynamicPagesController;
use App\Http\Controllers\HomesliderController;

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
Route::get('login', function() {

});
    
/*additional cache-seed-migration route*/
Route::get('phpinfo', function() {
    return phpinfo();
});

Route::get('clear_cache', function (){
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    return 'cache cleared';
})->name('clear_cache');

Route::get('migrate', function (){
    Artisan::call('migrate');
    return 'migration is done';
})->name('migrate');

Route::get('fresh_start', function (){
    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');
    return 'fresh start is done';
})->name('fresh_start');

Route::get('migrate_fresh', function (){
    Artisan::call('migrate:fresh');
    return 'fresh migration is done';
})->name('migrate_fresh');


/* End additional cache-seed-migration route*/


Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/about', [HomepageController::class, 'about'])->name('about_us');
Route::get('/contact', [HomepageController::class, 'contact'])->name('contact_us');
Route::get('/projects', [HomepageController::class, 'all_projects_detail'])->name('all_projects');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



Route::get('/{project:slug}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/project/{SubProject:slug}', [SubProjectController::class, 'show'])->name('SubProject.show');

Route::get('p/{dynamicPages:slug}', [DynamicPagesController::class, 'show'])->name('dynamicPages.show');


Auth::routes(['register' => false]);


// ADMIN ROUTES
Route::group(['middleware' => ['auth']], function() {

    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        Route::resource('contact', ContactController::class)->except('store');

        Route::resource('whychooseus', WhychooseusController::class);

        Route::resource('testimonial', TestimonialController::class);

        Route::resource('homeslider', HomesliderController::class)->except('create','destroy','show','store');
        
        Route::resource('slider', SliderController::class);

        Route::resource('location', LocationController::class);

        Route::resource('faq', FaqController::class);

        Route::resource('setting', SettingController::class,['parameters' =>[
            'setting' => 'setting:slug'
        ]])->except('show','store','destroy','create');

        Route::resource('about', AboutController::class,['parameters' =>[
            'about' => 'about:slug'
        ]])->except('show','store','destroy','create');

        Route::resource('project', ProjectController::class,['parameters' =>[
            'project' => 'project:slug',
        ]])->except('show');

        Route::resource('SubProject', SubProjectController::class,['parameters' =>[
            'SubProject' => 'SubProject:slug'
        ]])->except('show');

        Route::resource('home_image', HomeImageController::class,['parameters' =>[
            'home_image' => 'home_image:slug'
        ]])->except('show','store','destroy','create');

        Route::resource('dynamicPages', DynamicPagesController::class,['parameters' =>[
            'dynamicPages' => 'dynamicPages:slug'
        ]])->except('show');


    });

});