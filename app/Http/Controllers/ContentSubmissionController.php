<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentSubmissionRequest;
use App\Mail\ContentSubmitted;
use App\Mail\MessageReceived;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContentSubmissionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function __invoke(ContentSubmissionRequest $request)
    {
        Mail::to('iletisim@tirnakicindedergi.com')
            ->send(new ContentSubmitted($request->validated()));
        return Redirect()->back();
    }
}
