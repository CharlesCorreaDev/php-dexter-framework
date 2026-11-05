# Message or chat after created | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5613/message-or-chat-after-created

---

Triggers after message/chat is created.

```
<?php
function my_component_init(){
		ossn_register_callback('message', 'created', 'my_component_cb');
}
function my_component_cb($callback, $type, array $params){
		//$params[message_id, message_from, message_to, message]
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```
