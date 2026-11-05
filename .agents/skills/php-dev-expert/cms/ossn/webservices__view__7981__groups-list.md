# Groups List | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7981/groups-list

---

**Brief description:**

- The OSSN Groups List API lets developers retrieve groups from an Open Source Social Network. Build mobile apps, websites, and integrations with fast JSON endpoints supporting pagination and group discovery.

**Endpoint**

- `https://www.mywebsite.com/api/v2.0/group/list`

**Method:**

- POST / GET

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |

**Example Response**

```
{
    "merchant": "OSSN 10.0",
    "url": "http:\/\/localhost\/10\/",
    "time_token": 1785529617,
    "payload": {
        "list": [
            {
                "data": {},
                "guid": 14,
                "time_created": 1785529615,
                "time_updated": 1785529615,
                "owner_guid": 1,
                "description": "",
                "title": "Group Name",
                "type": "user",
                "subtype": "ossngroup",
                "membership": "2"
            }
        ],
        "count": 1,
        "offset": false
    },
    "code": "100",
    "message": "Request successfully executed"
}
```
