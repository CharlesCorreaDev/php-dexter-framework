# eGifts Lists | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7983/egifts-lists

---

Documentation to retrieve a list of e-gifts. Learn to correctly structure the request to fetch available e-gifts on the OSSN platform.

**Endpoint**

- `https://yourwebsite.com/api/v6.0/egfits/list`

**Method:**

- GET

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| offset | No | integer | Page/offset number for pagination (default `1`) |

**Example Response**

```
{
    "merchant": "OSSN 10.0",
    "url": "http:\/\/localhost\/10\/",
    "time_token": 1785859232,
    "payload": {
        "list": [
            {
                "data": {},
                "guid": 15,
                "time_created": 1785858885,
                "time_updated": 1785858885,
                "owner_guid": 1,
                "description": "Love gift",
                "title": "Gift Love",
                "type": "site",
                "subtype": "egifts",
                "payment_mode": "wallet",
                "total_price": "10",
                "icon_time": "1785858885",
                "icon_guid": "87",
                "icon_url": "http:\/\/localhost\/10\/egifts\/image\/87\/9e70927d.jpg"
            }
        ],
        "offset": false,
        "count": 1
    },
    "code": "100",
    "message": "Request successfully executed"
}
```

**Return payload parameter description**

| Parameter name | Explain |
| --- | --- |
| list | Array containing the list of available e-gifts |
| offset | Current offset/pagination state |
| count | Total count of items retrieved in the current payload |
