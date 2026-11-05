# Webhook examples | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/development/webhooks-examples

---

On this page

This page contains numerous webhook examples.

### Close the chat if the passed variable has changed[​](#close-the-chat-if-the-passed-variable-has-changed "Direct link to Close the chat if the passed variable has changed")

- Type - Single event
- Event - `chat.chat_variables_changed`

Conditions

> - `{args.vars.pid.new}` `!=` `{args.vars.pid.old}`
> - `{args.vars.pid.new}` `Not empty`
> - `{args.vars.pid.old}` `Not empty`
