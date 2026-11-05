# Group Members | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/3605/group-members

---

**Brief description:**

- Get a list of group members.

**Endpoint**

- `https://www.mywebsite.com/api/v1.0/groups_members`

**Method:**

- POST / GET

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| group\_guid | Yes | integer | A group ID |
| offset | No | integer | If `count > 10`, you can set offset to `1, 2, 3..` for next 10 records default: `1` |

**Example Response**

```
{
    "merchant": "Open Source Social Network",
    "url": "http:\/\/local.opensource-socialnetwork.org\/",
    "time_token": 1569330120,
    "payload": {
        "members": [
            {
                "guid": "26",
                "first_name": "Eldridge",
                "last_name": "Runte",
                "fullname": "Eldridge Runte",
                ...
                ...
                ...
            },
            {
                "guid": "29",
                "first_name": "Aniyah",
                "last_name": "Ondricka",
                "fullname": "Aniyah Ondricka",
                ...
                ...
                ...
            },
            {
                "guid": "1",
                "first_name": "System",
                "last_name": "Administrator",
                "fullname": "System Administrator",
                ...
                ...
            }
        ],
        "count": "3",
        "offset": 1
    },
    "code": "100",
    "message": "Request successfully executed"
}
```

**Return payload parameter description**

| Parameter name | Explain |
| --- | --- |
| members | `false` if not requests |
| count | Total members |
| offset | Current pagination number |
