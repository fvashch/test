<?php


namespace App\Http\Services;

use Illuminate\Http\Request;

class AppleSubscriptionRequestMapperService
{
    public function mapCreateSubscription(Request $request): array
    {
        return [
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
            'auto_renew_status' => $request->auto_renew_status,
            'type' => $request->subscription_type,
        ];
    }

    public function mapRenewSubscription(Request $request): array
    {
        return [
            'subscription_id' => $request->product_id,
            'auto_renew_status' => $request->auto_renew_status,
            'type' => $request->subscription_type
        ];
    }

    public function mapCancelSubscription(Request $request): array
    {
        return [
            'subscription_id' => $request->product_id,
            'cancellation_reason' => $request->reason
        ];
    }
}
