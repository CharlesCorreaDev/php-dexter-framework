# Hosted Stripe | Invoice Ninja

> **Fonte / Source:** https://invoiceninja.github.io/docs/hosted/hosted-stripe

---

On this page

## Stripe Integration[​](#stripe-integration "Direct link to Stripe Integration")

In v5 of Invoice Ninja we have introduced Stripe Connect using OAuth. This integration provides a secure way to integrate your Stripe account into Invoice Ninja.

When you migrate your data across, we automatically create your Stripe account, however we need you to authorize via OAuth your Stripe account with Invoice Ninja.

To do this, navigate to Settings > Payment Settings. Click on Stripe Connect you'll see the following:

![alt text](/assets/images/stripe1-d719ae41aa54bc65df499e3cf6f4cf76.png "Connect Stripe")

Click on **Gateway Setup** this button and you'll be taken to a page like this:

![alt text](/assets/images/stripe2-9a094f42e73299951c2af64697273133.png "OAuth Stripe")

Select the account you wish to connect and we will look after the rest!!

## Stripe Webhooks[​](#stripe-webhooks "Direct link to Stripe Webhooks")

It is highly recommended that you configure webhooks that allow Stripe to communicate with Invoice Ninja.

In cases where the customer leaves prior to the transaction completing or a loss of communication between Stripe and Invoice Ninja. Webhooks can self heal any transactions that are incomplete.

You can find your webhook details on the Stripe overview page in Settings > Payment Settings > Configure Gateways > Stripe

![alt text](/assets/images/stripe_webhook_overview_1-803cb23cff646202c9bb6d8a4db0d471.png "Webhook Settings Invoice Ninja")

Using these details, log into Stripe and navigate to Developers > Webhooks

![alt text](/assets/images/stripe_webhook_overview_2-e67010bdedf4f4289f738fb49565c158.png "Webhook edit in Stripe")

Enter in your dedicated webhook URL as well as the five event types

info

source.chargeable  
charge.succeeded  
charge.failed  
customer.source.updated  
payment\_intent.processing  
payment\_intent.succeeded  
payment\_intent.payment\_failed  
payment\_intent.partially\_funded

![alt text](/assets/images/stripe_webhook_overview_3-578ee09de7055c608a4a5a7953319a07.png "Add Events")
