<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\MyWorksController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MyServicesController;
use App\Http\Controllers\ResumeController;

Route::get('/', function () {
    return env('DB_HOST', '127.0.0.1');
});

Route::get('aboutme',     [AboutMeController::class, 'getAboutMe']);
Route::get('experiences', [ExperienceController::class, 'getExperiences']);
Route::get('experience',  [ExperienceController::class, 'getExperiencesById']);
Route::get('skills',      [SkillsController::class, 'getSkills']);
Route::get('myWorks',     [MyWorksController::class, 'getMyWorks']);
Route::get('myWork',      [MyWorksController::class, 'getMyWorksById']);
Route::get('contact',     [ContactController::class, 'getContacts']);
Route::get('myservices',  [MyServicesController::class, 'getMyServices']);
Route::get('resume',      [ResumeController::class, 'getResume']);