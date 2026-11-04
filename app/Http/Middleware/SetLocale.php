<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $langues = ['fr', 'en', 'de', 'es', 'nl'];

        $langue = $request->session()->get('locale', config('app.locale'));

        if (!in_array($langue, $langues, true)) {
            $langue = 'fr';
        }

        App::setLocale($langue);

        return $next($request);
    }
}
