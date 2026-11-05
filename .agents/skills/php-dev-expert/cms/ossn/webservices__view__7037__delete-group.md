# Delete Group | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7037/delete-group

---

**Brief description:**

`Since Ossn Services 9.4`

- Permanently delete a specific OSSN group from the system. This action will remove the group along with all its associated content, including posts, comments, and member interactions. Once deleted, the group cannot be restored, and all data will be lost. Ensure that you want to proceed with this action before confirming the deletion.

**Endpoint**

- `https://www.mywebsite.com/api/v2.0/group/delete`

**Method:**

- POST / GET

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| uguid | Yes | integer | User ID you wish to delete group |
| group\_guid | Yes | integer | Group GUID |

On success returns status success

**Response**

```
{
    "merchant": "OSSN 7.3",
    "url": "http:\/\/local.opensource-socialnetwork.org\/",
    "time_token": 1712576126,
    "payload": {
        "status": "success",
        "message": "Group and group contents deleted"
    },
    "code": "100",
    "message": "Request successfully executed"
}
```

**Failed response**

```
{
    "merchant": "OSSN 7.3",
    "url": "http:\/\/local.opensource-socialnetwork.org\/",
    "time_token": 1712576325,
    "payload": false,
    "code": "200",
    "message": "Invalid group"
}
```
