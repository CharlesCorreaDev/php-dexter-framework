# User Points Count | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7987/user-points-count

---

Documentation for using the API's GET/POST method to retrieve a user's total points balance on the OSSN platform.

**Endpoint**

- `https://yourwebsite.com/api/v6.0/userpoints/count`

**Method:**

- GET / POST

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| uguid | Yes | integer | Logged-in user GUID |

**Example Response**

```
{
    "merchant": "OSSN 10.0",
    "url": "https:\/\/yourwebsite.com\/",
    "time_token": 1785860900,
    "payload": {
        "userPoints": 150
    },
    "code": "100",
    "message": "Request successfully executed"
}
```

**Return payload parameter description**

| Parameter name | Explain |
| --- | --- |
| userPoints | Total accumulated points balance for the specified user |
