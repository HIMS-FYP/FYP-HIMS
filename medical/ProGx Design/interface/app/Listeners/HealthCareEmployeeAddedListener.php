<?php

namespace App\Listeners;

use App\Events\HealthCareEmployeeAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class HealthCareEmployeeAddedListener{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(){
        //
    }

    /**
     * Handle the event.
     * @param  HealthCareEmployeeAdded  $event
     * @return void
     */
    public function handle(HealthCareEmployeeAdded $hceAddedEvent){
        Log::info(" One HCEmployee Added,  
         email: ". $hceAddedEvent->healthCareEmployee->email ."
         PWD: " . $hceAddedEvent->healthCareEmployee->plain_password );
    }

}


