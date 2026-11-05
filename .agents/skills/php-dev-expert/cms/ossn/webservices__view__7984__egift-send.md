# eGift Send | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/webservices/view/7984/egift-send

---

Documentation for using the API's POST method to send an eGift to one or more friends. Learn to correctly structure the request payload to validate recipients and execute wallet or points transactions on the OSSN platform.

**Endpoint**

- `https://yourwebsite.com/api/v6.0/egfits/send`

**Method:**

- POST / GET

**Parameter:**

| Parameter name | Required | Type | Explain |
| --- | --- | --- | --- |
| api\_key\_token | Yes | string | Your API key |
| uguid | Yes | integer | Logged-in user GUID (Sender) |
| guid | Yes | integer | GUID of the eGift item to send |
| friends | Yes | string | Comma-separated list of recipient friend GUIDs (e.g., `2` or `2,3,4`) |

**Example Response**

```
{
    "merchant": "OSSN 10.0",
    "url": "https:\/\/yourwebsite.com\/",
    "time_token": 1785860172,
    "payload": {
        "success": true,
        "sent_count": 1,
        "failed_count": 0,
        "message": "eGift sent to the (1) friends"
    },
    "code": "100",
    "message": "Request successfully executed"
}
```

**Return payload parameter description**

| Parameter name | Explain |
| --- | --- |
| success | Boolean status indicating if the sending operation succeeded |
| sent\_count | Total number of successfully processed gifts sent to valid recipients |
| failed\_count | Total number of failed gift transfers |
| message | Human-readable result message describing the sent count |
