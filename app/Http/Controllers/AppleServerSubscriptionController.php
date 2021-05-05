<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiService;
use App\Http\Services\AppleSubscriptionRequestMapperService;
use App\Http\Services\SubscriptionManagerService;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AppleServerSubscriptionController extends BaseController
{
    public function __invoke(
        Request $request,
        SubscriptionManagerService $service,
        AppleSubscriptionRequestMapperService $subscriptionRequestMapperService,
        ApiService $apiService
    ) {
        switch ($request->type) {
            case Subscription::SUBSCRIPTION_ACTION_CREATE:
                $service->createSubscription($subscriptionRequestMapperService->mapCreateSubscription($request));
                break;
            case Subscription::SUBSCRIPTION_ACTION_RENEW:
                $service->renewSubscription($subscriptionRequestMapperService->mapRenewSubscription($request));
                break;
            case Subscription::SUBSCRIPTION_ACTION_CANCEL:
                $service->cancelSubscription($subscriptionRequestMapperService->mapCancelSubscription($request));
                break;
        }

        return $apiService->respondSuccess('Success!');
    }
}
