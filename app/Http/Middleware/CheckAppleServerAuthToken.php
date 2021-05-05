<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class CheckAppleServerAuthToken extends Middleware
{
    //check if authorization token is valid
}
