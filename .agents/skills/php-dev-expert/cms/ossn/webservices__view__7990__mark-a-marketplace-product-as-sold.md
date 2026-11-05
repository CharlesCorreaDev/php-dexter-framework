# Mark a marketplace product as sold | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7990/mark-a-marketplace-product-as-sold

---

Documentation for using the API's POST/GET method to mark a marketplace product as sold. Learn to correctly structure the request payload to update product availability on the OSSN platform.

**Endpoint**

- `https://yourwebsite.com/api/v6.0/marketplace/marksold`

**Method:**

- GET / POST

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| guid | Yes | integer | GUID of the marketplace product to mark as sold |

**Example Response**

```
{
    "merchant": "OSSN 10.0",
    "url": "https:\/\/yourwebsite.com\/",
    "time_token": 1786124600,
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
| success | Boolean status indicating whether the product status update succeeded |
| product | Object containing updated product details with `is_sold` set to `true` |
