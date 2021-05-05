Request lifecycle:

1) Route /purchases/subscriptions/apple calls AppleServerSubscriptionController
   (Request goes through CheckAppleServerAuthToken middleware, and validate receipt middleware)
   
3) Controller check the action type of the request object to understand is it create/renew/cancel subscription event.

4) After controller checked the type of the request(and for example its create_subscription type),
it calls AppleSubscriptionRequestMapperService method mapCreateSubscription and map all needed fields.

5) All mapped fields we are sending to SubscriptionManagerService@createSubscription and dispatch SubscriptionCreatedEvent.   

6) SubscriptionCreatedEvent has CreateSubscription listener that is responsible for link the user with product and create the subscription linked to product using queues

7) After event is dispatched we return our API response
