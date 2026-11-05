# Group Request Decline | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/3608/group-request-decline

---

**Brief description:**

- Decline a member request for a group.

**Endpoint**

- `https://www.mywebsite.com/api/v1.0/groups_request_decline`

**Method:**

- POST / GET

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| group\_guid | Yes | integer | A group ID |
| guid | Yes | integer | A member `GUID` you wanted to decline |
| uguid | Yes | integer | A group owner `GUID` |

**Example Response**

```
{
    "merchant": "Open Source Social Network",
    "url": "http:\/\/local.opensource-socialnetwork.org\/",
    "time_token": 1569330120,
    "payload": true,
    "code": "100",
    "message": "Request successfully executed"
}
```

**Return payload parameter description**

| Parameter name | Explain |
| --- | --- |
| payload | `true` or `false` |

**Remarks**

- You will get error `200` if owner did not matches or group did not found.
- Error `103` if user you trying to decline request, is not valid user.
