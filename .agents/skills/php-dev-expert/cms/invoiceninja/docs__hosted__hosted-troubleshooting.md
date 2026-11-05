# Hosted TroubleShooting | Invoice Ninja

> **Fonte / Source:** https://invoiceninja.github.io/docs/hosted/hosted-troubleshooting

---

On this page

## Auth.net[​](#authnet "Direct link to Auth.net")

### CardCode is required.. (or similar)[​](#cardcode-is-required-or-similar "Direct link to CardCode is required.. (or similar)")

If you are seeing errors when processing payments with a return error indicating a missing field such as

info

There was an error processing your payment [33]. Please try again later.  
Message:  
Customer ID is required

This means that you have a payment form configured within Auth.net with some required fields. These will need to be disabled.

To do this, log into auth.net and navigate to

```
Account / Payment Forms / Form Fields
```

You will see a list of fields with check boxes like this:

![alt text](/assets/images/authnet-required-fields-5ee7beddb1081d08308f40dbb0976d11.png "Required Fields")

warning

Disable the required checkboxes and then save.
