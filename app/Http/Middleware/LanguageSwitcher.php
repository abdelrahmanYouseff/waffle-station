<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LanguageSwitcher
{
    public function handle($request, Closure $next)
    {
        $locale = $request->has('lang') ? $request->get('lang') : config('app.locale');
        App::setLocale($locale);

        return $next($request);
    }
}
