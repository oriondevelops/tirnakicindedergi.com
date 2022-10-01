<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\MessageReceived;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    /**
     * Handle the incoming contact request.
     *
     * @param  ContactRequest  $request
     * @return RedirectResponse
     */
    public function __invoke(ContactRequest $request)
    {
        Mail::to('iletisim@tirnakicindedergi.com')
            ->send(new MessageReceived($request->validated()));

        return Redirect::route('contact');
    }
}
