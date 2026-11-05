# Group approve request | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5607/group-approve-request

---

Triggers after admin approves the join request.

```
<?php
function my_component_init(){
		ossn_register_callback('group', 'approve:request', 'my_component_cb');
}
function my_component_cb($callback, $type, array $params){
		//$params['user_guid'] and $params['group_guid'] 
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```
