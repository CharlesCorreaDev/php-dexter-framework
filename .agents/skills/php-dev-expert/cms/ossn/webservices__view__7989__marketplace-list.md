# Marketplace List | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7989/marketplace-list

---

Documentation for using the API's GET/POST method to list marketplace products. Learn to correctly structure the request payload to retrieve listed items alongside category mappings and supported currencies on the OSSN platform.

**Endpoint**

- `https://yourwebsite.com/api/v6.0/marketplace/list`

**Method:**

- GET / POST

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| keyword | No | string | Search term to filter product titles |
| sort\_by | No | string | Sorting order (`latest`, `high_low`, or `low_high`) |
| category\_guid | No | integer | Filter products by category GUID |
| product\_type | No | string | Filter products by type (e.g., `new`, `used`) |
| owner\_guid | No | integer | Filter products created by a specific user GUID |
| offset | No | integer | Page/offset number for pagination |

**Example Response**

```
{
    "merchant": "OSSN 10.0",
    "url": "https:\/\/yourwebsite.com\/",
    "time_token": 1786124264,
    "payload": {
        "categories": {
            "24": "Test"
        },
        "currencies": {
            "USD": "USD",
            "CAD": "CAD",
            "AUD": "AUD",
            "EUR": "EUR",
            "CHF": "CHF",
            "GBP": "GBP"
        },
        "list": [
            {
               ...
            }
        ],
        "offset": 1,
        "count": 1
    },
    "code": "100",
    "message": "Request successfully executed"
}
```

**Return payload parameter description**

| Parameter name | Explain |
| --- | --- |
| categories | Map of category GUIDs to category names |
| currencies | Object containing supported currency codes |
| list | Array containing the listed marketplace products |
| offset | Current offset/pagination state |
| count | Total count of products retrieved in the payload |
