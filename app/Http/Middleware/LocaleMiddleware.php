<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $availLocale = ['en' => 'en', 'ar' =>'ar', 'es' => 'es', 'ja' => 'ja', 'zh_HK' => 'zh_HK', 'zh_CN' => 'zh_CN'];
        //en - english
        //ar - arabic
        //es - spanish / español
        //ja - japanese
        //zh_HK - chinese Hong Kong
        //zh_CN - Chinese - CHINA

        // Locale is enabled and allowed to be change
        if (session()->has('locale') && array_key_exists(session()->get('locale'), $availLocale)) {
            // Set the Laravel locale
            // can be found in config/app.php - 'locale' => 'en', default value
            app()->setLocale(session()->get('locale'));
        }
        return $next($request);
    }
}
