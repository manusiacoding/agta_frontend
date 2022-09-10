<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'http://localhost/web/agta-frontend-laravel/chat/store-text',
        'http://localhost/web/agta-frontend-laravel/chat/store-image',
        'https://agtastore.com/chat/store-text',
        'https://agtastore.com/chat/store-image',
    ];
}
