<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $allData;
    protected $email;

    /**
     * Create a new job instance.
     */
    public function __construct($allData)
    {

        $this->allData = $allData;
        // saveAppLog(json_encode($this->data, true));
        // saveAppLog('testing check');
        $this->email = $allData['email'];
        // saveAppLog(json_encode($this->email, true));
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if ($this->email) {

            Mail::to($this->email)->send(new WelcomeEmail($this->allData));
        } else {
            saveAppLog(" Email does not exists ");
        }
    }
}
