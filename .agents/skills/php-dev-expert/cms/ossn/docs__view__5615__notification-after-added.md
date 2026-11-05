# Notification after added | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5615/notification-after-added

---

Triggers after a notification is added for the user.

```
<?php
function my_component_init(){
		ossn_register_callback('notification', 'add', 'my_component_cb');
}
function my_component_cb($callback, $type, array $params){
		//$params[owner_guid, type, poster_guid, item_guid, subject_guid]
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```
