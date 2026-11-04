<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/acheter', [PageController::class, 'acheter'])->name('acheter');
Route::get('/verifier', [PageController::class, 'verifier'])->name('verifier');
Route::post('/verifier', [PageController::class, 'verifierSoumettre'])->name('verifier.soumettre');
Route::get('/remboursement', [PageController::class, 'remboursement'])->name('remboursement');
Route::post('/remboursement', [PageController::class, 'remboursementSoumettre'])->name('remboursement.soumettre');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactSoumettre'])->name('contact.soumettre');
Route::post('/langue', function (\Illuminate\Http\Request $request) {
    $langues = ['fr', 'en', 'de', 'es', 'nl'];
    $langue = $request->input('locale');

    if (!in_array($langue, $langues, true)) {
        abort(400);
    }

    $request->session()->put('locale', $langue);

    return redirect()->back();
})->name('langue.changer');
