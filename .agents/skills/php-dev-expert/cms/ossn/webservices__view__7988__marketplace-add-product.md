# Marketplace add Product | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7988/marketplace-add-product

---

Documentation for using the API's POST method to create a new marketplace product. Learn to correctly structure the request payload including image uploads, pricing, and container parameters to list a product on the OSSN platform.

**Endpoint**

- `https://yourwebsite.com/api/v6.0/marketplace/add`

**Method:**

- POST

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| guid | Yes | integer | User GUID creating the product |
| title | Yes | string | Title of the marketplace product |
| desc | Yes | string | Description of the product |
| price | Yes | float | Price of the product |
| product\_type | Yes | string | Type of product |
| privacy | Yes | string | Privacy setting (e.g., `2` PUBLIC, `3` FRIENDS) |
| currency | Yes | string | Currency code (e.g., `USD`) |
| location | Yes | string | Product location |
| category | Yes | string/integer | Product category ID or key |
| container\_guid | Yes | integer | GUID of the container (user or group) |
| container\_type | Yes | string | Container type (`user` or `group`) |
| allow\_comments | No | string | Enable/disable comments (`enable` for true) |
| cover\_index | No | integer | Array index of the photo to use as cover (default `0`) |
| photos | Yes | file array | Up to 5 image files uploaded as multi-part form data (`photos[]`) |

**Example Response**

```
{
    "merchant": "OSSN 10.0",
    "url": "https:\/\/yourwebsite.com\/",
    "time_token": 1785861000,
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
| success | Boolean status indicating whether product creation succeeded |
| product | Object containing full details of the newly created marketplace product |
