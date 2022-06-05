<?php

namespace App\Listeners;

use App\Events\GeneratePdf;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Jobs\GeneratePdfJob;

class SendGeneratePdfToJob
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\GeneratePdf  $event
     * @return void
     */
    public function handle(GeneratePdf $event)
    {
        dispatch(new GeneratePdfJob($event->data))->onQueue('GeneratePDF');
    }
}
