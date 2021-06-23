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
