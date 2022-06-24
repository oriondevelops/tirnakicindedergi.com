<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentSubmissionRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
        dd($request->validated());
        return back();
    }
}
