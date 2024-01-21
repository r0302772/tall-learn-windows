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
    Route::view('basic-cmdlets', 'windows_powershell.basic-cmdlets')->name('basic-cmdlets');
    Route::view('cmdlets-for-files-and-folders', 'windows_powershell.cmdlets-for-files-and-folders')->name('cmdlets-for-files-and-folders');
    Route::view('cmdlets-network-module', 'windows_powershell.cmdlets-network-module')->name('cmdlets-network-module');
    Route::view('working-with-apis', 'windows_powershell.working-with-apis')->name('working-with-apis');
    Route::view('basic-pipelining', 'windows_powershell.basic-pipelining')->name('basic-pipelining');
    Route::view('advanced-pipelining', 'windows_powershell.advanced-pipelining')->name('advanced-pipelining');
    Route::view('applications-of-pipelining', 'windows_powershell.applications-of-pipelining')->name('applications-of-pipelining');
    Route::view('aliases', 'windows_powershell.aliases')->name('aliases');
    Route::view('powershell-profiles', 'windows_powershell.powershell-profiles')->name('powershell-profiles');
    Route::view('output-format', 'windows_powershell.output-format')->name('output-format');
    Route::view('exporting-objects', 'windows_powershell.exporting-objects')->name('exporting-objects');
    Route::view('input-and-output', 'windows_powershell.input-and-output')->name('input-and-output');
    Route::view('pester-testing', 'windows_powershell.pester-testing')->name('pester-testing');
    Route::view('history', 'windows_powershell.history')->name('history');
    Route::view('variables', 'windows_powershell.variables')->name('variables');
    Route::view('references', 'windows_powershell.references')->name('references');
});

Route::prefix('windows-security-basics')->name('windows-security-basics.')->group(function () {
    Route::redirect('/', '/windows-security-basics/windows-components');
    Route::view('windows-components', 'windows_security_basics.windows-components')->name('windows-components');
    Route::view('ntfs-security', 'windows_security_basics.windows-file-and-folder-security-ntfs')->name('ntfs-security');
});

Route::prefix('windows-server')->name('windows-server.')->group(function () {
    Route::redirect('/', '/windows-server/devops-and-ci-cd');
    Route::view('devops-and-ci-cd', 'windows_server.devops-and-ci-cd')->name('devops-and-ci-cd');
    Route::view('windows-server-and-ad-ldap', 'windows_server.windows-server-and-ad-ldap')->name('windows-server-and-ad-ldap');
    Route::view('teaming-up-for-application-security-and-building', 'windows_server.teaming-up-for-application-security-and-building')->name('teaming-up-for-application-security-and-building');
});

Route::prefix('exercises')->name('exercises.')->group(function () {
    Route::redirect('/', '/exercises/registry');
    Route::view('registry', 'windows_security_basics.windows_components.exercises.exercise-registry')->name('registry');
    Route::view('user-management', 'windows_security_basics.windows_components.exercises.exercise-user-management')->name('user-management');
    Route::view('generic-permissions', 'windows_security_basics.windows_components.exercises.exercise-generic-permissions')->name('generic-permissions');
    Route::view('file-and-folder-permissions-and-disable-inheritance', 'windows_security_basics.windows_components.exercises.exercise-file-and-folder-permissions-and-disable-inheritance')->name('file-and-folder-permissions-and-disable-inheritance');
    Route::view('file-and-folder-permissions-and-inheritance', 'windows_security_basics.windows_components.exercises.exercise-file-and-folder-permissions-and-inheritance')->name('file-and-folder-permissions-and-inheritance');
    Route::view('inherited-permissions', 'windows_security_basics.windows_components.exercises.exercise-inherited-permissions')->name('inherited-permissions');
    Route::view('folder-permissions-inheritance', 'windows_security_basics.windows_components.exercises.exercise-folder-permissions-inheritance')->name('folder-permissions-inheritance');
    Route::view('summary-exercise', 'windows_security_basics.windows_components.exercises.summary-exercise')->name('summary-exercise');
    Route::view('ownership', 'windows_security_basics.windows_components.exercises.exercise-ownership')->name('ownership');
    Route::view('sharing-ownership', 'windows_security_basics.windows_components.exercises.exercise-sharing-ownership')->name('sharing-ownership');
    Route::view('auditing-and-ownership', 'windows_security_basics.windows_components.exercises.exercise-auditing-and-ownership')->name('auditing-and-ownership');
    Route::view('review-exercise', 'windows_security_basics.windows_components.exercises.review-exercise-powershell-and-files-and-folders')->name('review-exercise');
});

Route::prefix('config')->name('config.')->group(function () {
    Route::redirect('/', '/config/installing-windows-10-on-virtual-box');
    Route::view('installing-windows-10-on-virtual-box', 'config.installing-windows-10-on-virtual-box')->name('installing-windows-10-on-virtual-box');
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
