# eGifts Received | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7986/egifts-received

---

Documentation for using the API's GET/POST method to retrieve a list of eGifts received by a specific user on the OSSN platform. Learn to correctly structure the request to fetch historical received gifts with pagination.

**Endpoint**

- `https://yourwebsite.com/api/v6.0/egfits/received`

**Method:**

- GET / POST

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| uguid | Yes | integer | Logged-in user GUID (Recipient) |
| offset | No | integer | Page/offset number for pagination (default `1`) |

**Example Response**

```
{
    "merchant": "OSSN 10.0",
    "url": "https:\/\/yourwebsite.com\/",
    "time_token": 1785860862,
    "payload": {
        "list": [
            {
                "data": {},
                "guid": 17,
                "time_created": 1785860172,
                "time_updated": 1785860172,
                "owner_guid": 2,
                "description": "",
                "title": "",
                "type": "user",
                "subtype": "egift:sent",
                "sender_guid": "1",
                "egift_guid": "15",
                "total_price": "10",
                "payment_mode": "wallet",
                "icon_url": "https:\/\/yourwebsite.com\/egifts\/image\/\/9eb0e20e.jpg"
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
| list | Array containing the received eGift items |
| offset | Current page offset number |
| count | Total count of eGifts received by the user |
