<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class ValidateAppleServerReceipt extends Middleware
{
    //validate apple server receipt before send request to controller
}
