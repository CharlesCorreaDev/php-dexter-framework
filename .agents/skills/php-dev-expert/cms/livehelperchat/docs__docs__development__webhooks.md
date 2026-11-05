# Webhooks | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/development/webhooks

---

On this page

There are two types of events:

- **Hook-based event:** A webhook that sends a request to a third-party service when an event occurs in Live Helper Chat (e.g., a chat is closed or started).
- **Continuous event:** An event that is executed repeatedly as long as a condition is met.

There is also a video tutorial available: <https://youtu.be/TKO30hV0lqs>

## How to activate webhooks[​](#how-to-activate-webhooks "Direct link to How to activate webhooks")

First, enable webhooks in your `settings.ini.php` file:

```
'webhooks' =>  
    array(  
        'enabled' => true,  
        'worker' => 'http', // resque  
        'single_event' => false  
    ),
```

These settings can be found here: <https://github.com/LiveHelperChat/livehelperchat/blob/master/lhc_web/settings/settings.ini.default.php#L73-L77>

If you are updating from a version older than 3.47v, you must add these settings manually.

## Worker options[​](#worker-options "Direct link to Worker options")

By default, events are executed in `http` mode. This means that when an event occurs, it is executed immediately. The disadvantage of this approach is that it can slow down the user interface for the visitor or operator.

If you are using the [lhc-php-resque](https://github.com/LiveHelperChat/lhc-php-resque) extension, it is recommended to use `resque` as the worker. This will execute all events in the background.

## `single_event` setting purpose[​](#single_event-setting-purpose "Direct link to single_event-setting-purpose")

This setting is relevant only if worker is `resque`.

- `single_event => false` - This is the default option. It means if during event processing, another event is dispatched, it will be processed as a separate job.
- `single_event => true` - If we are already in background mode and during script execution another event is dispatched, it will be processed instantly. In other words, we will not schedule new jobs if we are already in the background.

I would suggest keeping this value as false. If event execution order is important to you, you can set it to true.

## How to setup hook based event?[​](#how-to-setup-hook-based-event "Direct link to How to setup hook based event?")

I'll provide an example of how to set up an event when a chat closes.

- First, identify the event you want to listen for from the [hooks](docs__docs__hooks.md) list. In this case, we'll use the `chat.close` event, which has two arguments:
  - `chat` - The chat instance.
  - `user_data` - The user instance.
- You can find descriptions of their models at <https://api.livehelperchat.com/#/>
- You can use these variables in the REST API with placeholders like `{{args.chat.id}}` or `{{args.user_data.id}}`. You can access nested attributes within these variables.

Here's an example of a `webhook` configuration:

![](/assets/images/webhook-b665ede13939ea8fcdf4d46225352654.png)

In this example, a bot and trigger are configured to execute when the event occurs, and the conditions are valid (`Execute if conditions are valid`).

The `Execute if conditions are NOT valid` option is useful for continuous webhooks. For example, if condition `A` is met, an alert icon is added; if the condition is not met, the alert icon is removed.

## How to setup a continuous chat hook event?[​](#how-to-setup-a-continuous-chat-hook-event "Direct link to How to setup a continuous chat hook event?")

The general purpose is the same as with hook-based events: to execute a trigger if certain conditions are met (e.g., add an [alert icon](docs__docs__bot__alert-icon.md) to the chat).

Conditions are checked **only** for `Active`, `Bot`, and `Pending` chats.

There are three types of conditions you can check before an event is executed:

- `Visitor message contains`: Checks if the last chat message from the visitor contains specific keywords.
- `Compare attribute`: Compares any chat attribute to determine if the conditions are met.
- `Start of OR`: Allows you to create `OR` conditions between groups of conditions.

Related cron jobs:

- For continuous events to work, you must run the [webhooks cron job](docs__docs__development__cronjob.md#continuous-webhooks-cronjob).
- For department statistics to work, you must run the [statistic cron jobs](docs__docs__development__cronjob.md#statistic-cronjob).

### Visitor message contains[​](#visitor-message-contains "Direct link to Visitor message contains")

This condition allows you to check if a visitor's message contains specific keywords. Text matching rules can be found [here](docs__docs__bot__triggers.md#custom-text-matching).

![](data:image/png;base64,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)

### Compare attribute[​](#compare-attribute "Direct link to Compare attribute")

You can compare any chat attribute using this condition. You also have access to the special placeholder `{time}`, which represents the current timestamp. Mathematical expressions are also supported.

Supported placeholders:

- `{args.chat.<any chat attr>}`: You can use this for comparison, including sub-attributes like `{args.chat.department.<any_department_attribute>}`. See the [Chat object](https://github.com/LiveHelperChat/livehelperchat/blob/master/lhc_web/lib/models/lhchat/erlhcoreclassmodelchat.php#L196) and the `__get` method for magic attributes like:
  - `department` or `user`
    - `{args.chat.user.name_support}`: The name visible in the widget.
    - `{args.chat.user.name_official}`: The name visible in the back office.
- `{time}`: The current timestamp.
- `{args.chat.lsync}`: The last time the visitor was seen online or checked for messages.
- `{args.chat.status_sub}`: Checks for the chat's sub-status.

  ```
  const STATUS_SUB_DEFAULT = 0;  
  const STATUS_SUB_OWNER_CHANGED = 1;  
  const STATUS_SUB_CONTACT_FORM = 2;  
  const STATUS_SUB_USER_CLOSED_CHAT = 3;  
  const STATUS_SUB_START_ON_KEY_UP = 4;  
  const STATUS_SUB_SURVEY_SHOW = 5;  
  const STATUS_SUB_SURVEY_COLLECTED = 6;  
  const STATUS_SUB_OFFLINE_REQUEST = 7;  
  const STATUS_SUB_ON_HOLD = 8;  
  const STATUS_SUB_SURVEY_COMPLETED = 9;
  ```
- `{args.chat.status}`: Checks for the chat's status.

  ```
  const STATUS_PENDING_CHAT = 0;  
  const STATUS_ACTIVE_CHAT = 1;  
  const STATUS_CLOSED_CHAT = 2;  
  const STATUS_CHATBOX_CHAT = 3;  
  const STATUS_OPERATORS_CHAT = 4;  
  const STATUS_BOT_CHAT = 5;
  ```
- `{args.chat.user.id}`: The operator object with its own [attributes](https://github.com/LiveHelperChat/livehelperchat/blob/master/lhc_web/lib/models/lhuser/erlhcoreclassmodeluser.php#L15).
- `{args.chat.last_op_msg_time}`: You *cannot* use this attribute in bot chat status because while chatting with a bot it remains zero always. Use `{args.chat.last_user_msg_time}` as the bot should always respond within a few seconds.
- `{args.chat.id}`: [Chat object](https://github.com/LiveHelperChat/livehelperchat/blob/master/lhc_web/lib/models/lhchat/erlhcoreclassmodelchat.php#L196) also see `__get` method for magic attributes like
  - `department` or `user`
    - `{args.chat.user.name_support}` name visible in the widget or
    - `{args.chat.user.name_official}` name visible in the back office

These are the main classes:

- [`args.chat.<attr>`](https://github.com/LiveHelperChat/livehelperchat/blob/master/lhc_web/lib/models/lhchat/erlhcoreclassmodelchat.php)
- [`args.chat.user.<attr>`](https://github.com/LiveHelperChat/livehelperchat/blob/master/lhc_web/lib/models/lhuser/erlhcoreclassmodeluser.php)
- [`args.chat.department.<attr>`](https://github.com/LiveHelperChat/livehelperchat/blob/master/lhc_web/lib/models/lhdepartament/erlhcoreclassmodeldepartament.php)
- [`args.chat.incoming_chat.<attr>`](https://github.com/LiveHelperChat/livehelperchat/blob/master/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatincoming.php)
- [`args.chat.incoming_chat.incoming.<attr>`](https://github.com/LiveHelperChat/livehelperchat/blob/master/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatincomingwebhook.php)

All classes can be found [here](https://github.com/LiveHelperChat/livehelperchat/tree/master/lhc_web/lib/models).

### Examples[​](#examples "Direct link to Examples")

#### Example: When a customer writes "hello," "are you there," or "hi," and there is no reply from an agent within 25 seconds.[​](#example-when-a-customer-writes-hello-are-you-there-or-hi-and-there-is-no-reply-from-an-agent-within-25-seconds "Direct link to Example: When a customer writes \"hello,\" \"are you there,\" or \"hi,\" and there is no reply from an agent within 25 seconds.")

![](/assets/images/webhook-example-one-c3916883b66b54b5898d1b96995e1cae.png)

#### Example: When a customer writes "hello" or "are you there" more than once in a row.[​](#example-when-a-customer-writes-hello-or-are-you-there-more-than-once-in-a-row "Direct link to Example: When a customer writes \"hello\" or \"are you there\" more than once in a row.")

![](data:image/png;base64,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)

You can combine these two rules into a single continuous webhook using `Start of OR`.

![](/assets/images/webhook-example-3-0c752d0af7e116fa1671705f27d6aa9f.png)

#### Example: When a bot does not respond for 60 seconds.[​](#example-when-a-bot-does-not-respond-for-60-seconds "Direct link to Example: When a bot does not respond for 60 seconds.")

Conditions:

- First, check that the chat is in bot status: `{args.chat.status} = 5`
- More than 60 seconds have passed since the visitor's last message: `{args.chat.last_user_msg_time} < {time}-60` OR `{args.chat.last_msg.time} < {time}-60`
- The widget is not closed: `{args.chat.status_sub} != 3`
- The visitor was seen in the last two minutes: `{args.chat.lsync} > {time}-120`. *Remove* this rule in third-party integrated chats, as this attribute is always zero in those cases (e.g., WhatsApp).
- The last message was a visitor message: `{args.chat.last_msg_text.user_id} = 0`. We don't want to terminate the chat if the visitor is not replying. `last_msg_text` ensures we ignore typing meta messages. If that's not the case you can use `last_msg`

![](/assets/images/bot-not-responding-4238b109d49cc50613ae2f0d2d81c92d.png)

#### Example: When a user is not responding to a bot for 60 seconds.[​](#example-when-a-user-is-not-responding-to-a-bot-for-60-seconds "Direct link to Example: When a user is not responding to a bot for 60 seconds.")

Conditions:

- First, check that the chat is in bot status: `{args.chat.status} = 5`
- More than 60 seconds have passed since the bot's last message: `{args.chat.last_msg.time} < {time}-60`
- The widget is not closed: `{args.chat.status_sub} != 3`
- The last message was a bot message: `{args.chat.last_msg.user_id} = -2`.

![](/assets/images/user-not-replying-e6e28eaafb1e240a3575a755cb2a8bf9.png)

#### Example: When an agent's chat duration is greater than 1.5 times the department's average chat time.[​](#example-when-an-agents-chat-duration-is-greater-than-15-times-the-departments-average-chat-time "Direct link to Example: When an agent's chat duration is greater than 1.5 times the department's average chat time.")

Here are a few considerations:

- Check that the chat status is active: `{args.chat.status} = 1`
- The chat sub-status indicates that the visitor has not closed the chat explicitly: `{args.chat.status_sub} != 3`. You can find possible values in the [API documentation](https://api.livehelperchat.com/#/).
- `{time}-({args.chat.pnd_time}+{args.chat.wait_time}) > 1.5*{args.chat.department.stats.stats_array.avg_chat_duration}`
  - The left side calculates how long the chat has been going on: `Current time - (time when chat became pending + time the visitor waited for the chat to be accepted)`.
  - This is compared to 1.5 multiplied by the `department's average chat duration`. To use this attribute, you must run the [statistic cron jobs](docs__docs__development__cronjob.md#statistic-cronjob).

![](/assets/images/webhook-example-4-19d492fefd44bd910192e409b0897a65.png)

#### Example: Send an email when a customer fills out a survey.[​](#example-send-an-email-when-a-customer-fills-out-a-survey "Direct link to Example: Send an email when a customer fills out a survey.")

The idea is to send an email to the department's email address when a visitor fills out a survey. The same workflow can be used for other events.

- Listen for the `survey.filled` event.

![](/assets/images/surve-filled-b74591e16c9fc45cf9f6351c693b4260.png)

- Execute a trigger with the `Send mail` action.

![](/assets/images/survey-filled-bot-5fc8ca45b28c6637b789904d7d5e10dc.png)

## How to setup a continuous mail hook event?[​](#how-to-setup-a-continuous-mail-hook-event "Direct link to How to setup a continuous mail hook event?")

- All conditions are based on message model attributes. <https://api.livehelperchat.com/#/> MailMessage object definition
- Conversation object can be reached with `{args.chat.conversation....}`
- Event is always triggered for newest mail messages.
- As same mail message can be matched multiple times we are tracking which mail messages were matched already so no duplicate events is processed.
- It's important to limit number of result matched. This can be done via `{args.chat.udate}` attribute.

### How to trigger if mail is in active/pending state for 6 hours[​](#how-to-trigger-if-mail-is-in-activepending-state-for-6-hours "Direct link to How to trigger if mail is in active/pending state for 6 hours")

- Let's assume our trigger is run every 20 seconds.
- We are limiting result set by collecting only mails if they are older than 6 hours but not more than 7 hours.

> `{args.chat.udate} < {time} - 21600` - older than 6 hours
> `{args.chat.udate} > {time} - 25200` - younger than 6 hours
> `{args.chat.status} != 2`  - mail message is not responded.

If you are storing custom variables in a conversation object, you can reach those this way.

```
{args.chat.conversation.mail_variables_array.custom.customerClass}
```

### How do I find message id for debug?[​](#how-do-i-find-message-id-for-debug "Direct link to How do I find message id for debug?")

- Open any conversation and click three dots on desired mail message and copy `Download (eml)` it should look like `https://demo.livehelperchat.com/site_admin/mailconv/apimaildownload/3000000929266/1467` `3000000929266` will be your message id
- Navigate to Audit Log and click `Debug chat attributes`. Instead of Chat ID enter Message ID

## How to setup bot and trigger?[​](#how-to-setup-bot-and-trigger "Direct link to How to setup bot and trigger?")

Our close trigger configuration can look like this.

![](/assets/images/webhook-close-trigger-e0d62ac19c6b9b98df818f6244b0e0e7.png)

## How to configure Rest API call.[​](#how-to-configure-rest-api-call "Direct link to How to configure Rest API call.")

Rest API can be configured same way as it's working with normal bot workflow. Please read [an article](docs__docs__bot__rest-api.md).

tip

If you are using [lhc-php-resque](https://github.com/LiveHelperChat/lhc-php-resque) you do NOT need to choose in your Rest API trigger.

- Send Rest API Call in the background always.
- Send Rest API Call in the background if we are not already in it.

Webhooks already will be processed in the background without blocking UI

## How to send to Rest API only bot chats?[​](#how-to-send-to-rest-api-only-bot-chats "Direct link to How to send to Rest API only bot chats?")

You can use [Rest API conditions](docs__docs__bot__rest-api.md#conditions) tab.
