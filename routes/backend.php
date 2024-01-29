<?php

use App\Http\Controllers\Dashboards\Admin\DoctorController;
use App\Http\Controllers\Dashboards\Admin\SectionController;
use App\Http\Controllers\Dashboards\Admin\Services\SingleServiceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function(){


################################### BEGIN DASHBOARD USER  ###################################

    Route::get('/dashboard/user', function () {
        return view('dashboards.user.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard.user');

################################### END DASHBOARD USER  ###################################



################################### BEGIN DASHBOARD ADMIN  ###################################

    Route::get('dashboard/admin', function () {
        return view('dashboards.admin.dashboard');
    })->middleware(['auth:admin', 'verified'])->name('dashboard.admin');



    Route::middleware('auth:admin')->group(function (){

        ################################### BEGIN SECTION  ###################################

            Route::resource('sections' , SectionController::class);

        ################################### END SECTION  ###################################




        ################################### BEGIN DOCTOR  ###################################

        Route::resource('doctors', DoctorController::class);

        Route::put('doctors/{doctor}/change-status', [DoctorController::class, 'changeStatus'])->name('doctors.changeStatus');

        Route::put('doctors/{doctor}/change-password', [DoctorController::class, 'changePassword'])->name('doctors.changePassword');

        ################################### END DOCTOR  ###################################





        ################################### BEGIN SECTION  ###################################

        Route::resource('sections' , SectionController::class);

        ################################### END SECTION  ###################################





        ################################### BEGIN SINGLE SERVICE  ###################################

        Route::resource('single-services' , SingleServiceController::class);

        ################################### END SINGLE SERVICE  ###################################





        ################################### BEGIN SECTION  ###################################

        Route::resource('sections' , SectionController::class);

        ################################### END SECTION  ###################################




    });
    ################################### END DASHBOARD ADMIN  ###################################

################################### BEGIN PROFILE USER  ###################################
///
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
####################################### END PROFILE USER  ############################################

    require __DIR__.'/auth.php';


});
