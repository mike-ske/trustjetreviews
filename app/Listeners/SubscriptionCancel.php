<?php

namespace App\Listeners;
use App\Sites;

class SubscriptionCancel {
    
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
        * @param  Spark\Events\SubscriptionCreated  $event
        * @return void
        */
        public function handle($event)
        {
            \Log::info('Subscription CANCELLED');

            // get user
            $user = $event->billable;
            $claimingSite = $user->claims;
            
            // remove user company
            if($claimingSite) {
                \Log::info('Updating site: #' . $claimingSite . ' with by removing owner ' . $user->email);

                $site = Sites::find($claimingSite);
                $site->claimedBy = null;
                $site->save();
            }
            
            
        }
        
}