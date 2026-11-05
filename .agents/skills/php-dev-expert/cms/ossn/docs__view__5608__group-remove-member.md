# Group remove member | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5608/group-remove-member

---

Triggers after admin removes group member.

```
<?php
function my_component_init(){
		ossn_register_callback('group', 'delete:member', 'my_component_cb');
}
function my_component_cb($callback, $type, array $params){
		//$params['user_guid'] and $params['group_guid'] 
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```
