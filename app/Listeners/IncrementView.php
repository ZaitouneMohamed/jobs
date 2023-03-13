<?php

namespace App\Listeners;

use App\Events\viewIncrement;
use App\Models\annonce;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IncrementView
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
     * @param  \App\Events\viewIncrement  $event
     * @return void
     */
    public function handle(viewIncrement $event)
    {
        $this->updateViews($event->job);
    }

    public function updateViews($annonce) {
        $annonce->visits += 1;
        $annonce->save();
        // $annonce->getView()->incrementViews();
    }
}
