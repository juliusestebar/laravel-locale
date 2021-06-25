## Introduction

Laravel's localization features provide a convenient way to retrieve strings in various languages, allowing you to easily support multiple languages within your application.

Laravel provides two ways to manage translation strings. First, language strings may be stored in files within the resources/lang directory. Within this directory, there may be subdirectories for each language supported by the application. This is the approach Laravel uses to manage translation strings for built-in Laravel features such as validation error messages.

## Laravel Locale

Laravel locale helper controls multiple language dynamically. 

<p><p>
<p><p>
<blockquote>
<p>Note: <code>Do not clone this repo unless you will build the app from the scratch!</p></code>
</blockquote>
<p><p>
<p><p>
    
## Install Laravel
<pre><code>
composer  create-project laravel/laravel laravel-locale --prefer-dist
</code></pre>

## Create Middleware
<pre><code>
php artisan make:middleware LocaleMiddleware
</code></pre>

## Add middleware in Kernel.php ( app/Http)
<pre><code>
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            ...
            \App\Http\Middleware\LocaleMiddleware::class,
        ],
</code></pre>

## Create Controller 
<pre><code>
php artisan make:controller LanguageController
</code></pre>

## Create route for controller in routes/web.php 
<pre><code>
use App\Http\Controllers\LanguageController;

Route::get('lang/{locale}',[LanguageController::class,'swap']);
</code></pre>

## Add folders for each locale in ( resource/lang )
<pre><code>
 lang/en       //en - english
 lang/ar       //ar - arabic
 lang/es       //es - spanish / español
 lang/ja       //ja - japanese
 lang/zh_HK    //zh_HK - Chinese - Hong Kong
 lang/zh_CN    //zh_CN - Chinese - China
</code></pre>


## Benefits
-- SEO friendly - no need for an extra language ( /en/test or /ar/test ) in your url
