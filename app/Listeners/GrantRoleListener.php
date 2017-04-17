<?php

namespace App\Listeners;

use App\Events\RolesEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class GrantRoleListener
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
     * @param  RolesEvent  $event
     * @return void
     */
    public function handle(RolesEvent $event)
    {
        $event->user->assignRole("manage tasks");
    }
}
