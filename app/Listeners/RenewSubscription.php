<?php

namespace App\Listeners;

use App\Events\SubscriptionCreated;
use App\Models\Subscription;
use Illuminate\Contracts\Queue\ShouldQueue;

class RenewSubscription implements ShouldQueue
{
    public $user;
    public $product;
    public $subscription;

    public function __construct(
        Subscription $subscription
    ) {
        $this->subscription = $subscription;
    }

    public function handle(SubscriptionCreated $event)
    {
        $subscription = $this->subscription->findOrFail($event->data['subscription_id']);
        $subscription->update($event->data);
    }
}
