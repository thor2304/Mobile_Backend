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
        "http://127.0.0.1:8000/cars",
        "http://mobiledev.cryptobot.dk/cars",
        "https://mobiledev.cryptobot.dk/cars",
        "http://127.0.0.1:8000/rentals",
        "http://mobiledev.cryptobot.dk/rentals",
        "https://mobiledev.cryptobot.dk/rentals",
    ];
}
