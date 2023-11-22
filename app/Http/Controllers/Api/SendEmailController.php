<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;

class SendEmailController extends Controller
{
    public function sendEmail()
    {
        $userEmails = [
            'a@example.com',
            'b@example.com',
            'c@example.com',
        ];

        dispatch(new SendEmailJob($userEmails));

        return response()->json([
            'success' => true,
            'message' => 'Emails sent successfully',
        ]);
    }
}
