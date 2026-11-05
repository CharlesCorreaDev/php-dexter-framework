# Notification sent to participant | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5614/notification-sent-to-participant

---

Triggers after a notification is sent to the members who participated in activity.

```
<?php
function my_component_init(){
		ossn_register_callback('notification', 'add:participates', 'my_component_cb');
}
function my_component_cb($callback, $type, array $params){
		//$params[owner_guid, type, poster_guid, item_guid, subject_guid]
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```
