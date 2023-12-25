<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function testMail(): void
    {

        Mail::raw('Test email from Laravel', function ($message) {
            $message->to('riste.micev1@gmail.com')
                ->subject('Test Email');
        });

    }
}
