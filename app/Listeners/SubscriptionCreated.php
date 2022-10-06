<?php

namespace App\Listeners;

use App\Sites;

class SubscriptionCreated {
    
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
            \Log::info('Subscription CREATED');

            // get user
            $user = $event->billable;
            $claimingSite = $user->claims;

            

            // update user company
            if($claimingSite) {
                \Log::info('Updating site: #' . $claimingSite . ' with owner: #' . $user->email);

                $site = Sites::find($claimingSite);
                $site->claimedBy = $user->id;
                $site->save();

            }
        }
}