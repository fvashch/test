<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
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

    ];

    public function subscription(): HasOne
    {
        return $this->hasOne(Subscription::class);
    }
}
