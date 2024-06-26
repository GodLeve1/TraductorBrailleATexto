<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TranslationController;
use App\Http\Controllers\BrailleEspanolTranslationsController;


Route::get('/', function () {
    return Inertia::render('Homepage', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/diccionario', function () {
    return Inertia::render('Dictionary');
});

Route::post('/translate-to-braille', [TranslationController::class, 'translateToBraille']);
Route::post('/download-image', [TranslationController::class, 'downloadImage']);
Route::get('/download-pdf', [TranslationController::class, 'downloadPDF']);
Route::post('/translate-to-espanol', [BrailleEspanolTranslationsController::class, 'translateToEspanol']);
Route::post('/teclado-braille', [BrailleEspanolTranslationsController::class, 'getLetters']);
Route::post('/teclado-braille-number', [BrailleEspanolTranslationsController::class, 'getNumbers']);
Route::post('/teclado-braille-characterEsp', [BrailleEspanolTranslationsController::class, 'getSpecialCaracter']);
Route::post('/teclado-braille-mayuscula', [BrailleEspanolTranslationsController::class, 'getLettersMayus']);
Route::post('/teclado-braille-mayusculaTilde', [BrailleEspanolTranslationsController::class, 'getVocalWhitTildeMayus']);
Route::post('/teclado-braille-minusculaTilde', [BrailleEspanolTranslationsController::class, 'getVocalWhitTilde']);

