<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Mail;
use App\Mail\SendEmail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $userEmails;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($userEmails)
    {
        $this->userEmails = $userEmails;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $emailObject = new SendEmail();
        foreach ($this->userEmails as $emailAddress) {
            Mail::to($emailAddress)->send($emailObject);   
        }
    }
}
