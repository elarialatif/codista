<?php

namespace App\Http\Controllers;

use Exception;
use App\CustomerMessage;
use Illuminate\Support\Facades\Log;
use App\Mail\NewCustomerMessageMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests\CreateCustomerMessageRequest;

class ContactController extends Controller
{
    public function store(CreateCustomerMessageRequest $request)
    {
        if (Cookie::get('XSRF-TOken') == 'yes') {
            return redirect()
                ->back()
                ->with('success', 'no');
        }

        CustomerMessage::create(
            $request->only('name', 'number', 'email', 'subject', 'message')
        );

        Cookie::queue('XSRF-TOken', "yes", 1440);

        try {
            Mail::to('senshicodo014@gmail.com')
                ->send(new NewCustomerMessageMail($request));
        } catch (Exception $e) {
            Log::error("sending an email has failed with exception: \n {$e->getMessage()}");
        }

        return redirect()
            ->back()
            ->with('success', 'yes');
    }
}
