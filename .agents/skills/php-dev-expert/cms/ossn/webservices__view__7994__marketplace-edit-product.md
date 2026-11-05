# Marketplace edit product | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7994/marketplace-edit-product

---

Documentation for using the API's POST/GET method to edit an existing marketplace product. Learn to correctly structure the request payload to update product details such as title, description, pricing, category, and privacy settings on the OSSN platform.

**Endpoint**

`https://yourwebsite.com/api/v6.0/marketplace/edit`

**Method:**

- GET / POST

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| guid | Yes | integer | GUID of the marketplace product to edit |
| uguid | Yes | integer | User GUID attempting the edit (must match `owner_guid`) |
| title | Yes | string | Updated title of the product |
| desc | Yes | string | Updated description of the product |
| price | Yes | float | Updated price |
| product\_type | Yes | string | Updated product type (e.g., `new`, `used`) |
| privacy | Yes | string | Updated privacy setting |
| currency | Yes | string | Updated currency code (e.g., `USD`) |
| location | Yes | string | Updated product location |
| category | Yes | string/integer | Updated category ID or key |
| allow\_comments | No | string | Enable/disable comments (`enable` for true) |

**Example Response**

```
{
    "merchant": "OSSN 10.0",
    "url": "https:\/\/yourwebsite.com\/",
    "time_token": 1786125000,
    "payload": {
        "success": true,
        "product": {
            ...
        }
    },
    "code": "100",
    "message": "Request successfully executed"
}
```

**Return payload parameter description**

| Parameter name | Explain |
| --- | --- |
| success | Boolean status indicating whether the product update succeeded |
| product | Object containing the updated product details |
