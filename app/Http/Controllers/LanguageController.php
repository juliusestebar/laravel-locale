<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function swap($locale)
    {
        // available language in template array
        $availLocale = ['en' => 'en', 'ar' => 'ar', 'es' => 'es', 'ja' => 'ja', 'zh_HK' => 'zh_HK', 'zh_CN' => 'zh_CN'];
        // check for existing language
        if (array_key_exists($locale, $availLocale)) {
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
