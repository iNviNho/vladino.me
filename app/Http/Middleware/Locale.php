<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $firstSegment = $request->segment(1);

        // if first segment is not our language
        // than append at to the desired route
        if (is_null($firstSegment) || !in_array($firstSegment, config("app.locales"))) {
            return redirect(config("app.locale") . $request->getPathInfo());
        }


        // if first segment is empty just set locale to default
        if (is_null($firstSegment)) {
            App::setLocale(config("app.locale"));
        } else {
            // check if first segment is part of our locales
            if (in_array($firstSegment, config("app.locales"))) {
                // if yes, set it
                App::setLocale($firstSegment);
            } else {
                // if not, fall back to default
                App::setLocale(config("app.locale"));
            }
        }

        // continue with request
        return $next($request);
    }
}
