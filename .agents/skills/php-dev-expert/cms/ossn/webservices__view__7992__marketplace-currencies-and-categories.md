# Marketplace Currencies and Categories | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7992/marketplace-currencies-and-categories

---

Documentation for using the API's GET/POST method to retrieve available marketplace currencies and categories on the OSSN platform. Learn to correctly structure the request payload to fetch system configuration lists for form population and filtering.

**Endpoint**

- `https://yourwebsite.com/api/v6.0/marketplace/currencies_and_categories`

**Method:**

- GET / POST

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |

**Example Response**

```
{
    "merchant": "OSSN 10.0",
    "url": "https:\/\/yourwebsite.com\/",
    "time_token": 1786124800,
    "payload": {
        "categories": {
            ...
        },
        "currencies": {
            "USD": "USD",
            "CAD": "CAD",
            "AUD": "AUD",
            "EUR": "EUR",
            "CHF": "CHF",
            "GBP": "GBP"
        },
        "success": true
    },
    "code": "100",
    "message": "Request successfully executed"
}
```

**Return payload parameter description**

| Parameter name | Explain |
| --- | --- |
| categories | Key-value map of available category GUIDs to category titles |
| currencies | Object containing supported active currency codes |
| success | Boolean status indicating request success |
