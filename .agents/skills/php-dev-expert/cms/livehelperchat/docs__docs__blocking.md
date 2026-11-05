# How to block visitors from starting a chat | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/blocking

---

On this page

## Block Users Directly from Chat[​](#block-users-directly-from-chat "Direct link to Block Users Directly from Chat")

You can block users directly from the chat interface by clicking the block icon ![](data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCAAWABcDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD9Hvix8S0+GPh22uodLuNe1vUruPTdI0e1YI97dyZ2IXIIjQBWd5CCERGbBxg+a/ELxf8AF74Y/Dq48Ua54p+HcN7CqBNFTw/qDrcXDMAlrDcLeF5HYnapW3yTj5B20/2ldQl8DzeBviTJp15q2jeD9SnudVtrCHzpo7Wa0lga4VMjPll1LeiFz2rP8C29v4tjtvjb8SNV0u1sYbc3WgWJvopNO0G0cY89pg3lyXLqfmlBKqDsQ4yWzu7Oztbd9lZdHu9/L7neno0rXutu7v36W089fNW9E+DvxQj+LXguLWH0q68P6rDM9lqmi33+u0+8jwJIWOBuAyCrYG5WU4GcArlP2c1m1/8A4Trx0LS4sNM8X65/aGmQXURike0jtobeOcoeV83yTIMgHayZFFby6O1rpadm1qvk9Nde5nHrrfV/mexV53H+zj8JoblbiP4XeDEuFcSLKvh+0DhgchgfLznPOaKKhaO6Keqs9j0WiiigD//Z).

A list of all blocked IP addresses can be found in the blocked visitors list.

> System configuration -> Live help configuration -> Blocked users

### Permissions[​](#permissions "Direct link to Permissions")

To block users, an operator must have the following permission:

> 'lhchat','allowblockusers'

note

Blocking the sender of a **mail conversation** uses a separate permission - `'lhmailconv','block_sender'`. See [Mail window](docs__mail__mail-window.md#block-sender).

## Block Users Based on Their Location[​](#block-users-based-on-their-location "Direct link to Block Users Based on Their Location")

You can block users based on their country. This feature is located at:

> "System configuration" => "Live help configuration" => "GEO adjustment"

Screenshot of the main window:

![](https://livehelperchat.com/var/media/images/geo-adjustment.png)

### Configuration[​](#configuration "Direct link to Configuration")

For this module to function correctly, GEO detection must be configured.

The variables are explained below:

- **Offline status:** Chat will always appear offline to visitors from the selected countries.
- **Hidden/disabled:** If a user tries to start a chat, they will see a message indicating that chat is not supported in their country. Proactive invitations will also be disabled, and they will be unable to initiate a chat.
- **Apply to chat widget status indicator these rules also? performance decrease is associated with this option:** Applying these rules to the chat widget status indicator will reflect the status (offline or hidden) from the initial stage. If disabled, the check will only be applied when the user interacts with the widget. Note that enabling this option may slightly decrease performance because the script must check the visitor's location on each request.

### Permissions[​](#permissions-1 "Direct link to Permissions")

To configure GEO Adjustments, an operator must have the following permission:

> 'chat', 'geoadjustment'

### Examples[​](#examples "Direct link to Examples")

#### Allow chat only from Lithuania and Great Britain, and show offline status for all other visitors[​](#allow-chat-only-from-lithuania-and-great-britain-and-show-offline-status-for-all-other-visitors "Direct link to Allow chat only from Lithuania and Great Britain, and show offline status for all other visitors")

The configuration for this scenario would be:

![](https://livehelperchat.com/var/media/images/example-geo-1.png)

#### Block all chat requests from Lithuania, and show the usual status for all other countries[​](#block-all-chat-requests-from-lithuania-and-show-the-usual-status-for-all-other-countries "Direct link to Block all chat requests from Lithuania, and show the usual status for all other countries")

The configuration for this scenario would be:

![](https://livehelperchat.com/var/media/images/example-geo-2.png)

#### Show normal status for France, offline status for Germany, and hide the chat for all other countries[​](#show-normal-status-for-france-offline-status-for-germany-and-hide-the-chat-for-all-other-countries "Direct link to Show normal status for France, offline status for Germany, and hide the chat for all other countries")

The configuration for this scenario would be:

![](https://livehelperchat.com/var/media/images/example-geo-3.png)

## Block Users by IP Address[​](#block-users-by-ip-address "Direct link to Block Users by IP Address")

To block users from starting a chat based on their IP address, navigate to:

> "Configuration" -> "Live help configuration" -> "Chat configuration" -> "Online tracking"

Edit the "Which IP should not be allowed to chat" field.

Possible values:

- Wildcard format: `1.2.3.*`
- CIDR format: `1.2.3/24` OR `1.2.3.4/255.255.255.0`
- Start-End IP format: `1.2.3.0-1.2.3.255`

Separate multiple values with commas (e.g., `1.2.3.*,128.8.8.8`).

## Ignore IPs in Online Users List[​](#ignore-ips-in-online-users-list "Direct link to Ignore IPs in Online Users List")

To prevent users from appearing on the online users list based on their IP address, navigate to:

> "Configuration" -> "Live help configuration" -> "Chat configuration" -> "Online tracking"

Edit the "Which IP should be ignored in online users list, separate by comma" field.

Possible values:

- Wildcard format: `1.2.3.*`
- CIDR format: `1.2.3/24` OR `1.2.3.4/255.255.255.0`
- Start-End IP format: `1.2.3.0-1.2.3.255`

Separate multiple values with commas (e.g., `1.2.3.*,128.8.8.8`).

## IP Detection Issues[​](#ip-detection-issues "Direct link to IP Detection Issues")

If Live Helper Chat fails to detect IP addresses correctly, especially when running behind a load balancer or proxy server, change the `proxy_mode` setting in `settings.ini.php` to `true`.

<https://github.com/LiveHelperChat/livehelperchat/blob/master/lhc_web/settings/settings.ini.default.php#L18>
