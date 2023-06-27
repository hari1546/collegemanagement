<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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




Route::get("/",[HomeController::class,"index"]);

// Route::get("/invoice",[AdminController::class,"invoice"]);

Route::get("/users",[AdminController::class,"user"]);

Route::get("/deletemodel/{id}",[AdminController::class,"deletemodel"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::put("/update/{id}",[AdminController::class,"update"]);

Route::delete("/deletebrochure/{id}",[AdminController::class,"deletebrochure"]);

Route::delete('/deleteimage/{id}',[AdminController::class,'deleteimage']);

Route::get("/model",[AdminController::class,"model"]);

Route::get("/sheet",[AdminController::class,"sheet"]);


Route::get("/search",[AdminController::class,"search"]);
Route::post("/searchevent",[AdminController::class,"searchevent"]);

Route::post("/uploadevents",[AdminController::class,"upload"]);

Route::get("/showmodel/{id}",[AdminController::class,"showmodel"]);

Route::get("/invoice/{id}",[AdminController::class,"invoice"]);

Route::get("/addnew",[AdminController::class,"addnew"]);

Route::get("/categoryview",[AdminController::class,"categoryview"]);

Route::get("/categoryadd",[AdminController::class,"categoryadd"]);

Route::post("/updatenew/{id}",[AdminController::class,"updatenew"]);

Route::get("/deletecategory/{id}",[AdminController::class,"deletecategory"]);

Route::get("/updatecategory/{id}",[AdminController::class,"updatecategory"]);



Route::post("/uploadcategory",[AdminController::class,"uploadcategory"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

// Route::get("/meeting",[AdminController::class,"meeting"]);

Route::get("/semi",[AdminController::class,"semi"]);

Route::get("/semiadd",[AdminController::class,"semiadd"]);

Route::post("/uploadsemi",[AdminController::class,"uploadsemi"]);

Route::get("/deletesemi/{id}",[AdminController::class,"deletesemi"]);

Route::get("/updatesemi/{id}",[AdminController::class,"updatesemi"]);

Route::post("/updatedetails/{id}",[AdminController::class,"updatedetails"]);

Route::get("/showsemi/{id}",[AdminController::class,"showsemi"]);

Route::get("/details/{id}",[AdminController::class,"details"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
