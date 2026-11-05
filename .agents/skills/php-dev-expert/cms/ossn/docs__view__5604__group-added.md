# Group added | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5604/group-added

---

Triggers after group is created.

```
<?php
function my_component_init(){
		ossn_register_callback('group', 'add', 'my_component_cb');
}
function my_component_cb($callback, $type, array $params){
		//$params['group_guid'] contains group GUID that has been created.
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```
