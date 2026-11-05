# Group send join request | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5606/group-send-join-request

---

Triggers after user send group join request. Useful if you wanted to check request and delete it in certian cases.

```
<?php
function my_component_init(){
		ossn_register_callback('group', 'send:request', 'my_component_cb');
}
function my_component_cb($callback, $type, array $params){
		//$params['user_guid'] and $params['group_guid'] 
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```
