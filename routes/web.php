<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home')->name('home');
Route::view('contact', 'contact')->name('contact');

Route::prefix('powershell')->name('powershell.')->group(function () {
    Route::redirect('/', '/powershell/introduction');
    Route::view('introduction', 'windows_powershell.introduction')->name('introduction');
    Route::view('powershell-cmdlets', 'windows_powershell.powershell-cmdlets')->name('powershell-cmdlets');
    Route::view('basic-cmdlets', 'windows_powershell.basic-cmdlets-inside-powershell')->name('basic-cmdlets');
    Route::view('cmdlets-for-files-and-folders', 'windows_powershell.cmdlets-for-files-and-folders')->name('cmdlets-for-files-and-folders');
    Route::view('cmdlets-network-module', 'windows_powershell.cmdlets-network-module')->name('cmdlets-network-module');
    Route::view('working-with-apis', 'windows_powershell.working-with-apis')->name('working-with-apis');
    Route::view('basic-pipelining', 'windows_powershell.basic-pipelining')->name('basic-pipelining');
    Route::view('advanced-pipelining', 'windows_powershell.advanced-pipelining')->name('advanced-pipelining');
    Route::view('applications-of-pipelining', 'windows_powershell.applications-of-pipelining')->name('applications-of-pipelining');
    Route::view('aliases', 'windows_powershell.aliases')->name('working-with-apis');
    Route::view('powershell-profiles', 'windows_powershell.powershell-profiles')->name('powershell-profiles');
    Route::view('output-format', 'windows_powershell.output-format')->name('output-format');
    Route::view('exporting-objects', 'windows_powershell.exporting-objects')->name('exporting-objects');
    Route::view('input-and-output', 'windows_powershell.input-and-output')->name('input-and-output');
    Route::view('pester-testing', 'windows_powershell.pester-testing')->name('pester-testing');
    Route::view('history', 'windows_powershell.history')->name('history');
    Route::view('variables', 'windows_powershell.variables')->name('variables');
    Route::view('references', 'windows_powershell.references')->name('references');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
