<?php

namespace App\Listeners;

use App\Events\SubscriptionCreated;
use App\Models\Product;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateSubscription implements ShouldQueue
{
    public $user;
    public $product;
    public $subscription;

    public function __construct(
        Subscription $subscription,
        User $user,
        Product $product
    ) {
        $this->user = $user;
        $this->product = $product;
        $this->subscription = $subscription;
    }

    public function handle(SubscriptionCreated $event)
    {
        $user = $this->user->findOrFail($event->data['user_id']);

        $product = $user->products()->where('id', $event->data['product_id'])->firstOrFail();
        $product->subscription()->create($event->data);
    }
}
