# Group Unjoin | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/3603/group-unjoin

---

**Brief description:**

- Unjoin a specific group.

**Endpoint**

- `https://www.mywebsite.com/api/v1.0/groups_unjoin`

**Method:**

- POST / GET

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| group\_guid | Yes | integer | A group ID |
| guid | Yes | integer | User `GUID` who is unjoining the group |

**Example Response**

```
{
    "merchant": "Open Source Social Network",
    "url": "http:\/\/www.mywebsite.com\/",
    "time_token": 1569329343,
    "payload": {
        "group": {
            "guid": "7",
            "title": "Test Group",           
			...
            ...
            ...
            "ismember": false,
            "request_exists": false,
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
| group.ismember | always `false` |
| group.request\_exists | always `false` |
