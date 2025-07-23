<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InerPageController;
use App\Http\Controllers\ContactController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('website-development', [InerPageController::class, 'index'])->name("website.development");
Route::get('graphic_designing', [InerPageController::class, 'GraphicDesigning'])->name("graphic.designing");
Route::get('digital_marketing', [InerPageController::class, 'DigitalMarketing'])->name("digital.marketing");
Route::get('ui_ux_designing', [InerPageController::class, 'UI_UX_Designing'])->name("UI/UX.designing");
Route::get('App_Development', [InerPageController::class, 'AppDevelopment'])->name("app.development");
Route::get('SEO_Content', [InerPageController::class, 'SEOContent'])->name("SEO.Content");
Route::get('AI_Services', [InerPageController::class, 'AIServices'])->name("AI.Services");
Route::get('Game_Development', [InerPageController::class, 'GameDevelopment'])->name("Game.Development");
Route::get('Big_data', [InerPageController::class, 'BigData'])->name("Big.data");
Route::get('CRM_ERP_Solution', [InerPageController::class, 'CRMSolution'])->name("CRM.ERP.Solution");
Route::get('Cloud_Hosting', [InerPageController::class, 'CloudHosting'])->name("Cloud.Hosting");
Route::get('IT_Support', [InerPageController::class, 'ITSupport'])->name("IT.Support");
Route::get('Contact', [ContactController::class, 'index'])->name("Contact");
