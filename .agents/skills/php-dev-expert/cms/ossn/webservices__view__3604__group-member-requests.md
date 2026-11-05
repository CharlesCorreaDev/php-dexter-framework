# Group Member Requests | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/3604/group-member-requests

---

**Brief description:**

- Retrieve pending group member requests via API – manage join applications, review profiles, and approve/decline members programmatically.

**Endpoint**

- `https://www.mywebsite.com/api/v1.0/groups_requests`

**Method:**

- POST / GET

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| group\_guid | Yes | integer | A group ID |

**Example Response**

```
{
    "merchant": "Open Source Social Network",
    "url": "http:\/\/local.opensource-socialnetwork.org\/",
    "time_token": 1569330004,
    "payload": {
        "requests": [
            {
                "guid": "27",
                "first_name": "Meagan",
                "last_name": "McLaughlin",
                "fullname": "Meagan McLaughlin",
                ...
                ...
                ...
            }
        ]
    },
    "code": "100",
    "message": "Request successfully executed"
}
```

**Return payload parameter description**

| Parameter name | Explain |
| --- | --- |
| requests | `false` if not requests |
