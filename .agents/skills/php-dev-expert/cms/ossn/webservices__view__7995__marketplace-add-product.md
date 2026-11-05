# Marketplace add product | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7995/marketplace-add-product

---

Documentation for using the API's GET/POST method to view full details of a specific marketplace product. Learn to correctly structure the request payload to retrieve detailed product information, photo galleries, like/reaction metadata, comment counts, category details, and seller profile data on the OSSN platform.

**Endpoint**

`https://yourwebsite.com/api/v6.0/marketplace/view`

**Method:**

- GET / POST

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| guid | Yes | integer | GUID of the marketplace product to view |
| uguid | No | integer | GUID of the user viewing the product (used for calculating `is_liked_by_user`) |

**Example Response**

```
{
    "merchant": "OSSN 10.0",
    "url": "https:\/\/yourwebsite.com\/",
    "time_token": 1786125100,
    "payload": {
        "product": {
            ...
            "cl_entity_guid": "151",
            "is_liked_by_user": false,
            "last_three_reactions": [],
            "total_likes": 5,
            "product_owner": {
                "guid": 1,
                "name": "John Doe",
                "username": "johndoe",
                "icon": "https:\/\/yourwebsite.com\/avatar\/johndoe"
            },
            "photos": [
                {
                    "full": "https:\/\/yourwebsite.com\/marketplace\/photo\/151\/full.jpg",
                    "html": "<a data-fancybox='gallery' href='https:\/\/yourwebsite.com\/marketplace\/photo\/151\/full.jpg'><img class='img-thumbnail ossn-photos-wall-item ossn-photo-wall-item-small' src='https:\/\/yourwebsite.com\/marketplace\/photo\/151\/thumb.jpg' \/><\/a>",
                    "url": "https:\/\/yourwebsite.com\/marketplace\/photo\/151\/thumb.jpg"
                }
            ],
            "category": {
                "title": "Electronics"
            },
            "cover": "https:\/\/yourwebsite.com\/marketplace\/cover\/151\/b16a457a3302d7c1f4563df2ffc96dccf3779af7.jpg"
        }
    },
    "code": "100",
    "message": "Request successfully executed"
}
```

**Return payload parameter description**

| Parameter name | Explain |
| --- | --- |
| product | Detailed object of the marketplace product including photos, likes, category, and owner details |
| photos | Array of uploaded product photo objects containing thumbnail `url`, `full` size URL, and rendered `html` tags |
| product\_owner | Sanitized user object containing details about the product seller |
| is\_liked\_by\_user | Boolean flag indicating if the inspecting user (`uguid`) liked the item |
| total\_likes | Total number of likes/reactions registered on the product's entity |
