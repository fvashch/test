<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

class Subscription
{
    const SUBSCRIPTION_ACTION_CREATE = 'create_subscription';
    const SUBSCRIPTION_ACTION_RENEW = 'renew_subscription';
    const SUBSCRIPTION_ACTION_CANCEL = 'cancel_subscription';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status',
        'cancellation_reason',
        'auto_renew_status',
        'type'
    ];
}
