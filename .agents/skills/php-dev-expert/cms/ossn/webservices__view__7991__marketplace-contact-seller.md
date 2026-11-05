# Marketplace contact seller | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7991/marketplace-contact-seller

---

Documentation for using the API's POST/GET method to contact a seller about a marketplace product. Learn to correctly structure the request payload to send an automated inquiry message to the product owner on the OSSN platform.

**Endpoint**

- `https://yourwebsite.com/api/v6.0/marketplace/contact`

**Method:**

- GET / POST

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| guid | Yes | integer | GUID of the marketplace product |
| uguid | Yes | integer | GUID of the sender (user contacting the seller) |

**Example Response**

```
{
    "merchant": "OSSN 10.0",
    "url": "https:\/\/yourwebsite.com\/",
    "time_token": 1786124700,
    "payload": {
        "product": {
            ...
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
| success | Boolean status indicating whether the contact message was successfully sent |
| product | Object containing details of the product inquired about |
