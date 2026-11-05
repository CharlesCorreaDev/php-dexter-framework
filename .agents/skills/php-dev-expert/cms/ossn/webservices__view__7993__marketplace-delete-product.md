# Marketplace delete product | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7993/marketplace-delete-product

---

Documentation for using the API's POST/GET method to delete a marketplace product. Learn to correctly structure the request payload to remove an existing listing on the OSSN platform.

**Endpoint**

`https://yourwebsite.com/api/v6.0/marketplace/delete`

**Method:**

- GET / POST

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| guid | Yes | integer | GUID of the marketplace product to delete |

**Example Response**

```
{
    "merchant": "OSSN 10.0",
    "url": "https:\/\/yourwebsite.com\/",
    "time_token": 1786124900,
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
| success | Boolean status indicating whether the product deletion succeeded |
| product | Object containing the product details of the deleted item |
