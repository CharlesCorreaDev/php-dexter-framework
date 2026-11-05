# Group Add | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/4553/group-add

---

**Brief description:**

- Add a group for user
- Since `v6.4` make sure you are running Ossn Services `6.4`

**Endpoint**

- `https://www.mywebsite.com/api/v1.0/groups_add`

**Method:**

- POST / GET

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| guid | Yes | integer | `UserID` owner of group |
| name | Yes | string | Name of group |
| privacy | Yes | integer | `2` Public `1` Closed |
| **Example Response** |  |  |  |

```
{
    "merchant": "Open Source Social Network",
    "url": "https:\/\/dev.opensource-socialnetwork.org\/",
    "time_token": 1600880944,
    "payload": {
        "data": {},
        "guid": 69,
        "time_created": 1600880944,
        "owner_guid": 1,
        "description": "",
        "title": "TestGroup",
        "type": "user",
        "subtype": "ossngroup",
        "membership": "2"
    },
    "code": "100",
    "message": "Request successfully executed"
}
```

**Return payload parameter description**

| Parameter name | Explain |
| --- | --- |
| title | Name of the group |
| guid | Group `ID` |
| owner\_guid | Group Owner `UserID` |
| membership | Group Privacy |
