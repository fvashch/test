<?php


namespace App\Http\Services;

use App\Events\SubscriptionCanceled;
use App\Events\SubscriptionCreated;
use App\Events\SubscriptionRenewed;

class SubscriptionManagerService
{
    public function createSubscription($data): void
    {
        event(app()->makeWith(SubscriptionCreated::class, ['data' => $data]));
    }

    public function renewSubscription($data): void
    {
        event(app()->makeWith(SubscriptionRenewed::class, ['data' => $data]));
    }

    public function cancelSubscription($data): void
    {
        event(app()->makeWith(SubscriptionCanceled::class, ['data' => $data]));
    }
}
