<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\System;
use Illuminate\Contracts\Mail\Mailer;

class SendSystemOrderCustomerEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    private $system;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(System $system)
    {
        $this->system = $system;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $mailer->send('emails.system_order_customer', ['system' => $this->system], function ($m) {
            $m->from('mail@computerwhiz.com.au', 'Computer Whiz - Canberra');
            $m->to($this->system->email, $this->system->name)
              ->subject(trans('content.system_order_subject', ['name' => $this->system->name]));
        });
    }
}
